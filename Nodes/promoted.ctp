<div class="nodes">
	<?php
	if (count($nodes) == 0) {
		echo __d('croogo', 'No items found.');
	}
	?>

	<?php
	foreach ($nodes as $node):
		$this->Nodes->set($node);
		?>
		<div id="node-<?php echo $this->Nodes->field('id'); ?>" class="panel panel-primary node-type<?php echo $this->Nodes->field('type'); ?>">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo $this->Html->link($this->Nodes->field('title'), $this->Nodes->field('url')); ?></h3>
			</div>
			<?php
			echo $this->Nodes->info();
			echo $this->Nodes->body();
			echo $this->Nodes->moreInfo();
			?>
		</div>
		<?php
	endforeach;
	?>

	<div class="paging"><?php echo $this->Paginator->numbers(); ?></div>
</div>