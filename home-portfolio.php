<?php ?>
<div class="container">
    <div class="row">
        <h2 class="mtl">Portfolio</h2>
        <h3>Et si vous me rejoignez ?</h3>
        <div class="bordertitle mbl"></div>
        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 flex-row txt-center mbm">

            <?php
            $realisations = new WP_Query(array(
                'posts_per_page' => 6,
                'post_type' => 'realisations'
            ));
            ?>

            <?php if ($realisations->have_posts()) : ?>
                <?php while ($realisations->have_posts()) : $realisations->the_post(); ?>

                    <div class="col-lg-3 col-sm-4 mbs project">
                        <h4 class="mbs"><?php the_title(); ?></h4>
                        <figure>
                            <a href="<?php echo get_post_meta(get_the_ID(), 'location', true);?>" target="_blank">
                                <?php
                                the_post_thumbnail('full', array(
                                    'class' => 'img-responsive'
                                ));
                                ?>
                            </a>
                            <figcaption class="bandeau">
                                <p><?php the_content(); ?></p>
                            </figcaption>
                        </figure>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
    <!--<div class="col-sm-12 col-xs-12 col-lg-12 flex-row txt-center">
        <div class="col-lg-3 col-sm-4 mbs project">
            <h4>Festi'show</h4>
            <figure>
                <a href="http://www.festishow.romainprevost.com" target="_blank">
                    <img class="img-responsive" src="<?php print get_template_directory_uri(); ?>/img/festishow.jpg" alt="Festishow">
                </a>
                <figcaption class="bandeau bandeaumobile">
                    <p>Projet d'étude / Wordpress / Bootstrap / RWD</p>
                </figcaption>
            </figure>
        </div>
    </div>-->
    <p class="mts">Et plus à venir !</p>
</div>