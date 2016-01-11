<?php

  // Header
  perch_layout('global/head', [
    'body-class' => 'speaker',
  ]);

  // Page content
  perch_collection('Speakers', [
      'template'   => 'profile.html',
      'filter'   => 'slug',
      'match'    => 'eq',
      'value'    => perch_get('s'),
      'count'    => 1,
  ]);

  echo '‹ <a href="/speakers/">Back to speakers</a>';

  // Footer
  perch_layout('global/footer');
