<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title><?php perch_pages_title(); ?></title>
    <?php
        if (perch_layout_var('page', true) == 'event') {
            $collection = 'Events';
        };
        if (perch_layout_var('page', true) == 'speaker') {
            $collection = 'Speakers';
        };
        if (perch_layout_var('page', true) == 'talk') {
            $collection = 'Talks';
        };
        if (perch_layout_var('page', true) == 'event' || perch_layout_var('page', true) == 'speaker' || perch_layout_var('page', true) == 'talk') {
            $items = perch_collection($collection, [
                'filter'        => 'slug',
                'match'         => 'eq',
                'value'         => perch_get('s'),
                'skip-template' => 'true',
                'return-html'   => 'true',
            ]);
        };
        if (perch_layout_var('page', true) == 'event' || perch_layout_var('page', true) == 'talk') {
            $title       = $items['0']['title'];
            $description = strip_tags($items['0']['introduction']);
        };
        if (perch_layout_var('page', true) == 'speaker') {
            $title       = $items['0']['name'];
            $description = strip_tags($items['0']['bio']);
        };
        if (perch_layout_var('page', true) == 'event' || perch_layout_var('page', true) == 'speaker' || perch_layout_var('page', true) == 'talk') {
            perch_page_attributes_extend([
                'title'       => $title,
                'description' => $description,
            ]);
        };
        perch_layout('_attributes');
        perch_layout('_apple_touch_icon');
        perch_layout('_favicon');
        perch_content('Google Analytics');
        perch_get_css();
    ?>
</head>
<?php
  if (perch_layout_has('body-class')) {
    echo '<body class="'.perch_layout_var('body-class', true).'">';
  }else{
    echo '<body>';
  }
?>
<main role="main">
    <?php perch_layout('header'); ?>
    <div class="wrapper">
