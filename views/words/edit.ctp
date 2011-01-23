    <br />
    <br />
<div class="section">
<div class="words form">
<?php echo $this->Form->create('Word');?>
	<fieldset>
 		<legend><?php __('Edit Word'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tegal');
		echo $this->Form->input('indonesia');
		echo $this->Form->input('inggris');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Word.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Word.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Words', true), array('action' => 'index'));?></li>
	</ul>
</div>
</div>