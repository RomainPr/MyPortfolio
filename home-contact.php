<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?><!DOCTYPE html>

<script>
  (function() {
    var script   = document.createElement('script');
    script.src   = '//api.codeur.com/widgets/profile.js?k=AAaFcKLr47xeolqj';
    script.async = true;
    var entry = document.getElementsByTagName('script')[0];
    entry.parentNode.insertBefore(script, entry);
  })();
</script>

<div class="container">
    <div class="row">
        <h2 class="mtl">Contact</h2>
        <h3>Restons connectés</h3>
        <div class="bordertitlesec mbl"></div>
        <div class="col-lg-4 col-xs-12 text-left mbl">
            <?php print do_shortcode('[wpforms id="7" title="false" description="false"]'); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12 mbm">
            <?php print do_shortcode('[efb_likebox fanpage_url="https://www.facebook.com/romainprevostdev/" fb_appid="OPTIONAL_SEE_FAQ" box_width="400" box_height="500" responsive="1" show_faces="1" show_stream="1" hide_cover="0" small_header="0" hide_cta="OPTONAL_HIDE_CUSTOM_CTA_BUTTON(1/0)" locale="fr_FR"]
'); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12 mbm">
            <div data-layout="default" data-width="400px" class="codeur-profile-widget"></div>
        </div>
    </div>
</div>

