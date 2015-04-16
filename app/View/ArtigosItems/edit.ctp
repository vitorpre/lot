<div class="artigosItems form">
<?php echo $this->Form->create('ArtigosItem'); ?>
	<fieldset>
		<legend><?php echo __('Edit Artigos Item'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('artigo_id');
		echo $this->Form->input('item_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ArtigosItem.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ArtigosItem.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Artigos Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Artigos'), array('controller' => 'artigos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo'), array('controller' => 'artigos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
