    <br />
    <br />
<div class="section">
<div class="words form">
<?php echo $this->Form->create('Word');?>
	<fieldset>
 		<legend><?php __('Add Word'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Words', true), array('action' => 'index'));?></li>
	</ul>
</div>
</div>