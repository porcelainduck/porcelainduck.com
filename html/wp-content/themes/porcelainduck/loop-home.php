	<div class="container mainCont" role="main">
		<div class="row">
			<div class="eightcol">

				<section class="content <?php echo $post->post_type?>">

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="inside">
						<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<p class="excerpt"><?php echo excerpt(30); ?> ... <a href="<?php the_permalink(); ?>">[continue]</a></p>
						
					</div>

				<?php endwhile; ?>

				</section>
			</div><!-- .sevencol -->
			
			<div class="threecol sidebar last">
				<aside>
					<p><a class="titlelink" href="/">porcelainduck.com</a></p>
					
					<nav>
						<ul class="cats">
							<?php wp_list_categories('&title_li='); ?> 
						</ul>
					</nav>
					
				</aside>
			</div><!-- .fourcol -->
		</div><!-- .row -->
	</div><!-- .container -->
