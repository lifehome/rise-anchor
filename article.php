<?php theme_include('header'); ?>

		<section class="content wrap single" id="article-<?php echo article_id(); ?>">
			<article>
				<h1><?php echo article_title(); ?></h1>
				<?php echo article_markdown(); ?>
			</article>

			<section class="footnote">
				<p>This article is my <?php echo numeral(article_id()); ?> oldest. It is was posted <?php echo relative_time(article_time()); ?></p>
			</section>


		<?php if(comments_open()): ?>
		<section class="comments">
			<?php if(has_comments()): ?>
			<ol class="commentlist">
				<?php $i = 0; while(comments()): $i++; ?>
				<li class="comment" id="comment-<?php echo comment_id(); ?>">
					<h4><?php echo comment_name(); ?></h4>
					<span class="timestamp"><?php echo relative_time(comment_time()); ?></span>

					<div class="comment-text">
						<?php echo comment_text(); ?>
					</div>

					<span class="counter" style="display:none;"><?php echo $i; ?></span>
				</li>
				<?php endwhile; ?>
			</ol>
			<?php endif; ?>

			<form id="comment" class="commentform" method="post" action="<?php echo comment_form_url(); ?>#comment">
				<?php echo comment_form_notifications(); ?>

				<p class="name">
					<?php echo comment_form_input_name('placeholder="Your name"'); ?>
				</p>

				<p class="email">
					<?php echo comment_form_input_email('placeholder="Your email (won’t be published)"'); ?>
				</p>

				<p class="textarea">
					<?php echo comment_form_input_text('placeholder="Your comment"'); ?>
				</p>

				<p class="submit">
					<?php echo comment_form_button(); ?>
				</p>
			</form>

		</section>
		<?php endif; ?>
	</section>
<?php theme_include('footer'); ?>