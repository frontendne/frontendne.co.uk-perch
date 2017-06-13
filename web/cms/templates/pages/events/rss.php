<?php
  $domain = 'https://'.$_SERVER['HTTP_HOST'];
  PerchSystem::set_var('domain', $domain);
  header('Content-Type: application/rss+xml');
  echo '<'.'?xml version="1.0"?'.'>';
?>

<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
  <channel>
    <title>Frontend NE events</title>
    <link><?php echo PerchUtil::html($domain); ?>/events/</link>
    <atom:link href="<?php echo PerchUtil::html($domain); ?>/events/rss.php" rel="self" type="application/rss+xml" />
    <?php
      perch_collection('Events', [
        'template'=>'rss_events.html',
        'count'=>10,
        'sort'=>'date',
        'sort-order'=>'DESC'
      ]);
    ?>
  </channel>
</rss>
