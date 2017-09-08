<?php 
	session_start(); ?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="misao hp.css" >
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" >
  <script src="jquery.js"></script>
	 <script>
	 $(document).ready(function(){
		 $('#registerform').hide();
		 $('#loginform').hide();
	 $("#login").click(function(){
		$("#loginform").fadeIn(1000);
		});
	 $('body').dblclick(function(){
		 $("#loginform").fadeOut();
	 });
	 $("#register").click(function(){
		$("#registerform").fadeIn(1000);
		});
	 $('body').dblclick(function(){
		 $("#registerform").fadeOut();
	 });
	 	 $('.brandlist').click(function(){
				 var data = $(this).attr('id');
				 $.ajax({                                   //今の所はおまじない　PCなどのタグを作るのに成功したら、次にbrandを並べる//
					　url:'getProduct.php',
					 type:'post',
					 data:{id:data},
					 success:function(mydata){
						 $('#av').html(mydata);　　　　　　　　　　　　
					 }
				 });
				 
			 });
		　
				 
	 $('.abc').click(function(){
		 var itemname = $('#xyz').text();
		 var price = $('#x').text();
		 var quantity = $('#y').val();
		 var subtotal = $('#z').text();
		 var userid= $('#userid').val();
		 $.ajax({                                   //input ボックスを使わずに違うページに値を送る方法//
		 url:'misaohplida.php',
		 type:'GET',
		 data:{itname:itemname,p:price,q:quantity,stotal:subtotal,userid:userid},
		 success:function(data){
			 alert(data);
		 }
		  });
				 
			 });
	 $('#y').change(function(){
		var a = $('#y').val();
		var b = $('#x').text();
		var c = a*parseInt(b);
		$('#z').text(c);
		});
	 });
	 </script>
	 
	 <style>

		#loginform{
			position: fixed;
			background: white;
			left:33%;
			ng:20px;
			display:none
			width:80%;
			height:300px;
		}
		
		#c input{
	       width:350px;
	       height:30px;
	       border-radius:10px;
         }

        #d {
	        background-color:orange;
	     }

        #e {
	        background-color:green;
	     }

        #f{
	       background-color:blue;
		 }

		 #g {
	     background-color:lightorange;
	     }

		
		#registerform{
			position: fixed;
			background: white;
			left:30%;
			padding:20px;
			display:none;
		}
		#h input{
	        border-radius:10px;
        }

        #i {
	         width:500px;
	         height:30px;
	         background-color:orange;
           }

        #j {
	         width:500px;
	         height:30px;	
           }

        #k {
	         width:500px;
	         height:30px;
	         background-color:green;
           }

        #l {
	         width:500px;
             height:30px;
	         background-color:blue;
           }
		 #aa2 li{
			 display:inline;
		 }
	 </style>
	 
</head>
<body>
     <div id="Full">
	     <div id="one">
			<div id="one1">
				<ul>
				     <li class="glyphicon glyphicon-home"><br><a href ="misaohp.php">HOME</a></li>
					 <li class="glyphicon glyphicon-search"><br>ITEM</li>
				</ul>
			</div>
			<div id="one2">
			     <img src="logo2-2.png">
			</div>
			<div id="one3">
			<?php 
			if(isset($_SESSION['user'])){
				echo '<span>'.$_SESSION['user'].'</span>';
			}
			
			?>
			
				<ul>
				<?php
					if(isset($_SESSION['user'])){
						echo '<li class="glyphicon glyphicon-user" id="login"><a href="logout.php">LOGOUT</a></li>';
					}
					else{
						echo '<li class="glyphicon glyphicon-user" id="login"><a href="#">LOGIN</a></li>';
					}
				?>
					 <li class="glyphicon glyphicon-info-sign" id="register"><a href="#">REGISTER</a></li>
					 <li class="glyphicon glyphicon-shopping-cart">CART</li>
				</ul>
			     
			</div>
		 </div>
		 <div id="loginform" >
		     <form action="loginscreen2.php" method="POST">
             <center>
	             <div>
		             <table id="c">
		             <tr><td><div id="d"><p><center>LOGIN</center></p></div></td></tr>
			         <tr><td>User Name</td></tr>
                     <tr><td colspan="2"><input name="a"  type="text" placeholder="User Name" ></td></tr>
			         <tr><td>Password</td></tr>
			         <tr><td colspan="2"><input name="b"  type="password" placeholder="Password" ></td></tr>
			         <tr><td colspan="2"><input name="button" type="submit" value="login" id="e"></td></tr>
			         <tr><td><center>or</center></td></tr>
                     <tr><td colspan="2"><a href="https://www.facebook.com/"><input name="button" type="button" value="Facebook" id="f"></a></td></tr>
			         <tr><td><center>NOT member?</center></td></tr>
			         <tr><td colspan="2"><a href="register.php"><input name="button" type="button" value="Create your Account" id="g"></a></td></tr>
		             </table>
	             </div>
             </center>
             </form>
		 </div>
		 <div id="registerform" >
		        <form action="register2.php" method="POST" enctype="multipart/form-data">
                 <center>
	                 <div>
		             <table id="h">
		             <tr><td colspan="2"><div id="i"><p><center>REGISTER</center></p></div></td></tr>
			         <tr><td>User Name</td></tr>
			         <tr><td colspan="2"><input name="a"  type="text" placeholder="User Name" id="j" ></td></tr>
			         <tr><td>Password</td><td>Conform Password</td></tr>
			         <tr><td><input name="b"  type="password" placeholder="Password"></td><td><input name="c"  type="password" placeholder="Password Again"></td></tr>
			         <tr><td>Mail Address</td></tr>
			         <tr><td colspan="2"><input name="d" type="text" placeholder="Email" id="j"></td></tr>
                     <tr><td>Gender</td><td>Date of Birth</td></tr>
			         <tr><td><p><input type="radio" name="e"  value="male">male<input type="radio" name="e" value="female" checked>female</p></td><td><input name="f" type="text" placeholder="ex.1994/11/24"></td><td></tr>
			         <tr><td>image</td></tr>
			         <tr><td><input type="file" name="g"></td></tr>
			         <tr><td colspan="2"><center><input name="button" type="submit" value="Submit" id="k"></center></td></tr>
                     <tr><td colspan="2"><center>or</center></td></tr>
			         <tr><td colspan="2"><center><a href="https://www.facebook.com/"><input name="button" type="button" value="Facebook" id="l"></a></center></td></tr>
		             </table>
	                 </div>
                 </center>
                </form>
		 </div>
</body>
</html>