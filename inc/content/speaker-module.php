<!--
    $Speaker Module
 -->


<section id="speakers" class="page-zone--a">
    <div class="container">
        <div class="row">
            <h2 class="sect-title full-width">This year's speakers</h2>
            <?php
                $args = array( 'post_type' => 'speakers' );
                $speaker_posts = new WP_Query($args);

                if( $speaker_posts ->have_posts()) :
                    while( $speaker_posts->have_posts() ) :
                        $speaker_posts->the_post();
            ?>

            <div class="conf--speaker-wrap four-two">
                <figure class="conf--speaker">Aq1   `
                    <!-- <img src="http://localhost:8888/wocc/assets/oprah-winfrey.jpg" alt=""> -->
                    <?php the_post_thumbnail( 'wocc_thumbnail' ); ?>
                    <div class="conf--speaker-overlay">
                        <a href="#">
                            <figcaption class="conf--speaker-caption">
                                <h4><?php the_title(); ?></h4>
                                <h5><?php the_field( 'speaker_title' ); ?></h5>
                            </figcaption>
                        </a>
                    </div>
                </figure>
            </div>

            <?php
                endwhile;
                endif;
            ?>


<!--             <footer class="action-block col-md-12">
                <a href="#" class="btn btn-primary">Show me the schedule</a>
            </footer> -->
        </div>
    </div>
</section>
