<?php
$this->set(compact('block'));
$b = $block['Block'];
$class = 'block block-' . $b['alias'];
if ($block['Block']['class'] != null) {
	$class .= ' ' . $b['class'];
}
?>
<div id="block-<?php echo $b['id']; ?>" class="panel panel-info <?php echo $class; ?>">
	<?php if ($b['show_title'] == 1): ?>
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo $b['title']; ?></h3>
		</div>
	<?php endif; ?>
	<div class="panel-body">
		<?php
		echo $this->Layout->filter($b['body'], array(
				'model' => 'Block', 'id' => $b['id']
		));
		?>
	</div>
</div>