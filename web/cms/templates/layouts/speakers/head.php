<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title><?php
      perch_collection('Speakers', [
        'filter'   => 'slug',
        'match'    => 'eq',
        'value'    => perch_get('s'),
        'count'    => 1,
        'template' =>'/meta/title_speaker.html',
      ]);
    ?> - Frontend NE</title>
    <meta name="description" content="<?php
      perch_collection('Speakers', [
        'filter'   => 'slug',
        'match'    => 'eq',
        'value'    => perch_get('s'),
        'count'    => 1,
        'template' =>'/meta/description_speaker.html',
      ]);
    ?>" />
    <link rel="canonical" href="https://frontendne.co.uk/speakers/<?php
      perch_collection('Speakers', [
        'filter'   => 'slug',
        'match'    => 'eq',
        'value'    => perch_get('s'),
        'count'    => 1,
        'template' =>'/meta/slug.html',
      ]);
    ?>" />
    <?php perch_layout('speakers/_open_graph'); ?>
    <?php perch_layout('speakers/_twitter_card'); ?>
    <?php perch_layout('global/_apple_touch_icon'); ?>
    <?php perch_layout('global/_favicon'); ?>
    <?php perch_content('Google Analytics'); ?>
    <?php perch_get_css(); ?>
</head>

<?php
  if (perch_layout_has('body-class')) {
    echo '<body class="'.perch_layout_var('body-class', true).'">';
  }else{
    echo '<body>';
  }
?>

<main role="main">

    <?php perch_layout('global/header'); ?>

    <div class="wrapper">
