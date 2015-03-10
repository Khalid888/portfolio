<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package tdMacro
 */

get_header(); 

// Add content of page called "blog" to the page that contains the list of blog posts
add_action  ( '__before_loop', 'add_blog_page_content_before_post_list');
function add_blog_page_content_before_post_list() {
if ( is_home() ) {
$post = get_page_by_path( '/blog' );
echo wpautop($post->post_content);
}
}
?>
<style>
#page-header-main {
    background: none repeat scroll 0 0 #ffffff;
    border-bottom: 1px solid rgba(0, 0, 0, 0.15);
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.04);
	padding: 20px;
	margin: 0 0 30px;
	border-radius: 4px;
}
#page-header-main .page-title {
    letter-spacing: 0.05em;
    line-height: 1.2;
    margin-bottom: 0;
    margin-top: 0;
	
}
</style>
<div class="container">
	<div class="row">
		<div id="primary" class="content-area <?php echo esc_attr( tdmacro_get_blog_primary_class() ); ?>">
			<main id="main" class="site-main" role="main">
            
	<?php // if(is_home()){
		$about_page = get_post(12);
		;?>
     <header id="page-header-main">
            <p class="page-title">
                <?php echo $about_page->post_content;?>	
            </p>
	  </header>
<?Php //}?>      
			<?php if ( have_posts() ) : ?>
				
				<div id="blog-grid" class="row content-grid">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="<?php echo esc_attr( tdmacro_column_class() ); ?> post-box">
					<?php get_template_part( 'content', get_post_format() ); ?>
					</div><!-- .col -->
				<?php endwhile; ?>
				</div><!-- .row -->

				<?php tdmacro_paging_nav(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
