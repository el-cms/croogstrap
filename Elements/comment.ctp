<div id="comment-<?php echo $comment['Comment']['id']; ?>" class="media comment<?php
if ($node['Node']['user_id'] == $comment['Comment']['user_id']) {
	echo ' author';
}
?>">
	<span class="pull-left"><?php echo $this->Html->image('http://www.gravatar.com/avatar/' . md5(strtolower($comment['Comment']['email'])) . '?s=48', array('class' => 'media-object')) ?></span>

  <div class="media-body">
		<h4 class="media-heading">
			<?php
			if ($comment['Comment']['website'] != null) {
				echo $this->Html->link($comment['Comment']['name'], $comment['Comment']['website'], array('target' => '_blank'));
			} else {
				echo $comment['Comment']['name'];
			}
			?>
			<small><?php echo __d('croogo', 'said on %s', $this->Time->format(Configure::read('Comment.date_time_format'), $comment['Comment']['created'], null, Configure::read('Site.timezone'))); ?></small>

		</h4>
		<?php echo nl2br($this->Text->autoLink($comment['Comment']['body'])); ?>
		<?php
		if ($level <= Configure::read('Comment.level')) {
			?>
			<div class='row'>
				<div class='col-sm-12 text-right'>
					<?php
					echo $this->Html->link('<i class="fa fa-reply"></i> ' . __d('croogo', 'Reply'), array(
							'plugin' => 'comments',
							'controller' => 'comments',
							'action' => 'add',
							'Node',
							$node['Node']['id'],
							$comment['Comment']['id'],
									), array('class' => 'btn btn-link', 'escape' => false));
					?>
				</div>
			</div><?php
		}
		?>

		<?php
		if (isset($comment['children']) && count($comment['children']) > 0) {
			foreach ($comment['children'] as $childComment) {
				echo $this->element('Comments.comment', array('comment' => $childComment, 'level' => $level + 1));
			}
		}
		?>
	</div>
</div>