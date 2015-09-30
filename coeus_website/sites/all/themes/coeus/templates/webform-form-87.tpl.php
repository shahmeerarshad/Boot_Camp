<?php

/**
 * @file
 * Customize the display of a complete webform.
 *
 * This file may be renamed "webform-form-[nid].tpl.php" to target a specific
 * webform on your site. Or you can leave it "webform-form.tpl.php" to affect
 * all webforms on your site.
 *
 * Available variables:
 * - $form: The complete form array.
 * - $nid: The node ID of the Webform.
 *
 * The $form array contains two main pieces:
 * - $form['submitted']: The main content of the user-created form.
 * - $form['details']: Internal information stored by Webform.
 *
 * If a preview is enabled, these keys will be available on the preview page:
 * - $form['preview_message']: The preview message renderable.
 * - $form['preview']: A renderable representing the entire submission preview.
 */
?>

  
 <section class="container services clearfix">
 <div class="main-heading no-b-border mb10 clearfix">
 <h2 class="pull-left">Contact</h2>
 </div>
 <div class="row ">
 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
 </script>
 <div style="overflow:hidden;height:237px;width:100%;">
      <div id="gmap_canvas" style="height:237px;width:100%;"></div>
   <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
   <a class="google-map-code" href="http://premium-wordpress-themes.org" id="get-map-data">The Breslin</a>
</div>
<script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(52.50517, 13.394839999999931),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(52.50517, 13.394839999999931)});infowindow = new google.maps.InfoWindow({content:"<b>Markgrafenstr. 11</b><br/>10969 <br/> Berlin" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, "load", init_map);</script>
   <div class="col-md-3 mt20">
          <h2>Germany</h2><br clear="all" />
          <h4>Munich</h4>
          <p>c/o Leitl & Mößmer, <br /> Kardinal-Faulhvaber-Str.15 <br /> 80333 Münchens</p>
          <br clear="all" />
          <h4>Berlin</h4>
          <p>Markgrafenstr. 11, <br /> 10969 Berlin, <br /> +49 30 47 37 63 82, <br /> info@coeus-solutions.de</p>
        </div>

         <div class="col-md-3 mt20">
          <h2>Pakistan</h2><br clear="all" />
          <h4 clas="mb5">Lahore: </h4>
          <p>2nd Floor,<br /> 6 Commerce Zone, <br />Liberty Market, </p>
         </div>


     <div class = "col-md-6 mt20">
     <div class="mt10">

      <?php print drupal_render($form['submitted']);?>
      <?php print drupal_render_children($form);?>
     

     </div>
     </div>
 




    </div>
    </section>
         
      