	<div class="container">
		<div class="row">
			<div class="eightcol">

				<section class="content <?php echo $post->post_type?>">

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="inside">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						
						<p class="mshow"><?php the_time('F j, Y'); ?><br>
							Leave a comment</p>

						<?php the_content(); ?>
												
						<br>
					 	<!-- AddThis Button BEGIN -->
						<div class="addthis_toolbox addthis_default_style ">
						<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
						<a class="addthis_button_tweet"></a>
						<a class="addthis_counter addthis_pill_style"></a>
						</div>
						<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
						<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-508cad787fc2de99"></script>
						<!-- AddThis Button END -->
					
						
						<div id="comments">
							<?php comments_template( $file, $separate_comments ); ?>
						</div>
					</div>

				

				</section>
			</div><!-- .eightcol -->

			<div class="threecol sidebar last">

				<p class="mhide"><?php the_time('F j, Y'); ?><br>
					<a href="#comments">Leave a comment</a></p>

					<br>
				<p><a class="titlelink" href="/">porcelainduck.com</a></p>

				<nav>
					<ul class="cats">
						<?php wp_list_categories('&title_li=&current_category=1'); ?> 

					</ul>
				</nav>


				<?php endwhile; ?>
			</div><!-- .threecol -->
		</div><!-- .row -->
	</div><!-- .container -->