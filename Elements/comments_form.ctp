<div class="comment-form panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><?php echo __d('croogo', 'Add new comment'); ?></h3>
	</div>
	<div class="panel-body">
		<?php
		$type = $types_for_layout[$data[$model]['type']];

		if ($this->request->params['controller'] == 'comments') {
			$backLink = $this->Html->link(__d('croogo', 'Go back to original post') . ': ' . $data[$model]['title'], $data[$model]['url']);
			echo $this->Html->tag('p', $backLink, array('class' => 'back'));
		}

		$formUrl = array(
				'plugin' => 'comments',
				'controller' => 'comments',
				'action' => 'add',
				'Node',
				$data[$model]['id'],
		);
		if (isset($parentId) && $parentId != null) {
			$formUrl[] = $parentId;
		}

		echo $this->Form->create('Comment', array('url' => $formUrl, 'class' => 'form-horizontal'));
		$userName = null;
		$userEMail = null;
		$userWebsite = null;
		$readOnly=null;
		if ($this->Session->check('Auth.User.id')) {
			$userName = $this->Session->read('Auth.User.name');
			$userEMail = $this->Session->read('Auth.User.email');
			$userWebsite = $this->Session->read('Auth.User.website');
			$readOnly=true;
		}

		$controlOptions = array(
				'label' => false,
				'value' => null,
				'readonly' => $readOnly,
				'class' => 'form-control',
				'div' => array('class' => 'col-sm-6')
		);

		// Inputs
		echo '<div class="form-group">';
		echo $this->Html->tag('label', __d('croogo', 'Name'), array('class' => 'col-sm-2 control-label'));
		$controlOptions['value'] = $userName;
		echo $this->Form->input('Comment.name', $controlOptions);
		echo '</div>';

		echo '<div class="form-group">';
		echo $this->Html->tag('label', __d('croogo', 'Email'), array('class' => 'col-sm-2 control-label'));
		$controlOptions['value'] = $userEMail;
		echo $this->Form->input('Comment.email', $controlOptions);
		echo '</div>';

		echo '<div class="form-group">';
		echo $this->Html->tag('label', __d('croogo', 'Website'), array('class' => 'col-sm-2 control-label'));
		$controlOptions['value'] = $userWebsite;
		echo $this->Form->input('Comment.website', $controlOptions);
		echo '</div>';

		echo '<div class="form-group">';
		echo $this->Html->tag('label', __d('croogo', 'Comment'), array('class' => 'col-sm-2 control-label'));
		$controlOptions['value'] = null;
		$controlOptions['div']['class'] = 'col-sm-8';
		$controlOptions['readonly']=null;
		echo $this->Form->input('Comment.body', $controlOptions);
		echo '</div>';

		if ($type['Type']['comment_captcha']) {
			echo $this->Recaptcha->display_form();
		}
		echo '<div class="form-group">';
		echo $this->Form->end(array('value' => __d('croogo', 'Post comment'), 'div' => array('class' => 'col-sm-10 col-sm-offset-2'), 'class' => 'btn btn-primary'));
		echo '</div>';
		?>
	</div>
</div>