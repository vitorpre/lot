<div class="artigos index">
	<h2><?php echo __('Artigos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('data'); ?></th>
				<th><?php echo $this->Paginator->sort('imagem_capa'); ?></th>
				<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
				<th><?php echo $this->Paginator->sort('categoria_id'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($artigos as $artigo): ?>
				<tr>
					<td><?php echo h($artigo['Artigo']['id']); ?>&nbsp;</td>
					<td><?php echo h($artigo['Artigo']['data']); ?>&nbsp;</td>
					<td><?php echo h($artigo['Artigo']['imagem_capa']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($artigo['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $artigo['Usuario']['id'])); ?>
					</td>
					<td>
						<?php echo $this->Html->link($artigo['Categoria']['id'], array('controller' => 'categorias', 'action' => 'view', $artigo['Categoria']['id'])); ?>
					</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $artigo['Artigo']['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $artigo['Artigo']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $artigo['Artigo']['id']), array(), __('Are you sure you want to delete # %s?', $artigo['Artigo']['id'])); ?>
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
				<li><?php echo $this->Html->link(__('New Artigo'), array('action' => 'add')); ?></li>
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
