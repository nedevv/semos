<?php

    $cards = array(
        array(
            'title' => 'Audi',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.'
        ),
        array(
            'title' => 'Chevrolet',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.'
        ),
        array(
            'title' => 'Ford',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.'
        ),
        array(
            'title' => 'Golf',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.'
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
            ?>

                <div class="c-cards_card">
                    <div class="c-cards_card-header">

                    </div>
                    <div class="c-cards_card-body">
                        <div class="c-cards_card-icon">

                        </div>
                        <div class="c-cards_card-title">
                            <?php echo $title; ?>
                        </div>
                        <div class="c-cards_card-icon_desc">
                            <?php echo $desc; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>

    </div>
</section>