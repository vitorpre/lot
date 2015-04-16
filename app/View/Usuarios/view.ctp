<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Login'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Senha'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['senha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario Lol'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['usuario_lol']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Liga'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['liga']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Divisao'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['divisao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['foto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fl Permite Divulgar'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['fl_permite_divulgar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Infadicional'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usuario['Infadicional']['id'], array('controller' => 'infadicionals', 'action' => 'view', $usuario['Infadicional']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), array(), __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Infadicionals'), array('controller' => 'infadicionals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Infadicional'), array('controller' => 'infadicionals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigos'), array('controller' => 'artigos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo'), array('controller' => 'artigos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Artigos'); ?></h3>
	<?php if (!empty($usuario['Artigo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Imagem Capa'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($usuario['Artigo'] as $artigo): ?>
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
