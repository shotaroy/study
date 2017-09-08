<?php
     $itemname=$_POST['a'];
	 $price=$_POST['b'];
	 $type1=$_POST['c'];
	 
	 $ig=$_FILES['d'];
	 $name = $ig['name'];
	 $type = $ig['type'];
     $size = $ig['size'];
	 $tmp_name = $ig['tmp_name'];
	
	if($name!="")
	{	
         if($type=="image/jpg" || $type=="image/jpeg" || $type=="image/png" || $type=="image/gif" )
		 {
			 if($size<=17000000000)
			 {
				$image = time()."_".$name;
				$path="img/".$image;
				$save=move_uploaded_file($tmp_name,$path);
                if($save)
				{
					echo "uploaded success ";
				}
				else
				{
					echo "not uploaded";
				}
			}
			 
	
			 else
			 {
				 echo "image size is long";
			 }
			 

		 }
		 else
		 {
			 echo "image type is wrong";
		 }
		 
	}
	else
	{
         echo "selet an image";
		
	}
	
	 
	 //テキストボックスに書いた値をゲットする//
	 $server="localhost";
	 $username="root";
	 $password1="";
	 $conn=mysqli_connect($server,$username,$password1); 
		$ab = mysqli_select_db($conn,"misaohp");
	 if($ab){
		 echo "db working";
	 }
	 else{
		 echo "not working";
	 }
	 
	 $ab="Insert into item values('','','".$itemname."','".$price."','".$type1."','".$image."','".$path."')";
	 var_dump($ab);//テキストボックスに書いた値がデーターベースに書き込まれる//
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