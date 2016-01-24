<?php

  // Header
  perch_layout('speakers/head', [
    'body-class' => 'speaker',
  ]);

  // Page content
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

  // Footer
  perch_layout('global/footer');
