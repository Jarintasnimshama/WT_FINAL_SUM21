<?php
require_once 'DBC.php';

function GetDepartments()
{
	$result=array();
	$result = null;
	try
	{
		$query= "SELECT * FROM `departments`;";
	
		$result=get($query);
		
		if($result != null)
		{
			return $result;
		}
		
		else
		{
			return $result;
		}
	}
	
	catch(Exception $e)
	{
		throw $e->getMessage();
		return $result;
	}
}
?>