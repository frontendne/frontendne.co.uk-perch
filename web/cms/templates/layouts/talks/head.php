<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title><?php
      perch_collection('Talks', [
        'filter'   => 'slug',
        'match'    => 'eq',
        'value'    => perch_get('s'),
        'count'    => 1,
        'template' =>'/meta/title_talk.html',
      ]);
    ?></title>
    <meta name="description" content="<?php
      perch_collection('Talks', [
        'filter'   => 'slug',
        'match'    => 'eq',
        'value'    => perch_get('s'),
        'count'    => 1,
        'template' =>'/meta/description_talk.html',
      ]);
    ?>" />
    <link rel="canonical" href="https://frontendne.co.uk/talks/<?php
      perch_collection('Talks', [
        'filter'   => 'slug',
        'match'    => 'eq',
        'value'    => perch_get('s'),
        'count'    => 1,
        'template' =>'/meta/slug.html',
      ]);
    ?>" />
    <?php perch_layout('talks/_open_graph'); ?>
    <?php perch_layout('talks/_twitter_card'); ?>
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