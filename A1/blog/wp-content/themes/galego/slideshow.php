<?php query_posts("category_name=slider"); ?>
<?php if (have_posts()): ?>
	<div class="container continerFull">
		<div class="content">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 

				<ol class="carousel-indicators"> 
					<?php
					$count = 1;
					while (have_posts()):the_post();
						?>
						<li data-target="#carousel-example-generic" data-slide-to="<?php echo $count; ?>" class="<?php echo $count == 1 ? 'active' : '' ?>"></li> 
						<?php $count++;
					endwhile;
					?>
				</ol> 
				<div class="carousel-inner" role="listbox"> 
					<?php
					$count = 1;
					while (have_posts()):the_post();
						?>
						<div class="item <?php echo $count == 1 ? 'active' : '' ?>">
							<?php
							if (has_post_thumbnail()) {
								the_post_thumbnail('slider_thumbs', array('class' => 'img-responsive center-block'));
							}
							?>
							<div class="carousel-caption">
								<h1><a style="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							</div>
						</div> 
		<?php $count++;
	endwhile;
	?>
				</div> 
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> 
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> 
					<span class="sr-only">Previous</span> </a> 
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> 
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> 
					<span class="sr-only">Next</span> </a> </div>
		</div>
	</div>

<?php endif; ?>