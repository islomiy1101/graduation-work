<?php get_header(); ?>

<div class="content">



	<?php if (have_posts()) : ?>



		<h2 class="pagetitle">Search Results</h2>



		<?php while (have_posts()) : the_post(); ?>



			<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

				<div class="date">
				<?php the_time('M-jS-Y') ?>
				</div>
			<div class="postinfo">

				By <?php the_author(); ?> in <?php the_category(', '); ?>


			</div>

			<div class="post">

				<?php the_excerpt(); ?>

			</div>

			<div class="postbottom">

				<div class="commentslink">

					<a href="<?php the_permalink(); ?>#comments">Comments (<?php comments_number('0', '1', '%'); ?>)</a>

				</div>

				<div class="readmore">

					<a href="<?php the_permalink(); ?>">ReadMore</a>

				</div>
				
				<div class="edit">

		<?php edit_post_link('Edit',' ',''); ?>
		
				</div>

			</div>



		<?php endwhile; ?>



		<div class="navigation">

			<div class="aleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>

			<div class="aright"><?php previous_posts_link('Next Entries &raquo;') ?></div>

		</div>



	<?php else : ?>

	

		<h1 class="title">Not Found</h1>

		<div class="postinfo">

		</div>

		<div class="post">

			<p>Sorry, no post matched your criteria. Try a different search?</p>

		</div>

		<div class="postbottom">

		</div>



	<?php endif; ?>



</div>



<?php get_sidebar(); ?>



<?php get_footer(); ?>

