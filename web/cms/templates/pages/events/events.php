<?php
  perch_layout('head', [
    'body-class' => 'events',
  ]);
  perch_collection('Events', [
      'template'   => 'event_listing.html',
      'sort'       => 'date',
      'sort-order' => 'DESC',
      'filter'     => 'date',
      'match'      => 'lte',
      'value'      => date('Y-m-d'),
  ]);
  perch_layout('footer');
