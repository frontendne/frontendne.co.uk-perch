<?php
  perch_layout('head', [
    'body-class' => 'talks',
  ]);

  perch_content('Primary content');
  perch_collection('Talks', [
      'template'   => 'talk_listing.html',
      'sort'       => 'title',
      'sort-order' => 'ASC',
      'filter'     => 'status',
      'match'      => 'eq',
      'value'      => 'published'
  ]);

  perch_layout('footer');
