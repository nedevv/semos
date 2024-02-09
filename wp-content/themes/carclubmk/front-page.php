<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>

    <?php if( have_posts() );
        while ( have_post());
            the_post();

        endwhile;
    endif; ?>

    <?php wp_footer(); ?>
</body>
</html>