<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?><!DOCTYPE html>
<div class="container">
    <div class="row">
        <h2 class="mtl">Les Services Web</h2>
        <div class="bordertitlesec mbl"></div>

        <?php
        $services = new WP_Query(array(
            'cat' => 3,
            'posts_per_page' => 6
        ));
        ?>
        <div class="col-lg-12 flex-row text-center">
            <?php if ($services->have_posts()) : ?> 
                <?php while ($services->have_posts()) : $services->the_post(); ?>
                    <div class="col-lg-4 col-sm-4 post mbm">
                        <?php
                        the_post_thumbnail('full', array(
                            'class' => 'img-responsive img-center',
                        ));
                        ?>                        
                        <h3 class="mts"><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>