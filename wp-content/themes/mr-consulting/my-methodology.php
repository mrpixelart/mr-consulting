<?php
/**
 * Template Name: My Methodology
 *
 * @package mr-consulting
 *
 */

get_header(); 

?>

<div class="hero-image">
	<div class="container">
		<div class="row hero">
			<div class="col-sm-16">
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

<div class="hero-solid">
	<div class="hero-3">
		<div class="container">
			<div class="row">
				<div class="col-sm-16">
					<h2 class="hero-cta center"><?php the_field('build_headline'); ?></h2>
					<div class="ui divider"></div>
				</div>
			</div>
			<div class="row">
				<?php if( have_rows('build_section') ): ?>
					<?php while( have_rows('build_section') ): the_row(); 

			// vars
					$buildHeadline = get_sub_field('build_headline');
					$buildBody = get_sub_field('build_body');
					$buildImage = get_sub_field('build_image');
					$buildCta = get_sub_field('build_cta');

					?>

					<div class="col-md-4">
						<img class="ui image centered" src="<?php echo $buildImage; ?>">
						<div class="list-padding">
							<h4 class="inverted-text center"><?php echo $buildHeadline; ?></h4>
							<p><?php echo $buildBody; ?></p>
							<a class="" href=""><?php echo $buildCta; ?></a>
						</div>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
</div>

<div class="container">
	<div class="row bump-top">
		<div class="col-sm-16">
			<h2 class="section-header center"><?php the_field('strategy_title'); ?></h2>
			<div class="ui divider"></div>
		</div>
		<?php if( have_rows('strategy_section') ): ?>
			<?php while( have_rows('strategy_section') ): the_row(); 

			// vars
			$strategyHeadline = get_sub_field('strategy_headline');
			$strategyBody = get_sub_field('strategy_body');
			$strategyImage = get_sub_field('strategy_image');
			$strategyCta = get_sub_field('strategy_cta');

			?>

			<div class="col-sm-8">
				<img class="ui image centered" src="<?php echo $strategyImage; ?>">
				<h3><?php echo $strategyHeadline; ?></h3>
				<p><?php echo $strategyBody; ?></p>
				<a><?php echo $strategyCta; ?></a>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>

	<div class="col-sm-16 bump-top">
		<div class="ui divider"></div>
		<h3 class="center"><?php the_field('strategy_feature_headline'); ?></h3>
		<p class=""><?php the_field('strategy_feature_body'); ?></p>
		<div class="center">
			<a href="#" class="lead"><?php the_field('strategy_feature_cta'); ?></a>
		</div>
		<img class="ui image centered" src="<?php the_field('strategy_feature_image'); ?>">
	</div>
</div>
</div>
