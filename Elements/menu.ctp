<div id="menu-<?php echo $menu['Menu']['id']; ?>" class=" block-list-group">
	<?php
	$options = array_merge($options, array('tagAttributes' => array('class' => 'list-group')));
	echo $this->Menus->nestedLinks($menu['threaded'], $options);
	?>
</div>