<?php

  // Header
  perch_layout('global/head', [
    'body-class' => 'talks',
  ]);

  // Page content
  perch_content('Primary content');
  perch_collection('Talks', [
      'template'   => 'talk_listing.html',
      'sort'       => 'title',
      'sort-order' => 'ASC',
      'filter'     => 'status',
      'match'      => 'eq',
      'value'      => 'published'
  ]);

  // Footer
  perch_layout('global/footer');
