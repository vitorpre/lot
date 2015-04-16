<div class="champions form">
<?php echo $this->Form->create('Champion'); ?>
	<fieldset>
		<legend><?php echo __('Add Champion'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('foto');
		echo $this->Form->input('Artigo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Champions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Artigos'), array('controller' => 'artigos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo'), array('controller' => 'artigos', 'action' => 'add')); ?> </li>
	</ul>
</div>
