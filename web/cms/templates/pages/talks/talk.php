<?php

  // Header
  perch_layout('talks/head', [
    'body-class' => 'talk',
  ]);

  // Page content
  perch_collection('Talks', [
    'template' => 'talk.html',
    'filter'   => 'slug',
    'match'    => 'eq',
    'value'    => perch_get('s'),
    'count'    => 1,
  ]);

  echo '‹ <a href="/talks/">Back to talks</a>';

  // Footer
  perch_layout('global/footer');
