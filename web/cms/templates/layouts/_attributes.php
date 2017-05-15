<?php
    $domain        = 'https://'.$_SERVER["HTTP_HOST"];
    $url           = $domain.$_SERVER["REQUEST_URI"];
    $sitename      = 'Frontend NE';
    $twittername   = '@frontendne';
    $sharing_image = perch_path('feathers/frontendne', false, true).'/img/icons/apple-touch-icon-precomposed-180x180.png';
    $author        = 'Frontend NE';
    $title         = perch_pages_title(true);
    $type          = 'website';

    PerchSystem::set_vars([
        'domain'        => $domain,
        'url'           => $url,
        'sharing_image' => $sharing_image,
        'twittername'   => $twittername,
        'sitename'      => $sitename,
        'author'        => $author,
        'title'         => $title,
        'type'          => $type,
    ]);

    perch_page_attributes([
        'template' => 'default.html'
    ]);
