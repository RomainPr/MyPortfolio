<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?><!DOCTYPE html>
<div class="container">
    <div class="row">
        <h2 class="mtl">Mes compétences</h2>
        <h3>&Agrave; votre disposition</h3>
        <div class="bordertitlesec mbm"></div>

        <?php
        $competences = new WP_Query(array(
            'cat' => 4,
            'posts_per_page' => 13
        ));
        ?>
        <div class="col-lg-10 flex-row mtm mbl center-box">
            <?php if ($competences->have_posts()) : ?>
                <?php while ($competences->have_posts()) : $competences->the_post(); ?>
                    <div class="col-lg-2 mbs mtm">
                        <?php
                        the_post_thumbnail('full', array(
                            'class' => 'img-responsive mts'
                        ));
                        ?>                    
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>
