<?php
    $page = 'speaker';
    perch_layout('head', [
        'page' => $page,
    ]);
    perch_collection('Speakers', [
        'template' => 'profile.html',
        'filter'   => 'slug',
        'match'    => 'eq',
        'value'    => perch_get('s'),
        'count'    => 1,
    ]);
    perch_collection('Talks', [
        'template' => 'talk_link.html',
        'filter'   => 'speaker.slug',
        'match'    => 'eq',
        'value'    => perch_get('s'),
    ]);
    echo '‹ <a href="/speakers/">Back to speakers</a>';
    perch_layout('footer');
