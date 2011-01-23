    <br />
    <br />
<div class="section">
<div class="words view">
<h3><?php  __('Word');?></h3>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $word['Word']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tegal'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $word['Word']['tegal']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Indonesia'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $word['Word']['indonesia']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inggris'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $word['Word']['inggris']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Word', true), array('action' => 'edit', $word['Word']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Word', true), array('action' => 'delete', $word['Word']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $word['Word']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Words', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Word', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
</div>