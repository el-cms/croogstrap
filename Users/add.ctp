<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<div class="form-register panel panel-default">
			<div class="panel-heading">
				<h2 class="panel-title"><?php echo $title_for_layout; ?></h2>
			</div>
			<div class="panel-body">
				<?php
				echo $this->Form->create('User', array('role' => 'form', 'class' => 'form-horizontal'));
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
					<h3><?php echo __d('croogo', 'Required fields') ?></h3>
					<?php
					echo '<div class="form-group">';
					echo $this->Html->tag('label', __d('croogo', 'User name'), $labelOptions);
					echo $this->Form->input('username', $controlOptions);
					echo '</div>';

					echo '<div class="form-group">';
					echo $this->Html->tag('label', __d('croogo', 'Password'), $labelOptions);
					echo $this->Form->input('password', $controlOptions);
					echo '</div>';

					echo '<div class="form-group">';
					echo $this->Html->tag('label', __d('croogo', 'Verify password'), $labelOptions);
					$controlOptions['type'] = 'password';
					echo $this->Form->input('verify_password', $controlOptions);
					unset($controlOptions['type']);
					echo '</div>';

					echo '<div class="form-group">';
					echo $this->Html->tag('label', __d('croogo', 'Name'), $labelOptions);
					echo $this->Form->input('name', $controlOptions);
					echo '</div>';

					echo '<div class="form-group">';
					echo $this->Html->tag('label', __d('croogo', 'Email'), $labelOptions);
					echo $this->Form->input('email', $controlOptions);
					echo '</div>';
					?>
					<h3><?php echo __d('croogo', 'Optionnal fields') ?></h3>
					<?php
					echo '<div class="form-group">';
					echo $this->Html->tag('label', __d('croogo', 'Website'), $labelOptions);
					echo $this->Form->input('website', $controlOptions);
					echo '</div>';

					echo '<div class="form-group">';
					echo $this->Form->end(array('label' => __d('croogo', 'Register'), 'div' => array('class' => 'col-sm-10 col-sm-offset-2 text-right'), 'class' => 'btn btn-primary'));
					echo '</div>';
					?>
				</fieldset>
			</div>
		</div>
	</div>
</div>