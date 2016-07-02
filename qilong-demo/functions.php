<?php
function coolwp_remove_open_sans_from_wp_core() {
wp_deregister_style( 'open-sans' );   
wp_register_style( 'open-sans', false );   
wp_enqueue_style('open-sans','');}
add_action( 'init', 'coolwp_remove_open_sans_from_wp_core' );


function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);  //正则匹配文章中所有图片
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //定义默认图片
    $first_img = "/images/default.jpg";  //默认图片地址需自己设置
  }
  return $first_img;
}

 if ( function_exists('register_sidebar') )register_sidebar(array('before_widget' => '<div class="sidebox"> ','after_widget' => '</div>','before_title' => '<h2>','after_title' => '</h2>',)); 
 register_nav_menus(); 
 add_theme_support( 'post-thumbnails' ); 



 /*PAGINATION*/
// 分页代码
function par_pagenavi($range = 9){
  global $paged, $wp_query;
  if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}
  if($max_page > 1){if(!$paged){$paged = 1;}
  if($paged != 1){echo "<a href='" . get_pagenum_link(1) . "' class='extend' title='跳转到首页'> 返回首页 </a>";}
  previous_posts_link(' 上一页 ');
    if($max_page > $range){
    if($paged < $range){for($i = 1; $i <= ($range + 1); $i++){echo "<a href='" . get_pagenum_link($i) ."'";
    if($i==$paged)echo " class='current'";echo ">$i</a>";}}
    elseif($paged >= ($max_page - ceil(($range/2)))){
    for($i = $max_page - $range; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
    if($i==$paged)echo " class='current'";echo ">$i</a>";}}
  elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
    for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){echo "<a href='" . get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";}}}
    else{for($i = 1; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
    if($i==$paged)echo " class='current'";echo ">$i</a>";}}
  next_posts_link(' 下一页 ');
    if($paged != $max_page){echo "<a href='" . get_pagenum_link($max_page) . "' class='extend' title='跳转到最后一页'> 最后一页 </a>";}}
}


function get_breadcrumbs()
{
global $wp_query;
if ( !is_home() ){
// Start the UL
echo '<ul class="breadcrumbs">';
// Add the Home link
echo '<li><a href="'. get_settings('home') .'">网站首页</a></li>';
if ( is_category() )
{
$catTitle = single_cat_title( "", false );
$cat = get_cat_ID( $catTitle );
echo "<li> &raquo; ". get_category_parents( $cat, TRUE, " &raquo; " ) ."</li>";
}
elseif ( is_archive() && !is_category() )
{
echo "<li> &raquo; Archives</li>";
}
elseif ( is_search() ) {
echo "<li> &raquo; Search Results</li>";
}
elseif ( is_404() )
{
echo "<li> &raquo; 404 Not Found</li>";
}
elseif ( is_single() )
{
$category = get_the_category();
$category_id = get_cat_ID( $category[0]->cat_name );
echo '<li> &raquo; '. get_category_parents( $category_id, TRUE, " &raquo; " );
echo the_title('','', FALSE) ."</li>";
}
elseif ( is_page() )
{
$post = $wp_query->get_queried_object();
if ( $post->post_parent == 0 ){
echo "<li> &raquo; ".the_title('','', FALSE)."</li>";
} else {
$title = the_title('','', FALSE);
$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
array_push($ancestors, $post->ID);
foreach ( $ancestors as $ancestor ){
if( $ancestor != end($ancestors) ){
echo '<li> &raquo; <a href="'. get_permalink($ancestor) .'">'. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</a></li>';
} else {
echo '<li> &raquo; '. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</li>';
}
}
}
}
// End the UL
echo "</ul>";
}
} 

// Remove Open Sans that WP adds from frontend   
if (!function_exists('remove_wp_open_sans')) :   
function remove_wp_open_sans() {   
wp_deregister_style( 'open-sans' );   
wp_register_style( 'open-sans', false );   
}
// 前台删除Google字体CSS   
add_action('wp_enqueue_scripts', 'remove_wp_open_sans');
// 后台删除Google字体CSS   
add_action('admin_enqueue_scripts', 'remove_wp_open_sans'); 
endif;

?>