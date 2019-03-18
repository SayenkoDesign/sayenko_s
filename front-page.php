<?php
/**
 * Custom Body Class
 *
 * @param array $classes
 * @return array
 */

add_filter( 'body_class', function( $classes ) {
    unset( $classes[array_search('page-template-default', $classes )] );
    // $classes[] = '';
    return $classes;
}, 99 );

get_header(); ?>

<?php
_s_get_template_part( 'template-parts/home', 'hero' );
?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">
     
	<?php
    
    while ( have_posts() ) :
    
        the_post();
                    
        get_template_part( 'template-parts/content', 'page' );
            
    endwhile;
    
    // Add a custom partial
     _s_get_template_part( 'template-parts/home', 'section' );
     
     
       
   	?>
        
	</main>


</div>

<?php
get_footer();
