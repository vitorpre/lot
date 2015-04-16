<div class="artigos view">
<h2><?php echo __('Artigo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($artigo['Artigo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($artigo['Artigo']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagem Capa'); ?></dt>
		<dd>
			<?php echo h($artigo['Artigo']['imagem_capa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artigo['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $artigo['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artigo['Categoria']['id'], array('controller' => 'categorias', 'action' => 'view', $artigo['Categoria']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Artigo'), array('action' => 'edit', $artigo['Artigo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Artigo'), array('action' => 'delete', $artigo['Artigo']['id']), array(), __('Are you sure you want to delete # %s?', $artigo['Artigo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Conteudos'); ?></h3>
	<?php if (!empty($artigo['Conteudo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Conteudo'); ?></th>
		<th><?php echo __('Artigo Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($artigo['Conteudo'] as $conteudo): ?>
		<tr>
			<td><?php echo $conteudo['id']; ?></td>
			<td><?php echo $conteudo['titulo']; ?></td>
			<td><?php echo $conteudo['conteudo']; ?></td>
			<td><?php echo $conteudo['artigo_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'conteudos', 'action' => 'view', $conteudo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'conteudos', 'action' => 'edit', $conteudo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'conteudos', 'action' => 'delete', $conteudo['id']), array(), __('Are you sure you want to delete # %s?', $conteudo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Conteudo'), array('controller' => 'conteudos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Champions'); ?></h3>
	<?php if (!empty($artigo['Champion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($artigo['Champion'] as $champion): ?>
		<tr>
			<td><?php echo $champion['id']; ?></td>
			<td><?php echo $champion['nome']; ?></td>
			<td><?php echo $champion['foto']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'champions', 'action' => 'view', $champion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'champions', 'action' => 'edit', $champion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'champions', 'action' => 'delete', $champion['id']), array(), __('Are you sure you want to delete # %s?', $champion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Champion'), array('controller' => 'champions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Items'); ?></h3>
	<?php if (!empty($artigo['Item'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($artigo['Item'] as $item): ?>
		<tr>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['nome']; ?></td>
			<td><?php echo $item['foto']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'items', 'action' => 'view', $item['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'items', 'action' => 'edit', $item['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'items', 'action' => 'delete', $item['id']), array(), __('Are you sure you want to delete # %s?', $item['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
