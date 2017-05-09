<header class="main__header">
    <div class="wrapper">
        <a href="/" class="logo">
            <h1 class="hide">Frontend NE</h1>
            <?php include($_SERVER['DOCUMENT_ROOT'].'/cms/templates/includes/svg/logo.svg'); ?>
        </a>

        <?php
            $monthDate = date("1-m-Y", strtotime("+1 month"));
            PerchSystem::set_var('todaysDate', date('U'));
            PerchSystem::set_var('nextMonth', date("F", strtotime("+1 month")));
            PerchSystem::set_var('nextEvent', date('d-m-Y', strtotime('thursday', strtotime($monthDate))));


            $filters = array(
        array(
          'filter'     => 'date',
          'match'      => 'gte',
          'value'      => date('Y-m-d')
        ),
        array(
          'filter'     => 'eventDisplayDate',
          'match'      => 'lte',
          'value'      => date('Y-m-d H:i:s')
        ),
    );

            perch_collection('Events', [
                'template'   => 'event_next.html',
                'sort'       => 'date',
                'sort-order' => 'ASC',
                'count'      => 1,
                'filter'     => $filters
            ]);
        ?>

    </div>
</header>

<?php perch_layout('global/navigation'); ?>
