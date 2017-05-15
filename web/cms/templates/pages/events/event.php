<?php
    $page = 'event';
    perch_layout('head', [
        'page' => $page,
    ]);
    PerchSystem::set_vars(array('todaysDate'=>date('U')));
    $filters = [
        [
            'filter'     => 'slug',
            'match'      => 'eq',
            'value'    => perch_get('s'),
        ],
        [
            'filter'     => 'eventDisplayDate',
            'match'      => 'lte',
            'value'      => date('Y-m-d H:i:s')
        ],
    ];
    perch_collection('Events', [
        'template' => 'event.html',
        'filter'   => $filters,
        'count'    => 1,
    ]);
    echo '<p>‹ <a href="/">Back to homepage</a></p>';
    echo '<p><a href="/events/">View past event announcements</a> ›</p>';
    perch_layout('footer');
