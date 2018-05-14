<?php

/**
 *    Copyright 2015-2018 ppy Pty. Ltd.
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

return [
    'discussion-posts' => [
        'store' => [
            'error' => 'Speichern des Beitrages fehlgeschlagen',
        ],
    ],

    'discussion-votes' => [
        'update' => [
            'error' => 'Aktualisieren der Stimme fehlgeschlagen',
        ],
    ],

    'discussions' => [
        'allow_kudosu' => 'kudosu verteilen',
        'delete' => 'löschen',
        'deleted' => 'Von :editor gelöscht (:delete_time).',
        'deny_kudosu' => 'kudosu verweigern',
        'edit' => 'bearbeiten',
        'edited' => 'Zuletzt bearbeitet von :editor (:update_time).',
        'kudosu_denied' => 'Dir wurde kudosu verweigert.',
        'message_placeholder' => 'Beitrag hier eingeben',
        'message_placeholder_deleted_beatmap' => 'Diese Schwierigkeitsstufe wurde gelöscht und kann nicht mehr diskutiert werden.',
        'message_type_select' => 'Kommentartyp auswählen',
        'reply_notice' => 'Zum Antworten Enter drücken.',
        'reply_placeholder' => 'Antwort hier eingeben',
        'require-login' => 'Zum Beitragen oder Antworten bitte einloggen',
        'resolved' => 'Gelöst',
        'restore' => 'wiederherstellen',
        'title' => 'Diskussionen',

        'collapse' => [
            'all-collapse' => 'Alle reduzieren',
            'all-expand' => 'Alle erweitern',
        ],

        'empty' => [
            'empty' => 'Es gibt noch keine Diskussionen!',
            'hidden' => 'Keine Diskussion entspricht dem ausgewählten Filter.',
        ],

        'message_hint' => [
            'in_general' => 'Dieser Beitrag wird den generellen Beatmapdiskussionen hinzugefügt. Um diese Beatmap zu modden, beginne die Nachricht mit einer Timestamp (z.B. 00:12:345).',
            'in_timeline' => 'Um an mehreren Zeitpunkten zu modden, musst du mehrere Beiträge erstellen (ein Beitrag pro Timestamp).',
        ],

        'message_type' => [
            'disqualify' => '',
            'hype' => '',
            'mapper_note' => 'Anmerkung',
            'nomination_reset' => '',
            'praise' => 'Loben',
            'problem' => '',
            'suggestion' => 'Vorschlag',
        ],

        'mode' => [
            'events' => 'Geschichte',
            'general' => 'Allgemein',
            'timeline' => '',
            'scopes' => [
                'general' => 'Diese Schwierigkeitsstufe',
                'generalAll' => 'Alle Schwierigkeitsstufen',
            ],
        ],

        'new' => [
            'timestamp' => '',
            'timestamp_missing' => 'Strg-C im Editor und in deine Nachricht einfügen, um eine Timestamp hinzuzufügen!',
            'title' => 'Neue Diskussion',
        ],

        'show' => [
            'title' => ':title, erstellt von :mapper',
        ],

        'sort' => [
            '_' => 'Sortiert nach:',
            'created_at' => 'erstellungsdatum',
            'timeline' => '',
            'updated_at' => 'letzter aktualisierung',
        ],

        'stats' => [
            'deleted' => 'Gelöscht',
            'mapper_notes' => 'Anmerkungen',
            'mine' => 'Meine',
            'pending' => 'Ausstehend',
            'praises' => 'Lob',
            'resolved' => 'Gelöst',
            'total' => 'Alle',
        ],

        'status-messages' => [
            'approved' => 'Diese Beatmap wurde am :date <approved>!',
            'graveyard' => "Diese Beatmap wurde seit dem :date nicht mehr aktualisiert und wurde wahrscheinlich vom Schöpfer verlassen...",
            'loved' => 'Diese Beatmap wurde am :date zu <loved> hinzugefügt!',
            'ranked' => 'Diese Beatmap wurde am :date zu <ranked> hinzugefügt!',
            'wip' => 'Anmerkung: Diese Beatmap ist vom Ersteller als \'Work-In-Progress\' gekennzeichnet',
        ],

    ],

    'hype' => [
        'button' => 'Beatmap hypen!',
        'button_done' => 'Schon gehypt!',
        'confirm' => "Sicher? Dies wird eins deiner letzten :n Hypes verwenden und kann nicht rückgängig gemacht werden.",
        'explanation' => 'Hype diese Beatmap, um sie für Nominierungen und <ranked> sichtbarer zu machen!',
        'explanation_guest' => 'Einloggen und diese Beatmap hypen, um sie für Nominierungen und <ranked> sichtbarer zu machen!',
        'new_time' => "Um :new_time wirst du deinen nächsten Hype erhalten.",
        'remaining' => 'Du hast noch :remaining Hypes übrig.',
        'required_text' => '',
        'section_title' => '',
        'title' => '',
    ],

    'feedback' => [
        'button' => 'Feedback abgeben',
    ],

    'nominations' => [
        'disqualification_prompt' => 'Grund für die Disqualifizierung?',
        'disqualified_at' => '',
        'disqualified_no_reason' => '',
        'disqualify' => 'Disqualifizieren',
        'incorrect_state' => 'Ein Fehler ist aufgetreten, versuche die Seite zu aktualisieren.',
        'nominate' => 'Nominieren',
        'nominate_confirm' => 'Diese Beatmap nominieren?',
        'nominated_by' => 'Nominiert von :users',
        'qualified' => 'Die Beatmap wird voraussichtlich am :date <ranked>, wenn keine <issues> gefunden werden.',
        'qualified_soon' => 'Die Beatmap wird bald <ranked>, wenn keine <issues> gefunden werden.',
        'required_text' => 'Nominierungen: :current/:required',
        'reset_message_deleted' => '',
        'title' => 'Nominierungsstatus',
        'unresolved_issues' => 'Es existieren noch <issues>, die gelöst werden müssen.',

        'reset_at' => [
            'nomination_reset' => '',
            'disqualify' => '',
        ],

        'reset_confirm' => [
            'nomination_reset' => '',
        ],
    ],

    'listing' => [
        'search' => [
            'prompt' => 'stichwörter eingeben...',
            'options' => 'Mehr Suchoptionen',
            'not-found' => 'keine ergebnisse',
            'not-found-quote' => '... nope, nichts gefunden.',
            'filters' => [
                'general' => 'Generell',
                'mode' => 'Modus',
                'status' => '',
                'genre' => '',
                'language' => 'Sprache',
                'extra' => '',
                'rank' => 'Erreichter Rang',
                'played' => '',
            ],
        ],
        'mode' => 'Modus',
        'status' => '',
        'mapped-by' => 'Von :mapper erstellt',
        'source' => 'von/aus :source',
        'load-more' => 'Mehr laden...',
    ],
    'general' => [
        'recommended' => 'Empfohlene Schwierigkeit',
        'converts' => 'Konvertierte Beatmaps miteinbeziehen',
    ],
    'mode' => [
        'any' => 'Alle',
        'osu' => '',
        'taiko' => '',
        'fruits' => '',
        'mania' => '',
    ],
    'status' => [
        'any' => 'Alle',
        'ranked-approved' => '<Ranked> & <Approved>',
        'approved' => '<Approved>',
        'qualified' => 'Qualifiziert',
        'loved' => '<Loved>',
        'faves' => 'Favoriten',
        'pending' => 'Ausstehend',
        'graveyard' => '<Graveyard>',
        'my-maps' => 'Meine Beatmaps',
    ],
    'genre' => [
        'any' => 'Alle',
        'unspecified' => 'Nicht angegeben',
        'video-game' => 'Videospiel',
        'anime' => '',
        'rock' => '',
        'pop' => '',
        'other' => 'Andere',
        'novelty' => '',
        'hip-hop' => 'Hip-Hop',
        'electronic' => '',
    ],
    'mods' => [
        '4K' => '',
        '5K' => '',
        '6K' => '',
        '7K' => '',
        '8K' => '',
        '9K' => '',
        'AP' => '',
        'DT' => '',
        'EZ' => 'Easy',
        'FI' => '',
        'FL' => '',
        'HD' => '',
        'HR' => '',
        'HT' => '',
        'NC' => '',
        'NF' => '',
        'NM' => '',
        'PF' => '',
        'Relax' => '',
        'SD' => '',
        'SO' => '',
        'TD' => '',
    ],
    'language' => [
        'any' => 'Alle',
        'english' => 'Englisch',
        'chinese' => 'Chinesisch',
        'french' => 'Französisch',
        'german' => 'Deutsch',
        'italian' => 'Italienisch',
        'japanese' => 'Japanisch',
        'korean' => 'Koreanisch',
        'spanish' => 'Spanisch',
        'swedish' => 'Schwedisch',
        'instrumental' => '',
        'other' => 'Andere',
    ],
    'played' => [
        'any' => '',
        'played' => '',
        'unplayed' => '',
    ],
    'extra' => [
        'video' => 'Hat Video',
        'storyboard' => 'Hat Storyboard',
    ],
    'rank' => [
        'any' => 'Alle',
        'XH' => 'Silber-SS',
        'X' => '',
        'SH' => 'Silber-S',
        'S' => '',
        'A' => '',
        'B' => '',
        'C' => '',
        'D' => '',
    ],
];
