<?php
/**
 * Template Name: Home Page
 *
 * @package mr-consulting
 *
 */

get_header(); 

?>
<script>
	// $(document).ready(function() {
	// 	$('#fullpage').fullpage();
	// });
</script>


<div class="ui vertically padded page grid hero-solid">
	<div class="column">
		<div class="hero">
			<h1 class="hero-cta"><?php the_field('hero_headline'); ?></h1>
			<p class="lead"><?php the_field('hero_description'); ?></p>
			<div class="huge ui inverted button "><?php the_field('hero_button'); ?></div>
		</div>
	</div>
</div>

<div class="ui page grid">
	<div class="sixteen wide column">
		<h2 class="ui huge header"><?php the_field('research_headline'); ?></h2>
	</div>
	<div class="ui divider"></div>
	<?php if( have_rows('research_section') ): ?>
		<?php while( have_rows('research_section') ): the_row(); 

			// vars
		$headline = get_sub_field('section_headline');
		$body = get_sub_field('section_body');

		?>

		<div class="eight wide column">
			<h3><?php echo $headline; ?></h3>
			<p><?php echo $body; ?></p>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

</div>

<!-- <div id="fullpage">
	<div class="section">
		<nav class="top-nav">
			<div class="container">
				<div class="nav-wrapper">

				</div>
			</div>
		</nav>
		<div class="hero-image">
			<div class="hero-overlay">
				<div class="container hero">
					<h1 class="hero-cta"><?php the_field('hero_headline'); ?></h1>
					<p class="lead "><?php the_field('hero_description'); ?></p>

					<a class=" waves-effect waves-light btn-cta btn-large"><?php the_field('hero_button'); ?></a>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="container hero">
			<div class="row">
				<div class="card-panel">
					<div class="card-content">
						<h2 class="blue-text callout"><?php the_field('process_headline'); ?></h2>
					</div>
				</div>

				<h4 class="center bump-top"><?php the_field('process_summary'); ?></h4>
				<?php if( have_rows('process_info') ): ?>

					

					<?php while( have_rows('process_info') ): the_row(); 

						// vars
					$image = get_sub_field('process_image');
					$name = get_sub_field('process_name');
					$description = get_sub_field('process_description');

					?>

					<div class="col s12 m4">
						<div class="card">
							<div class="card-image icon-image waves-effect waves-block waves-light">
								<div class="center">
									<i class="activator  icon-4x <?php echo $image; ?>"></i>
								</div>
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4"><?php echo $name; ?> <i class="mdi-navigation-more-vert right"></i></span>

							</div> 
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4"><?php echo $name; ?> <i class="mdi-navigation-close right"></i></span>
								<p class="card-description"><?php echo $description; ?></p>
							</div>
						</div>

					</div>

				<?php endwhile; ?>



			<?php endif; ?>
		</div>
	</div>

	<div class="section">
		<div class="hero-solid">
			<div class="container hero ">
				<h2 class="hero-quote white-text"><?php the_field('hero_quote') ?></h2>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="container hero">
			<div class="row">
				<div class="col s12 m12">
					<h2><?php the_field('service_headline'); ?></h2>
				</div>
				<?php if( have_rows('pricing_table') ): ?>

					<?php while( have_rows('pricing_table') ): the_row(); 

							// vars
					$cardTitle = get_sub_field('card_title');
					$cardPrice = get_sub_field('card_price');
					$cardDescription = get_sub_field('card_description');

					?>
					<div class="col s12 m4">
						<div class="card-panel">
							<div class="card-content">
								<h4 class="notop price-title"><?php echo $cardTitle; ?></h4>
								<span class="card-price"><?php echo $cardPrice; ?></span>
								<p class="card-description"><?php echo $cardDescription; ?></p>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<div class="col s12 m12">
				<h4><?php the_field('customer_service'); ?></h4>
			</div>
		</div>
	</div>

	<div class="section">
		<div class="hero-solid">
			<div class="container hero">
				<div class="card-panel">
					<div class="card-content">
						<p><?php the_content(); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- #fullpage -->




<?php get_footer(); ?>

