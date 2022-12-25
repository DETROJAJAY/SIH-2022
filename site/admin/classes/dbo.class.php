<?php
	
	class dbo
	{
		private $host = "localhost";
		private $user = "root";
		private $pass = "";
		private $db = "decorvilla";
		
		function dml($q)
		{
			$link = mysql_connect($this->host, $this->user, $this->pass) or die(mysql_error());
			mysql_select_db($this->db,$link)  or die(mysql_error());
			mysql_query($q,$link) or die(mysql_error());
			mysql_close($link);
		}
	
		function get($q)
		{
			$link = mysql_connect($this->host, $this->user, $this->pass) or die(mysql_error());
			mysql_select_db($this->db,$link)  or die(mysql_error());
			$res = mysql_query($q,$link) or die(mysql_error());
			mysql_close($link);
			return $res;
		}
	}
	
?>