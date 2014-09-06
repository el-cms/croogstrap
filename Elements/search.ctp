<?php
echo $this->Form->create(null, array('admin' => false, 'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'search', 'class' => 'form-inline'));
$this->Form->unlockField('q');
?>
<div class="form-group">
	<div class="input-group input-group-sm">
		<div class="input-group-addon"><i class="fa fa-search"></i></div>
		<?php
		echo $this->Form->input('q', array(
				'label' => false,
				'class' => 'form-control',
				'div' => false
		));
		?>
		<span class="input-group-btn"><?php echo $this->Form->button(__d('croogo', 'Search'), array('class' => 'btn btn-default')); ?></span>
	</div>
</div>
<?php
echo $this->Form->end();