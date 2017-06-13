<?php

    $domain = 'https://'.$_SERVER['HTTP_HOST'];
    PerchSystem::set_var('domain', $domain);

    $feed = [
        'version'       => 'https://jsonfeed.org/version/1',
        'title'         => 'Frontend NE events',
        'home_page_url' => PerchUtil::html($domain),
        'feed_url'      => PerchUtil::html($domain).'/events/feed.json',
        'icon'          => PerchUtil::html($domain).'/assets/img/feedburd.png',
        'favicon'       => PerchUtil::html($domain).'/assets/img/burd1.png',
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
            'url'            => PerchUtil::html($domain).'/events/'.$item['slug'],
        ];
    }
}

header('Content-Type: application/json');
echo json_encode($feed);
