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

$xml2 = simplexml_load_file('books.xml');
echo "<table class='table-striped' border='2px'>";

echo "<tr>";  
echo "<th>ISBN</th>";    
echo "<th>Book Title</th>";     
echo "<th>Authors</th>";
echo "<th>Qty Balance</th>";
echo "<th>Price</th>";    
echo "</tr>";  

foreach($xml2->children() as $book)
{
	echo "<tr>";

	echo "<td>"; echo $book->ISBN; echo "</td>";
	
	echo "<td>"; echo $book->BookTitle; echo "</td>";
	
	echo "<td>"; echo $book->Authors; echo "</td>";
	
	echo "<td>"; echo $book->Qty; echo "</td>";
	
	echo "<td>"; echo $book->Price; echo "</td>";
	
	echo "</tr>";
	
}

echo "</table>";

?>



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