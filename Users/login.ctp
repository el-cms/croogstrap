<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<div class="panel panel-default form-login">
			<div class="panel-heading">
				<h2 class="panel-title"><?php echo __d('croogo', 'Login'); ?></h2>
			</div>
			<div class="panel-body">
				<?php
				echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login'), 'class' => 'form-horizontal', 'role' => 'form'));
				$controlOptions = array(
						'label' => false,
						'value' => null,
						'class' => 'form-control input-sm',
						'div' => array('class' => 'col-sm-8')
				);
				$labelOptions = array(
						'class' => 'col-sm-4 control-label',
								)
				?>
				<fieldset>
					<?php
					echo '<div class="form-group">';
					echo $this->Html->tag('label', __d('croogo', 'User name'), $labelOptions);
					echo $this->Form->input('username', $controlOptions);
					echo '</div>';

					echo '<div class="form-group">';
					echo $this->Html->tag('label', __d('croogo', 'password'), $labelOptions);
					echo $this->Form->input('password', $controlOptions);
					echo '</div>';

					echo '<div class="form-group">';
					echo $this->Form->end(array('label' => __d('croogo', 'Log in'), 'div' => array('class' => 'col-sm-10 col-sm-offset-2 text-right'), 'class' => 'btn btn-primary'));
					echo '</div>';
					?>
				</fieldset>
			</div>
		</div>
	</div>


</div>