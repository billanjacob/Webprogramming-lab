<?php

$data = $_POST;
if (empty($data['username']) ||
    empty($data['password']) ||
    empty($data['email']) ||
    empty($data['pswdconfirm'])) 
	{
    
    die('Fill all fields');
	}

if ($data['password'] !== $data['pswdconfirm']) 
{
   die('Two passwords dont match');   
}
if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) 
{
  die( "Invalid email format");
}
?>