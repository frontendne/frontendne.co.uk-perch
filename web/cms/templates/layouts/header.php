<div class="ad" style="padding-top: .5em; padding-bottom: .5em; text-align: center;">
  <div class="wrapper" style="">
    <em>Pssst&hellip;</em> we're holding a <strong>conference</strong> in <strong>April 2018</strong> – <a href="https://2018.frontendne.co.uk">check&nbsp;it&nbsp;out</a>!
  </div>
</div>


<header class="main__header<?php
        if (perch_layout_var('page', true) !== 'home') {
            echo ' main__header--compact';
        };
    ?>">
    <div class="wrapper">
        <a href="/" class="logo">
            <h1 class="hide">Frontend NE</h1>
            <?php include($_SERVER['DOCUMENT_ROOT'].'/cms/templates/includes/svg/logo.svg'); ?>
        </a>
        <?php
            if (perch_layout_var('page', true) == 'home') {
                $monthDate = date("1-m-Y", strtotime("+1 month"));
                PerchSystem::set_var('todaysDate', date('U'));
                PerchSystem::set_var('nextMonth', date("F", strtotime("+1 month")));
                PerchSystem::set_var('nextEvent', date('d-m-Y', strtotime('thursday', strtotime($monthDate))));
                $filters = [
                    [
                      'filter'     => 'date',
                      'match'      => 'gte',
                      'value'      => date('Y-m-d')
                    ],
                    [
                      'filter'     => 'eventDisplayDate',
                      'match'      => 'lte',
                      'value'      => date('Y-m-d H:i:s')
                    ],
                ];

                perch_collection('Events', [
                    'template'   => 'event_next.html',
                    'sort'       => 'date',
                    'sort-order' => 'ASC',
                    'count'      => 1,
                    'filter'     => $filters
                ]);
            };
        ?>
    </div>
</header>

<?php perch_layout('navigation'); ?>
