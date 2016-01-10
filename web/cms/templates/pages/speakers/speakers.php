<?php

  // Header
  perch_layout('global/head', [
    'body-class' => 'speakers',
  ]);

  // Page content
  perch_collection('Speakers', [
      'template'   => 'speaker_listing.html',
      'sort'       => 'name',
      'sort-order' => 'ASC',
  ]);

  // Footer
  perch_layout('global/footer');
