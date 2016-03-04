<?php

  // Header
  perch_layout('global/head', [
    'body-class' => 'speakers',
  ]);

  // Page content
  perch_content('Primary content');
  perch_collection('Speakers', [
      'template'   => 'speaker_listing.html',
      'sort'       => 'name',
      'sort-order' => 'ASC',
      'filter'     => 'status',
      'match'      => 'eq',
      'value'      => 'published'
  ]);

  // Footer
  perch_layout('global/footer');
