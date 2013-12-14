<!--
    $Welcome Module
 -->

<section class="welcome">
    <div class="container">
        <div class="row">
            <article class="col-md-8">
                <h1><?php the_field ( 'custom_headline' ) ?> </h1>
                <p>
                   <?php the_content (); ?>
                </p>
                <p>
                    <!-- <a href="<?php the_field ( 'registration_url' ); ?>" target="_blank" class="btn btn-primary" title="">Register</a> -->
                    <a href="#" class="btn btn-primary" title="">See who's speaking this year</a>
                </p>
            </article>
        </div>
    </div>
</section>
