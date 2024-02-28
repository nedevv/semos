<?php
get_header();

    $cards = array(
        array(
            'logo' => "<img src='../../../../wp-images/audi.jpg' alt='Audi'>",
            'title' => 'Audi',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.',
            'color' => 'red'
        ),
        array(
            'logo' => "<img src='../../../../wp-images/chevrolet.jpg' alt='Chevrolet'>",
            'title' => 'Chevrolet',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.',
            'color' => 'green'
        ),
        array(
            'logo' => "<img src='../../../../wp-images/ford.jpg' alt='Ford'>",
            'title' => 'Ford',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.',
            'color' => 'yellow'
        ),
        array(
            'logo' => "<img src='../../../../wp-images/golf.jpg' alt='Golf'>",
            'title' => 'Golf',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.',
            'color' => 'blue'
        ),

    );

?>

<section class="s-beginner">
    <div class="s-beginner_inner container">

        <div class="c-headline">
            <div class="c-headline_before">
                Start your cars journey
            </div>
            <h2 class="c-headline_main">
                Beginner's Corner
            </h2>
            <div class="c-headline_after">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
            </div>
        </div>

        <div class="c-cards">
            <div class="c-cards_inner">

            <?php foreach( $cards as $card ):
            $title = $card['title'];
            $desc = $card['desc'];
            $logo = $card['logo'];
            $color = $card['color'];
            ?>

                <div class="c-cards_card">
                    <div class="c-cards_card-header" style="--color: <?php echo $color ?>;">

                    </div>
                    <div class="c-cards_card-body">
                        <div class="c-cards_card-icon">
                        <?php echo $logo ?>
                        </div>
                        <div class="c-cards_card-title">
                            <?php echo "<h2> $title </h2>"?>
                        </div>
                        <div class="c-cards_card-icon_desc">
                            <?php echo "<p class='c-cards_novva'> $desc </p>";?>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>



        <?php foreach( $cards as $card ):
            $title = $card['title'];
            ?>
        <div class="c-text">
            <?php echo $title ?>.
        </div>
        <?php endforeach ?>
    </div>
</section>