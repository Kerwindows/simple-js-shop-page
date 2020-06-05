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

   <div class="row_k">
   <h2>Divi CSS Mobile Layout Classes</h2>
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
          
	    <h2>Issues?</h2>
	    <p>If you are experiencing any issues using the plugin, or if you notice any errors, please contact support at support@kerjemtec.com.</p>
	  
         </div>
      </div>
   </div>
   
</div>
<div id="pluginwrap_k">
    <div class="row_k">
        <div><a id="css-btn1">Show</a><a id="css-btn2">Hide</a> CSS Custom Code<br/><br/>
            <code id="css-code">
	      /*Special columns*/
@media only screen and (max-width: 980px){
	.mobile-1_2-1_2-column .et_pb_row   .et_pb_column {
		width:50% !important;
	}
}
@media only screen and (max-width: 479px){
	.phone-1_2-1_2-column .et_pb_row   .et_pb_column {
		width:50% !important;
	}
}
@media only screen and (max-width: 980px){
	.mobile-1_4-3_4-column .et_pb_row   .et_pb_column_1_4, .mobile-3_4-1_4-column .et_pb_row   .et_pb_column_1_4 {
		width:25% !important;
	}
	.mobile-1_4-3_4-column .et_pb_row   .et_pb_column_3_4, .mobile-3_4-1_4-column .et_pb_row   .et_pb_column_3_4 {
		width:75% !important;
	}
}
@media only screen and (max-width: 479px){
	.phone-1_4-3_4-column .et_pb_row   .et_pb_column_1_4, .phone-3_4-1_4-column .et_pb_row   .et_pb_column_1_4 {
		width:25% !important;
	}
	.phone-1_4-3_4-column .et_pb_row   .et_pb_column_3_4, .phone-3_4-1_4-column .et_pb_row   .et_pb_column_3_4  {
		width:75% !important;
	}
}
@media only screen and (max-width: 980px){
.mobile-1_4-1_2-1-4-column  .et_pb_row   .et_pb_column_1_4, .mobile-1_4-1_4-1_2-column .et_pb_row   .et_pb_column_1_4, .mobile-1_2-1_4-1_4-column .et_pb_row   .et_pb_column_1_4{
		width:25% !important;
	}
	.mobile-1_4-1_2-1-4-column  .et_pb_row   .et_pb_column_1_6, .mobile-1_4-1_4-1_2-column .et_pb_row   .et_pb_column_1_6, .mobile-1_2-1_4-1_4-column .et_pb_row   .et_pb_column_1_6 {
		width:16.66% !important;
	}
  .mobile-1_4-1_2-1-4-column  .et_pb_row   .et_pb_column_1_2, .mobile-1_4-1_4-1_2-column .et_pb_row   .et_pb_column_1_2, .mobile-1_2-1_4-1_4-column .et_pb_row   .et_pb_column_1_2{
		width:50% !important;
	}
}
@media only screen and (max-width: 479px){
.phone-1_4-1_2-1-4-column  .et_pb_row   .et_pb_column_1_4, .phone-1_4-1_4-1_2-column .et_pb_row   .et_pb_column_1_4, .phone-1_2-1_4-1_4-column .et_pb_row   .et_pb_column_1_4{
		width:25% !important;
	}
	.phone-1_4-1_2-1-4-column  .et_pb_row   .et_pb_column_1_6, .phone-1_4-1_4-1_2-column .et_pb_row   .et_pb_column_1_6, .phone-1_2-1_4-1_4-column .et_pb_row   .et_pb_column_1_6 {
		width:16.66% !important;
	}
  .phone-1_4-1_2-1-4-column  .et_pb_row   .et_pb_column_1_2, .phone-1_4-1_4-1_2-column .et_pb_row   .et_pb_column_1_2, .phone-1_2-1_4-1_4-column .et_pb_row   .et_pb_column_1_2{
		width:50% !important;
	}
}

@media only screen and (max-width: 980px){
	.mobile-1_3-2_3-column .et_pb_row   .et_pb_column_1_3, .mobile-2_3-1_3-column .et_pb_row   .et_pb_column_1_3 {
		width:33.33% !important;
	}
	.mobile-1_3-2_3-column .et_pb_row   .et_pb_column_2_3, .mobile-2_3-1_3-column .et_pb_row   .et_pb_column_2_3 {
		width:66.66% !important;
	}
}

