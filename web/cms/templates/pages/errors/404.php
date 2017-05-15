<?php
    perch_layout('head', [
        'body-class' => 'error',
    ]);
    echo '<h1>Sorry, that page could not be found.<h1>';
    perch_content('Error description');
    perch_layout('footer_no_content');
