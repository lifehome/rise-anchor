<?php theme_include('header'); ?>

	<section class="content wrap search-page">

			<?php if(has_search_results()): ?>
				<div class="search-header">
					<h1>You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h1>
				</div>
				<ul class="posts-list">
					<?php $i = 0; while(search_results()): $i++; ?>
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
					<div class="wrap">
						<?php echo search_prev(); ?>
						<?php echo search_next(); ?>
					</div>
				</nav>
				<?php endif; ?>

			<?php else: ?>
				<p class="search-header">Unfortunately, there are no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
			<?php endif; ?>

			<div class="search">
        <form id="search" action="<?php echo search_url(); ?>" method="post">
          <input type="search" id="term" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
        </form>
      </div>
	</section>

<?php theme_include('footer'); ?>