@media only screen and (max-width: 980px){
	.mobile-1_3-2_3-column .et_pb_row   .et_pb_column_1_3, .mobile-2_3-1_3-column .et_pb_row   .et_pb_column_1_3 {
		width:33.33% !important;
	}
	.mobile-1_3-2_3-column .et_pb_row   .et_pb_column_2_3, .mobile-2_3-1_3-column .et_pb_row   .et_pb_column_2_3 {
		width:66.66% !important;
	}
}
/*Regular Rows */
@media only screen and (max-width: 980px){
	.mobile-2-column  .et_pb_column {
		width:50% !important;
	}
}
@media only screen and (max-width: 479px){
	.phone-2-column  .et_pb_column {
		width:50% !important ;
	}
}

@media only screen and (max-width: 980px){
	.mobile-4-column  .et_pb_column {
		width:25% !important;
	}
}
@media only screen and (max-width: 479px){
	.phone-4-column  .et_pb_column {
		width:25% !important ;
	}
}
@media only screen and (max-width: 980px){
	.mobile-4-to-2-column  .et_pb_column {
		width:50% !important;
	}
}
@media only screen and (max-width: 479px){
	.phone-4-to-2-column  .et_pb_column {
		width:50% !important ;
	}
}
@media only screen and (max-width: 980px){
	.mobile-4-to-3-column  .et_pb_column {
		width:33.33% !important;
	}
  .mobile-4-to-3-column .et_pb_column_1_4:last-child{
		min-width:100% !important;
	}
}
@media only screen and (max-width: 479px){
	.phone-4-to-3-column  .et_pb_column {
		width:33.33% !important ;
	}
  .mobile-4-to-3-column .et_pb_column_1_4:last-child{
		min-width:100% !important;
	}
}
@media only screen and (max-width: 980px){
	.mobile-5-to-2-column  .et_pb_column {
		width:50% !important;
	}
	.mobile-5-to-2-column .et_pb_column_1_5:last-child{
		min-width:100% !important;
	}
}
@media only screen and (max-width: 479px){
	.phone-5-to-2-column  .et_pb_column {
		width:50%;
	}
	.phone-5-to-2-column .et_pb_column_1_5:last-child{
		min-width:100% !important;
	}
}
@media only screen and (max-width: 980px){
	.mobile-5-column  .et_pb_column {
		width:20% !important;
	}
}
@media only screen and (max-width: 479px){
	.phone-5-column  .et_pb_column {
		width:20%;
	}
}
@media only screen and (max-width: 980px){
	.mobile-3-column  .et_pb_column {
		width:33.33% !important;
	}
}
@media only screen and (max-width: 479px){
	.phone-3-column  .et_pb_column {
		width:33.33% !important ;
	}
}
@media only screen and (max-width: 980px){
	.mobile-3-to-2-column  .et_pb_column {
		width:50% !important;
	}
	.mobile-3-to-2-column .et_pb_column_1_3:last-child{
		min-width:100% !important;
	}
}
@media only screen and (max-width: 479px){
	.phone-3-to-2-column  .et_pb_column {
		width:50% !important;
	}
	.phone-3-to-2-column .et_pb_column_1_3:last-child{
		min-width:100% !important;
	}
}
@media only screen and (max-width: 980px){
	.mobile-6-to-5-column  .et_pb_column {
		width:20% !important;
	}
	.mobile-6-to-5-column .et_pb_column_1_6:last-child{
		min-width:100% !important;
	}
}
@media only screen and (max-width: 479px){
	.phone-6-to-5-column  .et_pb_column {
		width:33.33% !important;
	}
	.phone-6-to-5-column .et_pb_column_1_6:last-child{
		min-width:100% !important;
	}
}
@media only screen and (max-width: 980px){
	.mobile-6-to-3-column  .et_pb_column {
		width:33.33% !important;
	}
}
@media only screen and (max-width: 479px){
	.phone-6-to-3-column  .et_pb_column {
		width:33.33% !important;
	}
}
/* mobile-6-to-2-column does not apply for tablets**/
@media only screen and (max-width: 479px){
	.mobile-6-to-2-column  .et_pb_column {
		width:50% !important;
	}
}

