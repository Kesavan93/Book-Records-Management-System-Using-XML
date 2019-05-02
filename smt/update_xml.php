<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>Bookstore Management</title>
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />

</head>
<body>

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>KB-BOOKSTORE</span></h1>
		</div>

		<div id="preamble">
		
		<?php
		
		
		$xml = simplexml_load_file('books.xml');
		if (isset($_POST['update']))
		{
			$id = $_POST['isbn'];
			$booktitle = $_POST['bookti'];
			$author = $_POST['authors'];
			$qty = $_POST['qty'];
			$price = $_POST['price'];
				$i=0;

				foreach($xml->children() as $book)
				{
					$isbn = $book->ISBN;
					
					if($isbn == $id)
					{
						$book->BookTitle = $booktitle;
						$book->Authors = $author;
						$book->Qty = $qty;
						$book->Price = $price;
					}
					$i = $i + 1;
				}
				file_put_contents("books.xml",$xml->asXML());
				
				echo '<b>MODIFIED SUCCESSFULLY<b>';
		}
		
		?>
		
					<form method="POST">
					<table>
					<tr>
					<td>ISBN:</td>
					<td><input type="text" name="isbn" value=""></td>
					</tr>

					
					
					<tr>
					<td>BOOK TITLE:</td>
					<td><input type="text" name="bookti" value=""></td>
					</tr>

					<tr>
					<td>AUTHORS:</td>
					<td><input type="text" name="authors" value=""></td>
					</tr>					

					
					<tr>
					<td>QTY BALANCE:</td>
					<td><input type="text" name="qty" value=""></td>
					</tr>
					
					
					<tr>
					<td>PRICE:</td>
					<td><input type="text" name="price" value=""></td>
					</tr>
					</table>
					
					<input type="submit" name="update" value="MODIFY">

					
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