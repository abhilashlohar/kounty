<?php
/**
 * @Author: Kounty
 */

$this->set('title', 'Login | kounty');
?>
<!-- BEGIN LOGIN FORM -->
<?= $this->Form->create($user,['class'=>'login-form']) ?>
	<?= $this->Flash->render() ?>
	<h3 class="form-title">Login to your account</h3>
	<div class="alert alert-danger display-hide">
		<button class="close" data-close="alert"></button>
		<span>
		Enter any username and password. </span>
	</div>
	<div class="form-group">
		<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
		<label class="control-label visible-ie8 visible-ie9">Username</label>
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
		<label class="checkbox">
		<input type="checkbox" name="remember" value="1"/> Remember me </label>
		<?= $this->Form->button(__('Login'),['class'=>'btn green-haze pull-right']) ?>
	</div>
	<div class="forget-password">
		<h4>Forgot your password ?</h4>
		<p>
			 no worries, click <a href="javascript:;" id="forget-password">
			here </a>
			to reset your password.
		</p>
	</div>
	<div class="create-account">
		<p>
			 Don't have an account yet ?&nbsp; <a href="javascript:;" id="register-btn">
			Create an account </a>
		</p>
	</div>
<?= $this->Form->end() ?>
<!-- END LOGIN FORM -->