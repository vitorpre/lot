<div class="infadicionals form">
<?php echo $this->Form->create('Infadicional'); ?>
	<fieldset>
		<legend><?php echo __('Edit Infadicional'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('dh_cadastro');
		echo $this->Form->input('dt_nascimento');
		echo $this->Form->input('nome');
		echo $this->Form->input('facebook');
		echo $this->Form->input('twitter');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Infadicional.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Infadicional.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Infadicionals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
