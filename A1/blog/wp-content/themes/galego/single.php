<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-9">
			<section>
				<h1 class=""><?php the_title(); ?></h1>
				<?php
				if (has_post_thumbnail()) {
					the_post_thumbnail('detaill_articles_thumbs');
				}
				?>
				<?php while (have_posts()):the_post(); ?>
					<a href="<?php the_permalink(); ?>"><?php
					?></a>
					<div class="caption">
						<div class="date"><?php the_date(); ?> en <?php the_category(); ?></div>
					</div>
				<?php endwhile; ?>
				<p> <?php the_content(); ?> </p>
			</section>
			<div>
				<?php the_tags('Tag relacionados: <br>'); ?>
			</div>
			
		</div>
		<div class="col-lg-3">
			<?php comments_template() ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
