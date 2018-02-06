<?php if ($this->session->userdata('logged_in')): ?>

<h2>Logout</h2>
<?php echo form_open('users/logout'); ?>

<p>
<?php if($this->session->userdata('username')): ?>


<?php echo "kamu login sebagai " . $this->session->userdata('username'); ?>


<?php endif; ?>

</p>


<p>
<?php if($this->session->userdata('username')): ?>



<?php echo "user id kamu adalah " . $this->session->
userdata('user_id'); ?>


<?php endif; ?>

</p>



<?php else: ?>

<h2>Login Form</h2>


<?php $attributes = array('id' => 'login_form','class' => 'form-horizontal' ); ?>


<?php if ($this->session->flashdata('errors')): ?>


<?php echo $this->session->flashdata('errors'); ?>

<?php endif; ?>

<?php echo form_open('users/login',$attributes); ?>

<div class="form-group">
	
<?php echo form_label('Username'); ?>

<?php 

$data = array(

'class' => 'form-control',
'name' => 'username',
'placeholder' => 'Enter Username'

)


?>

<?php echo form_input($data); ?>


</div>

<div class="form-group">
	
<?php echo form_label('Password'); ?>

<?php 

$data = array(

'class' => 'form-control',
'name' => 'password',
'placeholder' => 'Enter Password'

)


?>

<?php echo form_password($data); ?>


</div>


<div class="form-group">
	
<?php echo form_label('Confirm Password'); ?>

<?php 

$data = array(

'class' => 'form-control',
'name' => 'confirm_password',
'placeholder' => 'Enter Confirm Password'

)


?>

<?php echo form_password($data); ?>


</div>


<div class="form-group">


<?php 

$data = array(

'class' => 'btn btn-primary',
'name' => 'submit',
'value' => 'Login'

)


?>

<?php echo form_submit($data); ?>


</div>


<?php echo form_close(); ?>

<?php endif; ?>