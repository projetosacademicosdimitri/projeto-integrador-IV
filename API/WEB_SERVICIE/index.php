<?php

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    // List entire collection or retrieve individual member
	echo $_SERVER['REQUEST_URI'];
	
    break;
  case 'PUT':       
    // Replace entire collection or member
    break;  
  case 'POST':      
    // Create new member
    break;
  case 'DELETE':    
    // Delete collection or member
    break;
}