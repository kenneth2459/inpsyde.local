<?php get_header(); ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 margin-top-lg">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="#">Home</a></li>
				    <li class="breadcrumb-item"><a href="#">Who are we</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Contact</li>
				  </ol>
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 margin-top-lg margin-bottom-lg">
				<?php while (have_posts()) : the_post(); ?>
					<h1 class="title-orange"><?php the_title(); ?></h1>
					<div class="content">
						<?php the_content(); ?>
					</div>
				<?php endwhile?>
				<div class="row"> 
					<div class="col-md-6 margin-top-md margin-bottom-md">
						<h3 class="uppercase title-orange">Contact us</h3>
						<div class="border-grey margin-bottom-md"></div>
						<?php echo do_shortcode( '[contact-form-7 id="27" title="Contact form 1"]' ); ?>			
					</div>
					<div class="col-md-6 margin-top-md margin-bottom-md"> 
						<h3 class="uppercase title-orange">Reach Us</h3>
						<div class="border-grey margin-bottom-md"></div>
						<?php if ( is_active_sidebar( 'new-widget-area' ) ) : ?>
						<div id="secondary-sidebar" class="new-widget-area">
						<?php dynamic_sidebar( 'new-widget-area' ); ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>	
	</div>
</section>		
<?php get_footer(); ?>