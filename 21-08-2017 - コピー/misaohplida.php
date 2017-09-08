<?php
     $itemname=$_GET['itname'];
	 $price=$_GET['p'];
	 $suryou=$_GET['q'];
	 $subtotal=$_GET['stotal'];
	 $userid=$_GET['userid'];
	 
	 
$server="localhost";
	 $username="root";
	 $password1="";
	 $conn=mysqli_connect($server,$username,$password1); 
		$ab = mysqli_select_db($conn,"misaohp");
	 
	 $ab="Insert into subtotall values('','".$userid."','".$itemname."','".$price."','".$suryou."','".$subtotal."')";
	 $ef = mysqli_query($conn,$ab);//実行ボタンみたいなもの//
	 
	 if($ef)
	     {   
	         echo "data inserted";
		 }
	 else
         {
	         echo "data not inserted";
	     }
?>