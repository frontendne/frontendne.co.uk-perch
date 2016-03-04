<?php

  // Header
  perch_layout('global/head', [
    'body-class' => 'talks',
  ]);

  // Page content

  echo '<div>';

  if (perch_get('cat')) {
    perch_category('topic/'.perch_get('cat').'/',array(
      'template' => 'topic_header.html'
    ));
  } else {
    echo('Talks');
  }

  if (perch_get('cat')) {
    perch_collection('Talks', [
      'category' => 'topic/'.perch_get('cat'),
      'template' => 'topic_listing.html',
      'filter'   => 'status',
      'match'    => 'eq',
      'value'    => 'published'
    ]);
  } else {
    perch_categories(array(
      'set'=>'topic',
    ));
  }

  // Footer
  perch_layout('global/footer');
