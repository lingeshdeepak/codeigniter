<?php
	$attributes=array(
		'class'=>'testform',
		'method'=>'post');
	echo form_open('posts/login',$attributes);
	$startDiv='<div class="form-group">';
	$endDiv='</div>';
	echo form_fieldset($startDiv);
	echo form_label('Name : ','username');
	$text=array(
		'class'=>'testName form-control',
		'name'=>'name',
		'width'=>'500px');
	echo form_input($text);
	echo form_error('name', '<div class="error">', '</div>');
	echo form_label('Password : ','password');
	$password=array(
		'name'=>'userpassword',
		'class'=>'testPassword form-control');
	echo form_password($password);
	echo form_error('userpassword', '<div class="error">', '</div>');
	$submit=array(
		'name'=>'formSubmit',
		'value'=>'Submit',
		'class'=>'btn btn-success');
	echo form_submit($submit);
	echo form_fieldset_close($endDiv);
	if(isset($user))
	{ 
		echo heading('Name is : '.$user['name'], 1);
		echo heading('Password is : '.$user['password'], 1);
	}
?>