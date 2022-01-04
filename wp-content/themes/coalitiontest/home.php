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
			<div class="col-md-12">
				<?php while (have_posts()) : the_post(); ?>
					<h1 class="title"><?php the_title(); ?></h1>
				<?php endwhile?>
			</div>
			<div class="col-md-6">
				
			</div>
			<div class="col-md-6">
				
			</div>
		</div>	
	</div>
</section>		
<?php get_footer(); ?>