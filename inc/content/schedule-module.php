<!--
    $ Schedule Module
 -->

<section id="schedule" class="page-zone">
    <div class="container">
        <div class="row">
            <h2 class=" sect-title">Schedule</h2>

            <article class="full-width">
                <h3>Wednesday</h3>
                <ul class="schedule--time-menu">
                    <li class="active"><a href="#wed-am" data-toggle="tab">AM</a></li>
                    <li><a href="#wed-pm" data-toggle="tab">PM</a></li>
                </ul>

                <div class="schedule--time-data">
                    <div id="wed-am" class="schedule--time-pane active">
                        <table class="schedule--time-data">
                            <?php
                                $args = array(
                                    'post_type' => 'schedule',
                                    'order' => 'ASC',
                                    'weekday' => 'wednesday',
                                    'time_of_day' => 'AM'
                                );
                                $day1_am = new WP_Query($args);

                                if($day1_am->have_posts()) :
                                while($day1_am->have_posts()) :
                                $day1_am->the_post();
                            ?>
                            <tr>
                                <td class="schedule--time">
                                    <?php the_field( 'from_time' ); ?>
                                    <?php if( get_field( 'to_time' ) ) { ?>
                                        - <?php the_field( 'to_time' ); ?>
                                    <?php } ?>
                                </td>
                                <td class="schedule--time-datails">
                                    <dl>
                                        <dt><?php the_title(); ?></dt>
                                        <dd>
                                            <?php the_excerpt(); ?>
                                        </dd>
                                    </dl>
                                </td>
                            </tr>
                            <?php
                                endwhile;
                                endif;
                            ?>
                        </table>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
