<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Edit Usuario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('login');
		echo $this->Form->input('senha');
		echo $this->Form->input('usuario_lol');
		echo $this->Form->input('liga');
		echo $this->Form->input('divisao');
		echo $this->Form->input('foto');
		echo $this->Form->input('fl_permite_divulgar');
		echo $this->Form->input('infadicional_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Usuario.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Usuario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Infadicionals'), array('controller' => 'infadicionals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Infadicional'), array('controller' => 'infadicionals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigos'), array('controller' => 'artigos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo'), array('controller' => 'artigos', 'action' => 'add')); ?> </li>
	</ul>
</div>
