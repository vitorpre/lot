<div class="usuarios index">
	<h2><?php echo __('Usuarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('login'); ?></th>
			<th><?php echo $this->Paginator->sort('senha'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_lol'); ?></th>
			<th><?php echo $this->Paginator->sort('liga'); ?></th>
			<th><?php echo $this->Paginator->sort('divisao'); ?></th>
			<th><?php echo $this->Paginator->sort('foto'); ?></th>
			<th><?php echo $this->Paginator->sort('fl_permite_divulgar'); ?></th>
			<th><?php echo $this->Paginator->sort('infadicional_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($usuarios as $usuario): ?>
	<tr>
		<td><?php echo h($usuario['Usuario']['id']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['login']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['senha']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['usuario_lol']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['liga']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['divisao']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['foto']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['fl_permite_divulgar']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($usuario['Infadicional']['id'], array('controller' => 'infadicionals', 'action' => 'view', $usuario['Infadicional']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usuario['Usuario']['id']), array(), __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Infadicionals'), array('controller' => 'infadicionals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Infadicional'), array('controller' => 'infadicionals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigos'), array('controller' => 'artigos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo'), array('controller' => 'artigos', 'action' => 'add')); ?> </li>
	</ul>
</div>
