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
  ]);

  // Footer
  perch_layout('global/footer');
