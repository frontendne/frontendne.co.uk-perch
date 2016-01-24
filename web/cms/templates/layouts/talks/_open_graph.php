<meta property="og:title" content="Frontend NE" />
<meta property="og:site_name" content="Frontend NE"/>
<meta property="og:url" content="https://frontendne.co.uk/talks/<?php
      perch_collection('Talks', [
        'filter'   => 'slug',
        'match'    => 'eq',
        'value'    => perch_get('s'),
        'count'    => 1,
        'template' =>'/meta/slug.html',
      ]);
    ?>" />
<meta property="og:image" content="https://frontendne.co.uk<?php perch_path('feathers/frontendne/img/icons/apple-touch-icon-precomposed-180x180.png') ?>" />
<meta property="og:description" content="<?php
      perch_collection('Talks', [
        'filter'   => 'slug',
        'match'    => 'eq',
        'value'    => perch_get('s'),
        'count'    => 1,
        'template' =>'/meta/description_talk.html',
      ]);
    ?>" />
