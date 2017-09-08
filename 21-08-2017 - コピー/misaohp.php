<?php
include "header.php";
?>
<?php		 
             echo"<div id='two'>　　　　　　                                   　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
		     <img src='mv_1.jpg' >
             </div>";
?>		 
<?php
					 $server="localhost";
					 $username="root";
					 $password="";
					 $conn=mysqli_connect($server,$username,$password); 
					 
					 $sele = mysqli_select_db($conn, "misaohp");
					 
					 
					 $ab = "select * from itemm";
					 $ef = mysqli_query($conn,$ab);
					 $row=mysqli_num_rows($ef);
						 if($row>0)
						 {
							 echo'<div id="three">                         
		                                 <ul>';                               //divで箱を作っている//
							 while($data=mysqli_fetch_array($ef))
							 {
                                 
								 echo '<li class="brandlist" id="'.$data["id"].'">'.$data['item2'].'</li>';  //brandlist header.で使う jqueryではid=#になるがclassでは.brandlistになる。//    
					         }
							 echo '</ul></div>';
							 
						 }
					
				?>
		 <div id="four">
			 <div id="av">	
			 <?php
					 $server="localhost";
					 $username="root";
					 $password="";
					 $conn=mysqli_connect($server,$username,$password); 
					 
					 $sele = mysqli_select_db($conn, "misaohp");
					 
					 
					 $ab = "select * from item";
					 $ef = mysqli_query($conn,$ab);
					 $row=mysqli_num_rows($ef);
						 if($row>0)
						 {
							 while($data=mysqli_fetch_array($ef))
							 {
                                  echo '<div id="b1">
												<a href="misaohpli.php?pid='.$data['id'].' ">
												<img src='.$data['path'].'>
												</a> 
												<p>'.$data['itemname'].'</p>
												<p>₨ '.$data['price'].'&nbsp &nbsp &nbsp &nbsp &nbsp  <span>#'.$data['type'].'</span> </p>
											</div>';
								 }
							
						 }
						
				?>
				
			</div>
         </div>


     include "footer.php";
?>
		 