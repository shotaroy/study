<?php
$id = $_POST['id'];
$server="localhost";
	        $username="root";
	        $password="";
	        $conn=mysqli_connect($server,$username,$password); 
	 
	        $sele = mysqli_select_db($conn, "misaohp");
	 
	 
	        $ab = "select * from item where bid='".$id."'";
	        $ef = mysqli_query($conn,$ab);
	        $row=mysqli_num_rows($ef);
	     if($row>0)
		 {
			 while($data=mysqli_fetch_array($ef))
			 {
				 
								 echo '<div id="b1">
											<a href="misaohpli.php?pid='.$data['id'].'">
											<img src='.$data['path'].'>
											</a> 
											<p>'.$data['itemname'].'</p>
											<p>₨ '.$data['price'].'&nbsp &nbsp &nbsp &nbsp &nbsp  <span>#'.$data['type'].'</span> </p>
										</div>';
			 }
			 
		 }
		 
?>

<?php
$id = $_POST['id'];

$server="localhost";
	        $username="root";
	        $password="";
	        $conn=mysqli_connect($server,$username,$password); 
	 
	        $sele = mysqli_select_db($conn, "misaohp");
	 
	 
	        $ab = "select * from item where id1='".$id."'";
	        $ef = mysqli_query($conn,$ab);
	        $row=mysqli_num_rows($ef);
	     if($row>0)
		 {
			 while($data=mysqli_fetch_array($ef))
			 {
				 
								 echo '<div id="b1">
											<a href="misaohpli.php?id1='.$data['id'].'">
											<img src='.$data['path'].'>
											</a> 
											<p>'.$data['itemname'].'</p>
											<p>₨ '.$data['price'].'&nbsp &nbsp &nbsp &nbsp &nbsp  <span>#'.$data['type'].'</span> </p>
										</div>';
			 }
			 
		 }
		 
?>