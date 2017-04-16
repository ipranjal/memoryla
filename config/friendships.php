<?php

return [

    'tables' => [
        'fr_pivot' => 'friendships',
        'fr_groups_pivot' => 'user_friendship_groups'
    ],

    'groups' => [
        'acquaintances' => 0,
        'close_friends' => 2,
        'family' => 3,
        'colleague' => 4,
        'friends' => 1,

    ]

];