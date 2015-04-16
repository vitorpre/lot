<div class="conteudos index">
	<h2><?php echo __('Conteudos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('conteudo'); ?></th>
			<th><?php echo $this->Paginator->sort('artigo_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($conteudos as $conteudo): ?>
	<tr>
		<td><?php echo h($conteudo['Conteudo']['id']); ?>&nbsp;</td>
		<td><?php echo h($conteudo['Conteudo']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($conteudo['Conteudo']['conteudo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($conteudo['Artigo']['id'], array('controller' => 'artigos', 'action' => 'view', $conteudo['Artigo']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $conteudo['Conteudo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $conteudo['Conteudo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $conteudo['Conteudo']['id']), array(), __('Are you sure you want to delete # %s?', $conteudo['Conteudo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Conteudo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Artigos'), array('controller' => 'artigos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo'), array('controller' => 'artigos', 'action' => 'add')); ?> </li>
	</ul>
</div>
