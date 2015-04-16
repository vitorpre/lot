<div class="conteudos form">
<?php echo $this->Form->create('Conteudo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Conteudo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('conteudo');
		echo $this->Form->input('artigo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Conteudo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Conteudo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Conteudos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Artigos'), array('controller' => 'artigos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo'), array('controller' => 'artigos', 'action' => 'add')); ?> </li>
	</ul>
</div>
