<div class="artigos form">
<?php echo $this->Form->create('Artigo', array('enctype'=>'multipart/form-data')); ?>
	<fieldset>
		<legend><?php echo __('Add Artigo'); ?></legend>
	<?php
		echo $this->Form->input('data');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('categoria_id');
		echo $this->Form->input('Champion');
		echo $this->Form->input('Item');
		echo $this->Form->input('upload', array('type'=>'file'));

		echo $this->Form->input('Conteudo.0.titulo');;
		echo $this->Form->input('Conteudo.0.conteudo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Artigos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conteudos'), array('controller' => 'conteudos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conteudo'), array('controller' => 'conteudos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Champions'), array('controller' => 'champions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Champion'), array('controller' => 'champions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>

	</ul>
</div>
