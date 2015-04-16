<div class="champions view">
<h2><?php echo __('Champion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($champion['Champion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($champion['Champion']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($champion['Champion']['foto']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Champion'), array('action' => 'edit', $champion['Champion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Champion'), array('action' => 'delete', $champion['Champion']['id']), array(), __('Are you sure you want to delete # %s?', $champion['Champion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Champions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Champion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigos'), array('controller' => 'artigos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo'), array('controller' => 'artigos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Artigos'); ?></h3>
	<?php if (!empty($champion['Artigo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Imagem Capa'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($champion['Artigo'] as $artigo): ?>
		<tr>
			<td><?php echo $artigo['id']; ?></td>
			<td><?php echo $artigo['data']; ?></td>
			<td><?php echo $artigo['imagem_capa']; ?></td>
			<td><?php echo $artigo['usuario_id']; ?></td>
			<td><?php echo $artigo['categoria_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'artigos', 'action' => 'view', $artigo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'artigos', 'action' => 'edit', $artigo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'artigos', 'action' => 'delete', $artigo['id']), array(), __('Are you sure you want to delete # %s?', $artigo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Artigo'), array('controller' => 'artigos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
