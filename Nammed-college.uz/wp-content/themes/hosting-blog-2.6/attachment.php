<?php get_header(); ?>
<div class="content">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php $attachment_link = get_the_attachment_link($post->ID, true, array(450, 800)); // This also populates the iconsize for the next line ?>
<?php $_post = &get_post($post->ID); $classname = ($_post->iconsize[0] <= 128 ? 'small' : '') . 'attachment'; // This lets us style narrow icons specially ?>

			<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<div class="date">
				<?php the_time('M-jS-Y') ?>
				</div>
			<div class="postinfo">
				By <?php the_author(); ?> in <?php the_category(', '); ?>
			</div>
			<div class="post">
				<div class="contentCenter">
				<p><?php echo $attachment_link; ?></p>
				<p><strong><?php echo basename($post->guid); ?></strong></p>
				<?php the_content(); ?>
			</div>
			</div>
			<div class="postbottom">
				<div class="commentslink">
					<a href="<?php the_permalink(); ?>#comments">Comments (<?php comments_number('0', '1', '%'); ?>)</a>
				</div>
				<div class="readmore">
					[<a href="<?php the_permalink(); ?>">Permalink</a>]
				</div>
						<div class="edit">

		<?php edit_post_link('Edit',' ',''); ?>
				</div>
				
			</div>
			
	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<h1 class="title">Not Found</h1>
		<div class="postinfo">
		</div>
		<div class="post">
			<p>Sorry, but you are looking for something that isn't here.</p>
		</div>
		<div class="postbottom">
		</div>
		
<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
