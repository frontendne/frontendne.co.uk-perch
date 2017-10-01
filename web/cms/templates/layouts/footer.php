<?php

$names = array(
    0 => array('name' => 'Luke Skywalker', 'email' => 'luke@rebelalliance.org'),
    1 => array('name' => 'Jake', 'email' => 'the_dog@adventureti.me'),
    2 => array('name' => 'Finn', 'email' => 'the_human@adventureti.me'),
    3 => array('name' => 'Ron Burgundy', 'email' => 'r.burgundy@channel4.tv'),
    4 => array('name' => 'Batman', 'email' => 'bruce@wayne.org'),
    5 => array('name' => 'Doc Brown', 'email' => 'emmet.brown@hillvalley.edu'),
    6 => array('name' => 'Walter White', 'email' => 'heisenberg@savewalterwhite.com'),
    7 => array('name' => 'Charlie Kelly', 'email' => 'teh_niteman@hotmale.com'),
    8 => array('name' => 'Jeff Lebowski', 'email' => 'the-dude@gmail.com'),
    9 => array('name' => 'Peter', 'email' => 'p.gibbins@initech.com'),
    10 => array('name' => 'Stanley Ipkiss', 'email' => 'somebody-stop-me@yahoo.com'),
    11 => array('name' => 'Pete Mitchell', 'email' => 'maverick@topgunacademy.gov'),
    12 => array('name' => 'Rimmer', 'email' => 'a.rimmer@jmc.org'),
    13 => array('name' => 'Princess Leia Organa', 'email' => 'leia@rebelalliance.org'),
    14 => array('name' => 'Diana Prince', 'email' => 'ww@JusticeLeague.org'),
    15 => array('name' => 'Ada Lovelace', 'email' => 'ada@bcs.org'),
    16 => array('name' => 'Hemione Granger', 'email' => 'h.grainger@hogwarts.edu'),
    17 => array('name' => 'Ellen Ripley', 'email' => 'hr@weyland-yutani.jp'),
    18 => array('name' => 'Sarah Connor', 'email' => 'alert@skynet.com'),
    19 => array('name' => 'Jessica Jones', 'email' => 'private-investigator@jj.com')
    );

$nameToUse = array_rand($names, 1)

?>

            <section class="mailing-list">

                <h2 id="mailing-list">Sign up to stay notified</h2>
                <div id="mailing-list__sign-up" class="mailing-list__sign-up--form">
                    <form action="//sambeckham.us3.list-manage.com/subscribe/post?u=9a08ccca86dad8eae63b29a88&amp;id=2524deef25" class="mailing-list__sign-up__form" method="post">
                        <label for="mce-NAME">Your name
                        </label>
                        <span id="hint-name">For example, <?php echo $names[$nameToUse]['name']; ?></span>
                        <input aria-describedby="hint-name" type="text" id="mce-NAME" name="NAME" required class="valid" />
                        <label for="mce-EMAIL">Your email address
                        </label>
                        <span id="hint-email">For example, <?php echo $names[$nameToUse]['email']; ?></span>

                        <input aria-describedby="hint-email" type="email" id="mce-EMAIL" name="EMAIL" required class="valid" />
                        <button type="submit">Submit</button>
                    </form>
                    <div class="mailing-list__sign-up__loading">
                        <?php include($_SERVER['DOCUMENT_ROOT'].'/cms/templates/includes/svg/loading.svg'); ?>
                    </div>
                    <div class="mailing-list__sign-up__response"></div>
                </div>
            </section>
        </div>
        <aside id="map" class="map"></aside>
    </main>
    <?php perch_get_javascript(); ?>
    <script src="https://js.tito.io/v1" async></script>
</body>
</html>