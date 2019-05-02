<!DOCTYPE HTML>
<html>
<head>

<title>Kesavan & Bavitaran</title>
<meta http-equiv="Content-Type" content="text/html; charset-iso-8859-1">
</head>
<body>



</body>
</html>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>Bookstore Management</title>
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
<style rel="stylesheet" type="text/css">

.table-striped>tbody>tr:nth-child(odd)>td,
 
.table-striped>tbody>tr:nth-child(odd)>th {
 
background-color: #C49F0F;
 
}

</style>

</head>
<body>

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>KB-BOOKSTORE</span></h1>
		</div>

		<div id="preamble">
		
<?php

	$data = simplexml_load_file('books.xml');

		if (isset($_POST['remove']))
		{
			$id = $_POST['isbn'];
			
			for($i = 0, $length = count($data->book); $i < $length; $i++)
			{
				if($data->book[$i]->ISBN == $id)
				{
					unset($data->book[$i]);
					break;
				}
			}
			file_put_contents('books.xml', $data->saveXML());	
				
			echo '<b>REMOVED SUCCESSFULLY<b>';
		}


?>


			<form method="POST">
				<table>
					
					<tr>
					<td>ISBN:</td>
					<td><input type="text" name="isbn" value=""></td>
					</tr>

				</table>
					
					<input type="submit" name="remove" value="DELETE">

					
			</form>
		
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			
		</div>

		<div id="participation">
			
		</div>

		<div id="benefits">
			
		</div>
		<div id="footer">
Copyright © 2019 KB Bookstore

<br>
		</div>

	</div>

	
	<div id="linkList">
			<div id="lselect">
				<ul>
					<li><a href="index.php" >Home</a></li>
					<li><a href="read_xml.php" >Book Record [View]</a></li>
					
					<li><a  href="insert_xml.php" >Add New Record [ADD]</a></li>
					
					<li><a  href="update_xml.php" >Update Record [Update]</a></li>
					
					<li><a  href="delete_xml.php" >Delete Record [Delete]</a></li>
				</ul>
			</div>

	</div>


</div>
</body>
</html>
