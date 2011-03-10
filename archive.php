	
<?php get_header();?>
<div id="innter-box">
<div id="outer-box">

	<div id="menuCaption" onmouseover="popMenu('menuLists');" onmouseout="popMenu('menuLists');"> 
		<!-- 在这一行中加入你的RSS图片或文字 --> 
		<a id="rss" href="#"><img src="<?php bloginfo('template_url') ?>/images/rss.gif"></a>
<!--		<ul id="menuLists" style="display:none;"> -->
		<!-- 下面li中显示的是你所想要加入的RSS订阅图标或文字 --> 
<!--		<li><a href="#">订阅到****</a></li>
		</br>
		<li><a href="#">订阅到****</a></li> 
		</br>
		<li><a href="#">订阅到****</a></li> 
		</br>
		</ul> 
-->
	</div>
	<script type="text/javascript">
	function popMenu(objId) 
	{
		var obj = document.getElementById(objId);
		if (obj.style.display == 'none') 
		{
			obj.style.display = 'block';
		} 
		else
		{
			obj.style.display = 'none';
		}
	}
	</script>


	<div id = "wrapper">

		<div id = "container">
			<?php if(have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
			<div class="post" id="post-<?php the_ID();?>">
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry">
					<?php the_content(); ?>
					<?php link_pages('<p><strong>Pages:</strong>', '</p>', 'number');?>
					<p class="postmetadata">
						<?php _e('文章属于分类&#58;'); ?> <?php the_category(', ') ?> <?php _e('作者是'); ?> <?php  the_author(); ?>			
						<?php edit_post_link('编辑', ' &#124; ', ''); ?>
					</p>
				</div>
				
				<div class="navigation">
					<?php posts_nav_link(); ?>
					<div class="comments-template">
						<?php comments_template();?>
					</div>
				</div>
			</div>
		<?php endwhile;?>
		<?php else: ?>
		<?php endif; ?>
		</div>
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
	</div>

</body>

</html>

