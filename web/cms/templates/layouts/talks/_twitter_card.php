<meta name="twitter:card" content="summary"/>
<meta name="twitter:site" content="@frontendne"/>
<meta name="twitter:domain" content="<?php
      perch_collection('Talks', [
        'filter'   => 'slug',
        'match'    => 'eq',
        'value'    => perch_get('s'),
        'count'    => 1,
        'template' =>'/meta/description_talk.html',
      ]);
    ?>"/>
<meta name="twitter:creator" content="@frontendne"/>
<meta name="twitter:url" content="https://frontendne.co.uk/talks/<?php
      perch_collection('Talks', [
        'filter'   => 'slug',
        'match'    => 'eq',
        'value'    => perch_get('s'),
        'count'    => 1,
        'template' =>'/meta/slug.html',
      ]);
    ?>" />
