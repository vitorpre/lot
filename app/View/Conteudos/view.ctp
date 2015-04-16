<div class="conteudos view">
<h2><?php echo __('Conteudo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($conteudo['Conteudo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($conteudo['Conteudo']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conteudo'); ?></dt>
		<dd>
			<?php echo h($conteudo['Conteudo']['conteudo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Artigo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($conteudo['Artigo']['id'], array('controller' => 'artigos', 'action' => 'view', $conteudo['Artigo']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Conteudo'), array('action' => 'edit', $conteudo['Conteudo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Conteudo'), array('action' => 'delete', $conteudo['Conteudo']['id']), array(), __('Are you sure you want to delete # %s?', $conteudo['Conteudo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Conteudos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conteudo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigos'), array('controller' => 'artigos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo'), array('controller' => 'artigos', 'action' => 'add')); ?> </li>
	</ul>
</div>
