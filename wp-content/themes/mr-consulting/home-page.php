<?php
/**
 * Template Name: Home Page
 *
 * @package mr-consulting
 *
 */

get_header(); 

?>

<div class="hero-image-header" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/hero.png">
	<div class="container">
		<div class="row hero">
			<div class="col-xs-16 col-md-6 col-lg-5">
				<img class="ui image img-center" src="<?php the_field('hero_image'); ?>">
			</div>
			<div class="col-xs-16 col-md-10 col-lg-11">
				<h1 class="hero-cta"><?php the_field('hero_headline'); ?></h1>
				<div class="ui divider"></div>
				<p class="lead gold"><?php the_field('hero_description'); ?></p>
				<!-- <div class="huge ui inverted teal button "><?php the_field('hero_button'); ?></div> -->
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row section-padding">
		<div class="col-sm-16">
			<h2 class="section-header center"><?php the_field('research_headline'); ?></h2>
			<div class="ui divider"></div>
		</div>

		<?php if( have_rows('research_section') ): ?>
			<?php while( have_rows('research_section') ): the_row(); 

			// vars
			$researchHeadline = get_sub_field('section_headline');
			$researchBody = get_sub_field('section_body');
			$researchImage = get_sub_field('section_image');
			$researchCta = get_sub_field('section_cta');

			?>

			<div class="col-md-8">
				<img class="ui image centered" src="<?php echo $researchImage; ?>">
				<h3><?php echo $researchHeadline; ?></h3>
				<p><?php echo $researchBody; ?></p>
				<a class="" href=""><?php echo $researchCta; ?></a>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
</div>

<div class="hero-image" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/collaboration.png">
	<div class="container">
		<div class="row">
			<div class="col-lg-14 col-lg-offset-1">
				<div class="hero-2">
					<h2 class="hero-cta"><?php the_field('collaboration_headline'); ?></h2>
					<div class="ui divider"></div>
					<p class="lead"> <?php the_field('collaboration_body'); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row bump-top">
		<div class="col-sm-16">
			<h2 class="section-header center"><?php the_field('planning_headline'); ?></h2>
			<div class="ui divider"></div>
		</div>
		<?php if( have_rows('planning_section') ): ?>
			<?php while( have_rows('planning_section') ): the_row(); 

		// vars
			$documentationHeadline = get_sub_field('documentation_headline');
			$documentationBody = get_sub_field('documentation_body');

			?>

			<div class="col-sm-8">
				<h3><?php echo $documentationHeadline; ?></h3>
				<p><?php echo $documentationBody; ?></p>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>

	<div class="col-sm-16 center bump-top">
		<a href="#" class="lead"><?php the_field('planning_cta'); ?></a>
		<img class="ui image" src="<?php the_field('planning_image'); ?>">
	</div>
</div>
</div>

<div class="hero-image" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/build.png">
	<div class="hero-3">
		<div class="container">
			<div class="row">
				<div class="col-sm-16">
					<h2 class="hero-cta center"><?php the_field('build_headline'); ?></h2>
					<div class="ui divider"></div>
				</div>
			</div>
			<?php if( have_rows('build_section') ): ?>
				<?php while( have_rows('build_section') ): the_row(); 

			// vars
				$buildHeadline = get_sub_field('build_headline');
				$buildBody = get_sub_field('build_body');
				$buildImage = get_sub_field('build_image');
				$buildCta = get_sub_field('build_cta');

				?>

				<div class="row">
					<div class="col-md-3 col-md-offset-2">
						<img class="ui image centered img-bump" src="<?php echo $buildImage; ?>">
					</div>
					<div class="col-md-9">
						<div class="list-padding">
							<h3 class="gold"><?php echo $buildHeadline; ?></h3>
							<p><?php echo $buildBody; ?></p>
							<a class="" href=""><?php echo $buildCta; ?></a>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
</div>


<div class="container">

	<div class="section-padding">
		<h2 class="section-header center"><?php the_field('contact_headline'); ?></h2>
		<div class="ui divider"></div>

		<div class="row">
			<?php if( have_rows('contact_section') ): ?>
				<?php while( have_rows('contact_section') ): the_row(); 

				// vars
				$connectHeadline = get_sub_field('connect_headline');
				$connectBody = get_sub_field('connect_body');

				?>


				<div class="col-md-8">
					<h3><?php echo $connectHeadline; ?></h3>
					<p><?php echo $connectBody; ?></p>
				</div>

			<?php endwhile; ?>
		<?php endif; ?>
	</div>


	<div class="row">
		<div class="col-md-8">
			<p><?php the_content(); ?></p>
		</div>

		<div class="col-md-8 bump-top">
			<div class="ui segment">
				<div class="content">
					<img class="ui image centered" src="<?php echo the_field('contact_image') ?>">
					<h3 class="ui header notop"><?php the_field('contact_title'); ?></h3>
					<p><?php the_field('contact_info'); ?></p>
					<a><?php the_field('contact_cta'); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

</div> <!-- container -->
<?php get_footer(); ?>

