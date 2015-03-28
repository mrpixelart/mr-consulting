<?php
/**
 * Template Name: Home Page
 *
 * @package mr-consulting
 *
 */

get_header(); 

?>

<div class="ui vertically padded page grid hero-image">
	<div class="five wide column">
		<img class="ui image img-bump" src="<?php the_field('hero_image'); ?>">
	</div>
	<div class="eleven wide column">
		<div class="hero">
			<h1 class="hero-cta"><?php the_field('hero_headline'); ?></h1>
			<div class="ui divider"></div>
			<p class="lead"><?php the_field('hero_description'); ?></p>
			<div class="huge ui inverted teal button "><?php the_field('hero_button'); ?></div>
		</div>
	</div>
</div>

<div class="ui vertically padded page grid">

	<div class="sixteen wide column">
		<h2 class="section-header center"><?php the_field('research_headline'); ?></h2>
	</div>
	<?php if( have_rows('research_section') ): ?>
		<?php while( have_rows('research_section') ): the_row(); 

			// vars
		$researchHeadline = get_sub_field('section_headline');
		$researchBody = get_sub_field('section_body');
		$researchImage = get_sub_field('section_image');
		$researchCta = get_sub_field('section_cta');

		?>

		<div class="eight wide column">
			<img class="ui image centered" src="<?php echo $researchImage?>">
			<h3><?php echo $researchHeadline; ?></h3>
			<p><?php echo $researchBody; ?></p>
			<a class="" href=""><?php echo $researchCta ?></a>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

</div>

<div class="ui vertically padded page grid hero-image-2">
	<div class="sixteen wide column">
		<div class="hero-2">
			<h2 class="hero-cta"><?php the_field('collaboration_headline'); ?></h2>
			<div class="ui divider"></div>
			<p class="lead"> <?php the_field('collaboration_body'); ?></p>
		</div>
	</div>
</div>

<div class="ui page grid">
	<div class="sixteen wide column">
		<h2 class="section-header center"><?php the_field('planning_headline'); ?></h2>
	</div>
	<?php if( have_rows('planning_section') ): ?>
		<?php while( have_rows('planning_section') ): the_row(); 

		// vars
		$documentationHeadline = get_sub_field('documentation_headline');
		$documentationBody = get_sub_field('documentation_body');

		?>

		<div class="eight wide column">
			<h3><?php echo $documentationHeadline; ?></h3>
			<p><?php echo $documentationBody; ?></p>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
<div class="sixteen wide column center">
	<a href="#" class="lead"><?php the_field('planning_cta'); ?></a>
	<img class="ui image" src="<?php the_field('planning_image'); ?>">
</div>

</div>

<div class="ui vertically padded page grid hero-image-3">
	<div class="hero">

		<div class="sixteen wide column">
			<h2 class="hero-cta center"><?php the_field('build_headline'); ?></h2>
			<div class="ui divider"></div>
		</div>

		<?php if( have_rows('build_section') ): ?>
			<?php while( have_rows('build_section') ): the_row(); 

			// vars
			$buildHeadline = get_sub_field('build_headline');
			$buildBody = get_sub_field('build_body');
			$buildImage = get_sub_field('build_image');
			$buildCta = get_sub_field('build_cta');

			?>

			<div class="ui page grid">

				<div class="four wide column">
					<img class="ui image" src="<?php echo $buildImage?>">
				</div>
				<div class="twelve wide column">
					<h3><?php echo $buildHeadline; ?></h3>
					<p><?php echo $buildBody; ?></p>
					<a class="" href=""><?php echo $buildCta; ?></a>
				</div>


			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
</div>


</div>


<?php get_footer(); ?>

