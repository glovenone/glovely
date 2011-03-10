
<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">

<div>

	<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" size="30"  /><br />

	<input type="submit" id="searchsubmit" value="本站内容搜索" align="right"/>

</div>

</form>

