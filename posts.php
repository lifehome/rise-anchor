<?php theme_include('header'); ?>

<div class="container wrap">
	<section class="content">

		<?php if(has_posts()): ?>
			<ul class="posts-list">
				<?php while(posts()): ?>
				<li>
					<article class="post">
						<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">
              <h2><?php echo article_title(); ?></h2>
              <p class="timestamp"><?php echo relative_time(article_time()); ?></p>
              <?php if (article_description()): ?>
              <p><?php echo article_description(); ?></p>
              <?php endif; ?>
              <span class="article-number">#<?php echo article_id(); ?></span>
            </a>
					</article>
				</li>
        <?php endwhile; ?>
			</ul>

			<?php if(has_pagination()): ?>
			<nav class="pagination">
          <?php echo posts_next('&lsaquo;', '<span>&lsaquo;</span>'); ?>
					<?php echo posts_prev('&rsaquo;', '<span>&rsaquo;</span>'); ?>
			</nav>
			<?php endif; ?>

		<?php else: ?>
			<p>Looks like you have some writing to do!</p>
		<?php endif; ?>


      <div class="search-icon">
        <a href="#" class="trigger"><img src="<?php echo theme_url('/img/search.png'); ?>"></a>
      </div>
      <div class="search">
        <form id="search" action="<?php echo search_url(); ?>" method="post">
          <input type="search" id="term" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
        </form>
      </div>

	</section>
</div>

<?php theme_include('footer'); ?>