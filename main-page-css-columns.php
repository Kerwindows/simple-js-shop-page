<?php
   /*
    * Be very careful were you place wp_enqueue_style and wp_enqueue_script. 
    * If you write those two functions in the beginning of an administration
    * page (eg: main-page-empty-plugin.php) you include the CSS and the JS
    * file only in that administration page.
    * But if you write those two functions in the main plugin file you will
    * include the CSS/JS file in all the pages of your website.
    */
   // loading the CSS
   wp_enqueue_style('css-columns-style', plugins_url( '/css/style.css', __FILE__ ) );
   // loading the JS
   wp_enqueue_script('css-columns-scripts', plugins_url( '/js/scripts.js', __FILE__ ) );
   // loading the CSS
   wp_enqueue_style('css-columns-style2', plugins_url( 'style.css', __FILE__ ) );
   
   ?>
<div id="pluginwrap_k">
<h2>Divi CSS Mobile Layout Classes</h2>
   <div class="row_k">
      <div class="column_k_33_col">
         <h2>Regular Chart</h2>
         <img src="https://kerjemtec.com/wp-content/uploads/2020/03/regular-chart-divi-rows.jpg" width="100%" />
      </div>
      <div class="column_k_66_col">
         <div class="column_k_2_col">
            <p>
            <ol>
               <li><code>mobile-2-column</code></li>
               <li><code>mobile-3-column</code></li>
               <ul>
                  <li><code>mobile-3-to-2-column</code></li>
               </ul>
               <li><code>mobile-4-column</code></li>
               <ul>
                  <li><code>mobile-4-to-2-column</code></li>
                  <li><code>mobile-4-to-3-column</code></li>
               </ul>
               <li><code>mobile-5-column</code></li>
               <ul>
                  <li><code>mobile-5-to-2-column</code></li>
               </ul>
               <li><code>mobile-6-column</code></li>
               <ul>
                  <li><code>mobile-6-to-2-column</code></li>
                  <li><code>mobile-6-to-3-column</code></li>
               </ul>
               <li><code>mobile-2_5-3_5-column</code></li>
               <li><code>mobile-3_5-2_5-column</code></li>
               <li><code>mobile-1_3-2_3-column</code></li>
               <li><code>mobile-2_3-1_3-column</code></li>
               <li><code>mobile-1_4-3_4-column</code></li>
               <ul>
                  <li><code>mobile-1_5-4_5-column</code></li>
                  <li><code>mobile-1_6-5_6-column</code></li>
               </ul>
               <li><code>mobile-3_4-1_4-column</code></li>
            </ol>
            </p>
         </div>
         <div class="column_k_2_col">
            <p>
            <ol start="12">
               <li><code>mobile-1_4-1_2-1_4-column</code></li>
               <li><code>mobile-1_5-3_5-1_5-column</code></li>
               <li><code>mobile-1_4-1_4-1_2-column</code></li>
               <li><code>mobile-1_2-1_4-1_4-column</code></li>
               <li><code>mobile-1_5-1_5-3_5-column</code></li>
               <li><code>mobile-3_5-1_5-1_5-column</code></li>
               <li><code>mobile-1_6-1-6-1_6-1_2-column</code></li>
               <ul>
                  <li><code>mobile-1_6-1_6-1_6-1_2-to-3-column</code></li>
               </ul>
               <li><code>mobile-1_2-1_6-1_6-1_6-column</code></li>
               <ul>
                  <li><code>mobile-1_2-1_6-1_6-1_6-to-3-column</code></li>
               </ul>
            </ol>Use phone- instead of mobile- to affect phones only
            </p>
         </div>
      </div>
   </div>
   <div class="row_k">
      <div class="column_k_33_col">
         <h2>Specialty</h2>
         <img src=" http://kerjemtec.com/wp-content/uploads/2020/03/specialty-chart-divirows.jpg" width="100%" />
      </div>
      <div class="column_k_66_col">
         <div class="column_k_2_col">
            <p>
            <ol>
               <li><code>mobile-1_2-1_2-column</code></li>
               <li><code>mobile-1_2-1_2-column</code></li>
               <li><code>mobile-1_4-3_4-column</code></li>
               <li><code>mobile-3_4-1_4-column</code></li>
               <li><code>mobile-1_4-1_2-1_4-column</code></li>
               <li><code>mobile-1_2-1_4-1_4-column</code></li>
               <li><code>mobile-1_4-1_4-1_2-column</code></li>
               <ul>
                  <li><code>mobile-1_4-1_4-1_2-to-2-column</code></li>
               </ul>
               <li><code>mobile-1_3-2_3-column</code></li>
               <li><code>mobile-2-3-1_3-column</code></li>
            </ol>Use phone- instead of mobile- to affect phones only
            </p>
         </div>
         <div class="column_k_2_col">
            <p></p>
         </div>
      </div>
   </div>
</div>