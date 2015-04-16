<div class="artigosItems view">
<h2><?php echo __('Artigos Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($artigosItem['ArtigosItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Artigo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artigosItem['Artigo']['id'], array('controller' => 'artigos', 'action' => 'view', $artigosItem['Artigo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artigosItem['Item']['id'], array('controller' => 'items', 'action' => 'view', $artigosItem['Item']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Artigos Item'), array('action' => 'edit', $artigosItem['ArtigosItem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Artigos Item'), array('action' => 'delete', $artigosItem['ArtigosItem']['id']), array(), __('Are you sure you want to delete # %s?', $artigosItem['ArtigosItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigos Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigos Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artigos'), array('controller' => 'artigos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo'), array('controller' => 'artigos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