@media only screen and (max-width: 479px){
	.phone-6-to-2-column  .et_pb_column {
		width:50% !important;
	}
}
@media only screen and (max-width: 980px){
	.mobile-6-column  .et_pb_column {
		width:16.66% !important;
	}
}
@media only screen and (max-width: 479px){
	.phone-6-column  .et_pb_column {
		width:16.66% !important;
	}
}
@media only screen and (max-width: 980px){
	.mobile-2_5-3_5-column  .et_pb_column_2_5, .mobile-3_5-2_5-column  .et_pb_column_2_5 {
		width:40% !important;
	}
	.mobile-2_5-3_5-column  .et_pb_column_3_5, .mobile-3_5-2_5-column  .et_pb_column_3_5 {
		width:60% !important ;
	}
}
@media only screen and (max-width: 479px){
	.phone-2_5-3_5-column  .et_pb_column_2_5, .phone-3_5-2_5-column  .et_pb_column_2_5 {
		width:40% !important;
	}
	.phone-2_5-3_5-column  .et_pb_column_3_5, .phone-3_5-2_5-column  .et_pb_column_3_5 {
		width:60% !important ;
	}
}
@media only screen and (max-width: 980px){
	.mobile-1_3-2_3-column  .et_pb_column_1_3, .mobile-2_3-1_3-column  .et_pb_column_1_3 {
		width:33.33% !important;
	}
	.mobile-1_3-2_3-column  .et_pb_column_2_3, .mobile-2_3-1_3-column  .et_pb_column_2_3 {
		width:66.66% !important ;
	}
}
@media only screen and (max-width: 479px){
	.phone-1_3-2_3-column  .et_pb_column_1_3, .phone-2_3-1_3-column  .et_pb_column_1_3 {
		width:33.33% !important;
	}
	.phone-1_3-2_3-column  .et_pb_column_2_3, .phone-2_3-1_3-column  .et_pb_column_2_3 {
		width:66.66% !important ;
	}
}
@media only screen and (max-width: 980px){
	.mobile-1_4-3_4-column  .et_pb_column_1_4, .mobile-3_4-1_4-column  .et_pb_column_1_4 {
		width:25% !important;
	}
	.mobile-1_4-3_4-column  .et_pb_column_3_4, .mobile-3_4-1_4-column  .et_pb_column_3_4 {
		width:75% !important ;
	}
}
@media only screen and (max-width: 479px){
	.phone-1_4-3_4-column  .et_pb_column_1_4, .phone-3_4-1_4-column  .et_pb_column_1_4 {
		width:25% !important;
	}
	.phone-1_4-3_4-column  .et_pb_column_3_4, .phone-3_4-1_4-column  .et_pb_column_3_4 {
		width:75% !important ;
	}
}
/***************Modification for 1_4-3-4 row**************/
@media only screen and (max-width: 980px){
	.mobile-1_5-4_5-column  .et_pb_column_1_4, .mobile-1_5-4_5-column   .et_pb_column_1_4 {
		width:20% !important;
	}
	.mobile-1_5-4_5-column  .et_pb_column_3_4, .mobile-1_5-4_5-column   .et_pb_column_3_4 {
		width:80% !important ;
	}
}
@media only screen and (max-width: 479px){
	.phone-1_5-4_5-column  .et_pb_column_1_4, .phone-1_5-4_5-column  .et_pb_column_1_4 {
		width:20% !important;
	}
	.phone-1_5-4_5-column  .et_pb_column_3_4, .phone-1_5-4_5-column  .et_pb_column_3_4 {
		width:80% !important ;
	}
}
@media only screen and (max-width: 980px){
	.mobile-1_6-5_6-column  .et_pb_column_1_4, .mobile-1_6-5_6-column   .et_pb_column_1_4 {
		width:16.66% !important;
	}
	.mobile-1_6-5_6-column  .et_pb_column_3_4, .mobile-1_6-5_6-column   .et_pb_column_3_4 {
		width:83.34% !important ;
	}
}
@media only screen and (max-width: 479px){
	.phone-1_6-5_6-column  .et_pb_column_1_4, .phone-1_6-5_6-column  .et_pb_column_1_4 {
		width:16.66% !important;
	}
	.phone-1_6-5_6-column  .et_pb_column_3_4, .phone-1_6-5_6-column  .et_pb_column_3_4 {
		width:83.34% !important ;
	}
}
@media only screen and (max-width: 980px){
	.mobile-1_4-1_2-1_4-column  .et_pb_column_1_4 {
		width:25% !important;
	}
	.mobile-1_4-1_2-1_4-column  .et_pb_column_1_2 {
		width:50% !important ;
	}
}
@media only screen and (max-width: 479px){
	.phone-1_4-1_2-1_4-column  .et_pb_column_1_4 {
		width:25% !important;
	}
	.phone-1_4-1_2-1_4-column  .et_pb_column_1_2 {
		width:50% !important ;
	}
}
@media only screen and (max-width: 980px){
	.mobile-1_5-3_5-1_5-column  .et_pb_column_1_5 {
		width:20% !important;
	}
	.mobile-1_5-3_5-1_5-column  .et_pb_column_3_5 {
		width:60% !important ;
	}
}
@media only screen and (max-width: 479px){
	.phone-1_5-3_5-1_5-column  .et_pb_column_1_5 {
		width:20% !important;
	}
	.phone-1_5-3_5-1_5-column  .et_pb_column_3_5 {
		width:60% !important ;
	}
}
@media only screen and (max-width: 980px){
	.mobile-1_4-1_4-1_2-column  .et_pb_column_1_4, .mobile-1_2-1_4-1_4-column  .et_pb_column_1_4 {
		width:25% !important;
	}
	.mobile-1_4-1_4-1_2-column  .et_pb_column_1_2, .mobile-1_2-1_4-1_4-column  .et_pb_column_1_2 {
		width:50% !important;
	}
}
@media only screen and (max-width: 479px){
	.phone-1_4-1_4-1_2-column  .et_pb_column_1_4, .phone-1_2-1_4-1_4-column  .et_pb_column_1_4 {
		width:25% !important;
	}
	.phone-1_4-1_4-1_2-column  .et_pb_column_1_2, .phone-1_2-1_4-1_4-column  .et_pb_column_1_2 {
		width:50% !important ;
	}
}
@media only screen and (max-width: 980px){
	.mobile-1_6-1_6-1_6-1_2-column  .et_pb_column_1_6, .mobile-1_2-1_6-1_6-1_6-column  .et_pb_column_1_6 {
		width:13.33% !important;
	}
	.mobile-1_6-1_6-1_6-1_2-column  .et_pb_column_1_2, .mobile-1_2-1_6-1_6-1_6-column  .et_pb_column_1_2 {
		width:60% !important;
	}
}
@media only screen and (max-width: 479px){
	.phone-1_6-1_6-1_6-1_2-column  .et_pb_column_1_6, .phone-1_2-1_6-1_6-1_6-column  .et_pb_column_1_6 {
		width:13.33% !important;
	}
	.phone-1_6-1_6-1_6-1_2-column  .et_pb_column_1_2, .phone-1_2-1_6-1_6-1_6-column  .et_pb_column_1_2 {
		width:60% !important;
	}
}
@media only screen and (max-width: 980px){
	.mobile-1_5-1_5-3_5-column  .et_pb_column_1_5, .mobile-3_5-1_5-1_5-column  .et_pb_column_1_5 {
		width:20% !important;
	}
	.mobile-1_5-1_5-3_5-column  .et_pb_column_3_5, .mobile-3_5-1_5-1_5-column  .et_pb_column_3_5 {
		width:60% !important ;
	}
}
@media only screen and (max-width: 479px){
	.phone-1_5-1_5-3_5-column  .et_pb_column_1_5, .phone-3_5-1_5-1_5-column  .et_pb_column_1_5 {
		width:20% !important;
	}
	.phone-1_5-1_5-3_5-column  .et_pb_column_3_5, .phone-3_5-1_5-1_5-column  .et_pb_column_3_5 {
		width:60% !important ;
	}
}
/******New***/

