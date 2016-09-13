<?php get_header(); ?>
<?php require_once TEMPLATEPATH . '/slideshow.php'; ?>
<div class="container content-area" >
	<div class="row">
		<div class="col-lg-9 col-md-9">
				<div class="row">
					<?php query_posts("paged=$paged"); ?>
					<?php if (have_posts()): while (have_posts()):the_post(); ?>
							<div class="col-sm-4 col-md-4">
								<div class="thumbnail">
									<a href="<?php the_permalink(); ?>"><?php
										if (has_post_thumbnail()) {
											the_post_thumbnail('list_articles_thumbs');
										}
										?></a>
									<div class="caption">
										<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										<div class="date"><?php the_category(); ?></div>
										<p>
											<?php the_excerpt(); ?>
										</p>
									</div>
								</div>
							</div>
							<?php
						endwhile;
					else:
						?>
						<h1>No se encontraron articulos</h1>
					<?php endif ?>
				</div>	
				<div class="pagination">
					<p>
						<?php next_posts_link('<- Post Siguientes'); ?>
						<?php previous_posts_link('Post Anteriores ->'); ?>

					</p>
				</div>
		</div>
		<div class="col-lg-3 col-md-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
	<?php get_footer(); ?>
