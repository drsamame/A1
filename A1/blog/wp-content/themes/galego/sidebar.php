<?php
$args = array(
	'posts_per_page' => 3,
	'paged' => 1,
	'more' => $more = 0,
	'orderby' => 'comment_count',
	'order' => 'DESC',
);
?>
<?php query_posts($args); ?>
<div class="panel panel-default">
	<div class="panel-heading"><span class="glyphicon glyphicon-eye-open"></span> Lo Mas Comentado</div>
	<div class="panel-body">
		<?php while (have_posts()):the_post(); ?>
		<div class="media"> 
			<div class="media-left"> 
				<a href="<?php the_permalink(); ?>"> <?php if (has_post_thumbnail()) { the_post_thumbnail('sidebar_thumbs'); } ?> </a> 
			</div> 
			<div class="media-body"> 
				<h4 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
			</div> 
		</div>
		<?php
		endwhile;
		?>
	</div>
</div>