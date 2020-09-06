<?php get_header(); ?>

<div class="content">



		<?php if (have_posts()) : ?>



		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

<?php /* If this is a category archive */ if (is_category()) { ?>

		<h2 class="pagetitle">Archive for the &#8216;<?php echo single_cat_title(); ?>&#8217; Category</h2>



 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>

		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>



	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>

		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>



		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>

		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>



	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>

		<h2 class="pagetitle">Author Archive</h2>



		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

		<h2 class="pagetitle">Blog Archives</h2>



		<?php } ?>



		<?php while (have_posts()) : the_post(); ?>

		

			<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<div class="date">
			<?php the_time('M-jS-Y') ?>
				</div>
			<div class="postinfo">

				By <?php the_author(); ?> in <?php the_category(', '); ?>

			</div>

			<div class="post">

				<?php the_excerpt('Read the rest of this entry &raquo;'); ?>

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

			<p>Sorry, but you are looking for something that isn't here.</p>

		</div>

		<div class="postbottom">

		</div>



	<?php endif; ?>



</div>



<?php get_sidebar(); ?>



<?php get_footer(); ?>

