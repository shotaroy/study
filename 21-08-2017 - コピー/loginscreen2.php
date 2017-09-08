<?php
     session_start();                                                      //セッションをスタート。このコードを始めに付ける事で、loginが可能になる//
	 $Username=$_POST['a'];
	 $Password=$_POST['b'];
	 
	 $server="localhost";                                                  //サーバーの選択をしている//
	 $username1="root";
	 $password1="";
	 $conn=mysqli_connect($server,$username1,$password1); 
	 $ab = mysqli_select_db($conn,"misaohp");                           //データーベースの選択//
	 $ab="Select * from login where UserName='".$Username."' and Password='".$Password."'"; //データーベースの中にある、EmailとPasswordを抽出している//
	 $ef = mysqli_query($conn,$ab);                                        //実行ボタンみたいなもの//
     $row= mysqli_num_rows($ef);                                           //tableに行が存在している事を確認//
	     if($row>0)
		 {
			 $data = mysqli_fetch_array($ef);
			 
			 $_SESSION['user']=$data['UserName'];
			 $_SESSION['userid']=$data['id'];
			 // echo $_SESSION['user'];
			 header("location:misaohp.php");               //入力したEmailとPasswordがデーターベースに登録されているデータの中にあったのでyasusite.phpに飛ぶ//
			 
		 }
		 
		 else
		 {
		     // header("location:loginscreen.php");        //入力したEmailとPasswordがデーターベースに登録されているデータの中に無かったのでyasusite-login.phpに飛ぶ//
			echo "wrong";
		 }
	 
	 ?>