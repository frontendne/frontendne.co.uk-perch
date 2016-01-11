<meta name="twitter:card" content="summary"/>
<meta name="twitter:site" content="@frontendne"/>
<meta name="twitter:domain" content="<?php
      perch_collection('Speakers', [
        'filter'   => 'slug',
        'match'    => 'eq',
        'value'    => perch_get('s'),
        'count'    => 1,
        'template' =>'/meta/description_speaker.html',
      ]);
    ?>"/>
<meta name="twitter:creator" content="@frontendne"/>
<meta name="twitter:url" content="https://frontendne.co.uk/speakers/<?php
      perch_collection('Speakers', [
        'filter'   => 'slug',
        'match'    => 'eq',
        'value'    => perch_get('s'),
        'count'    => 1,
        'template' =>'/meta/slug.html',
      ]);
    ?>" />
