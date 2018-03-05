<?php
    perch_content_custom('Advert', [
        'template' => 'advert.html',
        'filter'   => 'display',
        'match'    => 'eq',
        'value'    => 'display'
    ]);
?>

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

                $override_details = perch_content_custom('Event override', [
                    'skip-template' => 'true'
                ]);
                $override = $override_details['0']['override'];

                if ($override == 'override') {
                    perch_content_custom('Event override', [
                        'template' => 'event_override.html'
                    ]);
                } else {
                    $filters = [
                        [
                            'filter' => 'date',
                            'match'  => 'gte',
                            'value'  => date('Y-m-d')
                        ],
                        [
                            'filter' => 'eventDisplayDate',
                            'match'  => 'lte',
                            'value'  => date('Y-m-d H:i:s')
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
            };
        ?>
    </div>
</header>

<?php perch_layout('navigation'); ?>
