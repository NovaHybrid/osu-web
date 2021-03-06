/**
 *    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

import { dispatch, dispatcher } from 'app-dispatcher';
import { NotificationBundleJson } from 'interfaces/notification-json';
import {
  NotificationEventRead,
} from 'notifications/notification-events';
import { toJson } from 'notifications/notification-identity';
import NotificationStore from 'stores/notification-store';
import { makeNotificationJson, makeStackJson } from './helpers';

describe('Notification Event Read (NotificationType only)', () => {
  // @ts-ignore
  beforeEach(() => dispatcher.listeners.clear());
  // @ts-ignore
  afterEach(() => dispatcher.listeners.clear());

  describe('on NotificationEventRead', () => {
    const identities = [
      { id: 1000, objectType: 'beatmapset', objectId: 1, category: 'beatmapset_discussion' },
      { id: 1002, objectType: 'beatmapset', objectId: 2, category: 'beatmapset_discussion' },
      { id: 1004, objectType: 'channel', objectId: 3, category: 'channel' },
    ];

    const baseUnreadCount = 10;
    const bundleBase = {
      stacks: [
        makeStackJson(identities[0], 2, 'beatmapset_discussion_post_new', 900),
        makeStackJson(identities[1], 2, 'beatmapset_discussion_post_new', 900),
        makeStackJson(identities[2], 6, 'channel_message', 900),
      ],
      types: [
        { cursor: null, name: null, total: baseUnreadCount },
        { cursor: null, name: 'beatmapset', total: 4 },
        { cursor: null, name: 'channel', total: 6 },
      ],
    };

    const notificationsJson = identities.map(toJson).map(makeNotificationJson);

    const bundleWithNotification = { ...bundleBase } as NotificationBundleJson;
    bundleWithNotification.notifications = notificationsJson;
    bundleWithNotification.unread_count = baseUnreadCount;

    const bundleWithoutNotification = { ...bundleBase } as NotificationBundleJson;
    bundleWithoutNotification.unread_count = baseUnreadCount;

    let store!: NotificationStore;
    beforeEach(() => {
      store = new NotificationStore();
    });

    describe('when single notification type is marked as read', () => {
      beforeEach(() => {
        store.stacks.updateWithBundle(bundleWithNotification);
        store.unreadStacks.updateWithBundle(bundleWithNotification);

        const event = new NotificationEventRead([{ objectType: 'beatmapset' }], 4);
        dispatch(event);
      });

      it('decrements the unread count', () => {
        expect(store.unreadStacks.total).toBe(baseUnreadCount - 4);
      });

      it('does not change the total counts of the type', () => {
        expect(store.stacks.total).toBe(10);
        expect(store.stacks.types.get('beatmapset')?.total).toBe(4);
      });

      it('removes the type from unread', () => {
        expect(store.unreadStacks.types.get('beatmapset')).toBeUndefined();
      });
    });

    describe('when all notification type is marked as read', () => {
      beforeEach(() => {
        store.stacks.updateWithBundle(bundleWithNotification);
        store.unreadStacks.updateWithBundle(bundleWithNotification);

        const event = new NotificationEventRead([{ objectType: null }], 10);
        dispatch(event);
      });

      it('decrements the unread count', () => {
        expect(store.unreadStacks.total).toBe(0);
      });

      it('does not change the total counts', () => {
        expect(store.stacks.total).toBe(10);
      });

      it('leaves only all type in unreads', () => {
        const keys = [...store.unreadStacks.types.keys()];

        expect(keys.length).toBe(1);
        expect(keys[0]).toBeNull();
      });
    });
  });
});
