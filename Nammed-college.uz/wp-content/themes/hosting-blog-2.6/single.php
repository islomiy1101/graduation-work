<?php get_header(); ?>

<div class="content">



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



			<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

				<div class="date">
				<?php the_time('M-jS-Y') ?>
				</div>

			<div class="postinfo">

				By <?php the_author(); ?> in <?php the_category(', '); ?>

			</div>

			<div class="post">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => '<div class="pagelinks">Pages: ', 'after' => '</div>', 'next_or_number' => 'number')); ?>

				

				<?php comments_template(); ?>

				

			</div>

			<div class="postbottom">

								<div class="commentslink">

					<a href="<?php the_permalink(); ?>#comments">Comments (<?php comments_number('0', '1', '%'); ?>)</a>

				</div>


			</div>

			

	



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

