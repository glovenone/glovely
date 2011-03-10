<div class="sidebar">

<ul>
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>

	<li id="search">
		<?php include(TEMPLATEPATH .'/searchform.php'); ?>
	</li>
	
	<li id="calendar"><h2><?php _e('日历'); ?></h2>
		<?php get_calendar(); ?>
	</li>

	
	
	
	<li><h2><?php _e('最近的文章');?></h2>
		<ul>
			<?php wp_get_archives(''); ?>
		</ul>
		
	</li>

	
	<?php if(is_home() || is_page()){ ?>  

        <div class="block_links" id="block_links"><h3>友情链接</h3>   
            <ul>   
                <?php wp_list_bookmarks('title_li=&categorize=0'); ?>   
            </ul>   
        </div>   
	<?php } ?>   

	<br/><br/>
	<div id="meta">	
	<li><h2><?php _e('管理'); ?></h2>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<?php wp_meta(); ?>
		</ul>
	</li>
	</div>
<?php endif; ?>
	
</ul>
</div>
