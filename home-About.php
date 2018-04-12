<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?><!DOCTYPE html>
<div class="container">
    <div class="row">
        <h2 class="mtl">Qui Suis-je ?</h2>
        <h3>Un passionné avant tout</h3>
        <div class="bordertitle mbl"></div>

        <?php
        $id = 62;
        $billet = get_post($id);
        $image = get_the_post_thumbnail($id, 'medium', array(
            'class' => 'img-responsive'
        ));
        $title = $billet->post_title;
        $contenu = $billet->post_content;
        $contenu = apply_filters('the_content', $contenu);
        $contenu = str_replace(']]>', ']]&gt;', $contenu);
        ?>

        <div class="col-lg-12 flex-row pan">
                <div class="col-lg-6 text-left pan">
                    <?php
                    echo "<p>$image</p>";
                    ?>
                </div>
                <div class="col-lg-6 text-left mbm">
                    <?php echo "<h4>$title</h4><p>$contenu</p>"; ?>
                </div>
        </div>

        <?php
        $id = 64;
        $billet = get_post($id);
        $image = get_the_post_thumbnail($id, 'medium', array(
            'class' => 'img-responsive'
        ));
        $title = $billet->post_title;
        $contenu = $billet->post_content;
        $contenu = apply_filters('the_content', $contenu);
        $contenu = str_replace(']]>', ']]&gt;', $contenu);
        ?>

        <div class="col-lg-12 flex-row pan marginTop">
                <div class="col-lg-6 text-left flex-order-2 mbm marginTopDesk">
                    <?php echo "<h4>$title</h4><p>$contenu</p>"; ?>
                </div>
                <div class="col-lg-6 pan">
                    <?php
                    echo "<p>$image</p>";
                    ?>
                </div>
        </div>

        <?php
        $id = 70;
        $billet = get_post($id);
        $image = get_the_post_thumbnail($id, 'medium', array(
            'class' => 'img-responsive'
        ));
        $title = $billet->post_title;
        $contenu = $billet->post_content;
        $contenu = apply_filters('the_content', $contenu);
        $contenu = str_replace(']]>', ']]&gt;', $contenu);
        ?>

        <div class="col-lg-12 flex-row pan marginTop">
                <div class="nopal col-lg-6 text-left pan">
                    <?php
                    echo "<p>$image</p>";
                    ?>
                </div>
                <div class="col-lg-6 text-left marginTopDesk mbm">
                    <?php echo "<h4>$title</h4><p>$contenu</p>"; ?>
                </div>
        </div>

        <div class="col-lg-12 pan marginTop">
            <div class="intertext">
                <p>Et si votre prochain site web faisait décoller votre <span class="red">notoriété</span> ?</p>
                <p>Je vous accompagne dans votre projet professionnel du début à la fin pour concevoir, avec vous, ce qui sera votre futur point d’entrée sur le web.</p> 
                <p>Un template spécifique, une structure à adopter et une architecture de l’information adaptée, je vous propose des <span class="red">solutions sur mesure</span>.</p>
            </div>
        </div>
    </div>
</div>



