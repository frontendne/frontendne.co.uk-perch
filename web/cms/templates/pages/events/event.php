<?php

  // Header
  perch_layout('events/head', [
    'body-class' => 'event',
  ]);

    PerchSystem::set_vars(array('todaysDate'=>date('U')));


                $filters = array(
            array(
              'filter'     => 'slug',
              'match'      => 'eq',
              'value'    => perch_get('s'),
            ),
            array(
              'filter'     => 'eventDisplayDate',
              'match'      => 'lte',
              'value'      => date('Y-m-d H:i:s')
            ),
        );


  // Page content
  perch_collection('Events', [
    'template' => 'event.html',
    'filter'   => $filters,
    'count'    => 1,
  ]);

  echo '<p>‹ <a href="/">Back to homepage</a></p>';
  echo '<p><a href="/events/">View past event announcements</a> ›</p>';

  // Footer
  perch_layout('global/footer');
