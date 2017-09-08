<?php
	 $UserName=$_POST['a'];                                                                            //textboxに入力された値をyasuhp.phpから受け取る//
	 $Password=$_POST['b'];
	 $ConformPassword=$_POST['c'];
	 $MailAddress=$_POST['d'];
	 $Gender=$_POST['e'];
	 $DateofBirth=$_POST['f'];
	 
	 $ig=$_FILES['g'];                                                                             //imageをデーターべスに送っている//
	 $name = $ig['name'];
	 $type = $ig['type'];
     $size = $ig['size'];
	 $tmp_name = $ig['tmp_name'];
	
	if($name!="")                                                                                  //nameがnullでないか確認する//
	{	
         if($type=="image/jpg" || $type=="image/jpeg" || $type=="image/png" || $type=="image/gif" )//imgの保存形式の確認// 
		 {
			 if($size<=10000000)                                                                   //imgのサイズの確認//
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
	                                                                                        //imageをデーターベースに送らない場合はここまでのコードはいらない//
	 $server="localhost";                                                                    //サーバーの選択をしている//
	 $username1="root";
	 $password1="";
	 $conn=mysqli_connect($server,$username1,$password1); 
	 $ab = mysqli_select_db($conn,"misaohp");	 //データーベースの選択//
	 if($ab){
			echo "db working";
	 }
	 else{
		 echo "not working";
	 }
	 
	 $ab="Insert into login values('','".$UserName."','".$Password."','".$ConformPassword."','".$MailAddress."','".$Gender."','".$DateofBirth."','".$image."','".$path."')";
	                                                                      //テキストボックスに書いた値がデーターベースに書き込まれる//
	 $ef = mysqli_query($conn,$ab);                                                        //実行ボタンみたいなもの//
	 
	 if($ef)
	     {   
	         header("location:loginscreen.php");                                        //yasusite-loginページに飛ぶ//
		 }
	 else
         {
	         echo "data not inserted";
	     }	
	 
?>