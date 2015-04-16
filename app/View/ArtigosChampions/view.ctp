<div class="artigosChampions view">
<h2><?php echo __('Artigos Champion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($artigosChampion['ArtigosChampion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Artigo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artigosChampion['Artigo']['id'], array('controller' => 'artigos', 'action' => 'view', $artigosChampion['Artigo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Champion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artigosChampion['Champion']['id'], array('controller' => 'champions', 'action' => 'view', $artigosChampion['Champion']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Artigos Champion'), array('action' => 'edit', $artigosChampion['ArtigosChampion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Artigos Champion'), array('action' => 'delete', $artigosChampion['ArtigosChampion']['id']), array(), __('Are you sure you want to delete # %s?', $artigosChampion['ArtigosChampion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigos Champions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigos Champion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigos'), array('controller' => 'artigos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo'), array('controller' => 'artigos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Champions'), array('controller' => 'champions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Champion'), array('controller' => 'champions', 'action' => 'add')); ?> </li>
	</ul>
</div>