/**mobile-1_6-1_6-1_6-1_2-to-3-column does not apply to tablets**/

@media only screen and (max-width: 479px){
	.mobile-1_6-1_6-1_6-1_2-to-3-column  .et_pb_column_1_6 {
		width:33.33% !important;
	}
	.mobile-1_6-1_6-1_6-1_2-to-3-column  .et_pb_column_1_2  {
		width:100% !important;
	}
}
@media only screen and (max-width: 479px){
	.phone-1_6-1_6-1_6-1_2-to-3-column  .et_pb_column_1_6 {
		width:33.33% !important;
	}
	.phone-1_6-1_6-1_6-1_2-to-3-column  .et_pb_column_1_2  {
		width:100% !important;
	}
}
@media only screen and (max-width: 479px){
	.mobile-1_2-1_6-1_6-1_6-to-3-column  .et_pb_column_1_6 {
		width:33.33% !important;
	}
	.mobile-1_2-1_6-1_6-1_6-to-3-column  .et_pb_column_1_2  {
		width:100% !important;
	}
}
@media only screen and (max-width: 479px){
	.phone-1_2-1_6-1_6-1_6-to-3-column  .et_pb_column_1_6 {
		width:33.33% !important;
	}
	.phone-1_2-1_6-1_6-1_6-to-3-column  .et_pb_column_1_2  {
		width:100% !important;
	}
}
/**mobile-1_4-1_4-1_2-to-2-column does not apply to tablets**/

@media only screen and (max-width: 479px){
	.mobile-1_4-1_4-1_2-to-2-column  .et_pb_column_1_4 {
		width:50% !important;
	}
	.mobile-1_4-1_4-1_2-to-2-column  .et_pb_column_1_2  {
		width:100% !important;
	}
}
@media only screen and (max-width: 479px){
	.phone1-1_4-1_4-1_2-to-2-column  .et_pb_column_1_4 {
		width:50% !important;
	}
	.phone-1_4-1_4-1_2-to-2-column  .et_pb_column_1_2  {
		width:100% !important;
	}
}
	   </code>
        </div>