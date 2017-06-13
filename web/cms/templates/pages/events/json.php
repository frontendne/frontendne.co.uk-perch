<?php

    $domain = 'https://'.$_SERVER['HTTP_HOST'];

    $feed = [
        'version'       => 'https://jsonfeed.org/version/1',
        'title'         => 'Frontend NE events',
        'home_page_url' => $domain,
        'feed_url'      => $domain.'/events/feed.json',
        'icon'          => $domain.'/cms/addons/feathers/frontendne/img/icons/apple-touch-icon-precomposed-180x180.png',
        'favicon'       => $domain.'/cms/addons/feathers/frontendne/img/icons/favicon.png',
        'items'         => [],
    ];

    $items = perch_collection('Events', [
        'sort'          => 'date',
        'sort-order'    => 'DESC',
        'skip-template' => true,
        'count'         => 10,
    ]);

    if (count($items)) {
        foreach($items as $item) {
            $feed['items'][] = [
                'id'             => $item['_id'],
                'date_published' => date('c', strtotime($item['date'])),
                'title'          => $item['title'],
                'content_html'   => $item['details'],
                'url'            => $domain.'/events/'.$item['slug'],
            ];
        }
    }

    header('Content-Type: application/json');
    echo json_encode($feed);
