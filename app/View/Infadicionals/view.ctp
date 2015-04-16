<div class="infadicionals view">
<h2><?php echo __('Infadicional'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($infadicional['Infadicional']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dh Cadastro'); ?></dt>
		<dd>
			<?php echo h($infadicional['Infadicional']['dh_cadastro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dt Nascimento'); ?></dt>
		<dd>
			<?php echo h($infadicional['Infadicional']['dt_nascimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($infadicional['Infadicional']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook'); ?></dt>
		<dd>
			<?php echo h($infadicional['Infadicional']['facebook']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Twitter'); ?></dt>
		<dd>
			<?php echo h($infadicional['Infadicional']['twitter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($infadicional['Infadicional']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Infadicional'), array('action' => 'edit', $infadicional['Infadicional']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Infadicional'), array('action' => 'delete', $infadicional['Infadicional']['id']), array(), __('Are you sure you want to delete # %s?', $infadicional['Infadicional']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Infadicionals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Infadicional'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Usuarios'); ?></h3>
	<?php if (!empty($infadicional['Usuario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Login'); ?></th>
		<th><?php echo __('Senha'); ?></th>
		<th><?php echo __('Usuario Lol'); ?></th>
		<th><?php echo __('Liga'); ?></th>
		<th><?php echo __('Divisao'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th><?php echo __('Fl Permite Divulgar'); ?></th>
		<th><?php echo __('Infadicional Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($infadicional['Usuario'] as $usuario): ?>
		<tr>
			<td><?php echo $usuario['id']; ?></td>
			<td><?php echo $usuario['login']; ?></td>
			<td><?php echo $usuario['senha']; ?></td>
			<td><?php echo $usuario['usuario_lol']; ?></td>
			<td><?php echo $usuario['liga']; ?></td>
			<td><?php echo $usuario['divisao']; ?></td>
			<td><?php echo $usuario['foto']; ?></td>
			<td><?php echo $usuario['fl_permite_divulgar']; ?></td>
			<td><?php echo $usuario['infadicional_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'usuarios', 'action' => 'view', $usuario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'usuarios', 'action' => 'edit', $usuario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'usuarios', 'action' => 'delete', $usuario['id']), array(), __('Are you sure you want to delete # %s?', $usuario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
