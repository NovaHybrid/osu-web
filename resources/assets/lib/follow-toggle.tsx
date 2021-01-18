// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

import FollowJson from 'interfaces/follow-json';
import { route } from 'laroute';
import * as React from 'react';
import { Spinner } from 'spinner';
import { classWithModifiers, Modifiers } from 'utils/css';

interface Props {
  follow: FollowJson;
  following: boolean;
  modifiers?: Modifiers;
}

interface State {
  following: boolean;
  toggling: boolean;
}

export default class FollowToggle extends React.PureComponent<Props, State> {
  static defaultProps = {
    following: true,
  };

  state: State;

  private toggleXhr: null | JQueryXHR = null;

  constructor(props: Props) {
    super(props);

    this.state = {
      following: this.props.following,
      toggling: false,
    };
  }

  render() {
    return (
      <button
        type='button'
        className={classWithModifiers('btn-circle', this.props.modifiers)}
        onClick={this.onClick}
        disabled={this.state.toggling}
      >
        <span className='btn-circle__content'>
          {this.renderToggleIcon()}
        </span>
      </button>
    );
  }

  private onClick = () => {
    const params = {
      follow: {
        notifiable_id: this.props.follow.notifiable_id,
        notifiable_type: this.props.follow.notifiable_type,
        subtype: this.props.follow.subtype,
      },
    };

    const method = this.state.following ? 'DELETE' : 'POST';

    this.toggleXhr?.abort();

    this.setState({ toggling: true }, () => {
      this.toggleXhr = $.ajax(route('follows.store'), { method, data: params })
        .done(() => {
          if (this.props.follow.subtype === 'mapping') {
            $.publish('user:followUserMapping:update', {
              following: !this.state.following,
              userId: this.props.follow.notifiable_id,
            });
          }
          this.setState({ following: !this.state.following });
        }).always(() => {
          this.setState({ toggling: false });
        });
    });
  }

  private renderToggleIcon() {
    if (this.state.toggling) {
      return (
        <span className='btn-circle__icon'>
          <Spinner />
        </span>
      );
    }

    let hoverIcon: string;
    let normalIcon: string;

    if (this.state.following) {
      normalIcon = 'fas fa-bell';
      hoverIcon = 'fas fa-bell-slash';
    } else {
      normalIcon = 'far fa-bell';
      hoverIcon = 'fas fa-bell';
    }

    return (
      <>
        <span className='btn-circle__icon btn-circle__icon--hover-show'>
          <span className={hoverIcon} />
        </span>
        <span className='btn-circle__icon btn-circle__icon--hover-hide'>
          <span className={normalIcon} />
        </span>
      </>
    );
  }
}