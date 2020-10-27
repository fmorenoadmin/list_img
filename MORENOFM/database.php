<?php
	/**
	 * 
	 */
	class database
	{
		function conect01(){
			$con1 = mysqli_connect('localhost','root','');
			mysqli_select_db($con1,'filtrar');
			return($con1);
		}
	}