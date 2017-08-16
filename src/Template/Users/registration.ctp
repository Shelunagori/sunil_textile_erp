<?php
/**
 * @Author: Kounty
 */

$this->set('title', 'Registration | kounty');
?>
<!-- BEGIN LOGIN FORM -->
 <?= $this->Form->create($user) ?>
	<?= $this->Flash->render() ?>
	<h3 class="form-title">Register to Kounty</h3>
	<div class="alert alert-danger display-hide">
		<button class="close" data-close="alert"></button>
		<span>
		Enter any username and password. </span>
	</div>
	<div class="form-group">
		<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
		<label class="control-label visible-ie8 visible-ie9">Name</label>
		<div class="input-icon">
			<?php  echo $this->Form->control('name',['label'=>false,'class'=>'form-control placeholder-no-fix','autocomplete'=>'off','placeholder'=>'Name','autocomplete'=>'off']); ?>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label visible-ie8 visible-ie9">Mobile</label>
		<div class="input-icon">
			<?php  echo $this->Form->control('mobile',['label'=>false,'class'=>'form-control placeholder-no-fix','autocomplete'=>'off','placeholder'=>'Mobile','autocomplete'=>'off']); ?>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label visible-ie8 visible-ie9">Email</label>
		<div class="input-icon">
			<?php  echo $this->Form->control('email',['label'=>false,'class'=>'form-control placeholder-no-fix','autocomplete'=>'off','placeholder'=>'Email','autocomplete'=>'off']); ?>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label visible-ie8 visible-ie9">Password</label>
		<div class="input-icon">
			<?php  echo $this->Form->control('password',['label'=>false,'class'=>'form-control placeholder-no-fix','autocomplete'=>'off','placeholder'=>'Password','autocomplete'=>'off']); ?>
		</div>
	</div>
	<div class="form-actions">
		<?= $this->Form->button(__('SIGN'),['class'=>'btn green-haze btn-block']) ?>
	</div>
<?= $this->Form->end() ?>
<!-- END LOGIN FORM -->
