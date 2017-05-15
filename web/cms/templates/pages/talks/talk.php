<?php
    $page = 'talk';
    perch_layout('head', [
        'page' => $page,
    ]);
    perch_collection('Talks', [
        'template' => 'talk.html',
        'filter'   => 'slug',
        'match'    => 'eq',
        'value'    => perch_get('s'),
        'count'    => 1,
    ]);
    echo '‹ <a href="/talks/">Back to talks</a>';
    perch_layout('footer');
