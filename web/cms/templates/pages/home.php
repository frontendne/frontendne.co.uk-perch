<?php
    $page = 'home';
    perch_layout('head', [
        'page' => $page,
    ]);
    perch_content('About us');
    perch_content('Call for speakers');
    perch_content('Location');
    perch_layout('footer');
