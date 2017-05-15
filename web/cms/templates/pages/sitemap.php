<?php
  header('Content-type: application/xml');

  echo '<?xml version="1.0" encoding="UTF-8"?>
  <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

  perch_pages_navigation(array(
    'template'         => 'sitemap.html',
    'hide-default-doc' => true,
    'hide-extensions'  => true,
    'levels'           => 2,
    'use-attributes'   => false,
    'flat'             => true,
  ));

  perch_collection('Events', [
    'template'   => 'sitemap/events.html',
    'sort'       => 'date',
    'sort-order' => 'DESC',
    'filter'     => 'date',
    'match'      => 'lte',
    'value'      => date('Y-m-d'),
  ]);

  perch_collection('Speakers', [
    'template'   => 'sitemap/speakers.html',
    'sort'       => 'name',
    'sort-order' => 'ASC',
    'filter'     => 'status',
    'match'      => 'eq',
    'value'      => 'published'
  ]);

  perch_collection('Talks', [
    'template'   => 'sitemap/talks.html',
    'sort'       => 'title',
    'sort-order' => 'ASC',
    'filter'     => 'status',
    'match'      => 'eq',
    'value'      => 'published'
  ]);

  echo '</urlset>';
