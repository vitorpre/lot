<div class="artigosChampions form">
<?php echo $this->Form->create('ArtigosChampion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Artigos Champion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('artigo_id');
		echo $this->Form->input('champion_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ArtigosChampion.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ArtigosChampion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Artigos Champions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Artigos'), array('controller' => 'artigos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo'), array('controller' => 'artigos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Champions'), array('controller' => 'champions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Champion'), array('controller' => 'champions', 'action' => 'add')); ?> </li>
	</ul>
</div>
