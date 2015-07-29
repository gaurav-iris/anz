<div class="cocktails form">
<?php echo $this->Form->create('Cocktail'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cocktail'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('initials');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('city');
		echo $this->Form->input('country_id');
		echo $this->Form->input('bank_name');
		echo $this->Form->input('attending_cocktail');
		echo $this->Form->input('dietary_restrictions');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cocktail.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Cocktail.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cocktails'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
