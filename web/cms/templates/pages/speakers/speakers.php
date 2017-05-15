<?php
  perch_layout('head', [
    'body-class' => 'speakers',
  ]);

  perch_content('Primary content');
  perch_collection('Speakers', [
      'template'   => 'speaker_listing.html',
      'sort'       => 'name',
      'sort-order' => 'ASC',
      'filter'     => 'status',
      'match'      => 'eq',
      'value'      => 'published'
  ]);

  perch_layout('footer');
