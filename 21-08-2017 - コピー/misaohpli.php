<?php
include "header.php";
?>
		 
		 <div id="six">
		 <?php
			$id = $_GET['pid'];
			$server="localhost";
	        $username="root";
	        $password="";
	        $conn=mysqli_connect($server,$username,$password); 
	 
	        $sele = mysqli_select_db($conn, "misaohp");
	 
	 
	        $ab = "select * from item where id='".$id."'";
	        $ef = mysqli_query($conn,$ab);
	        $row=mysqli_num_rows($ef);
	     if($row>0)
		 {
			 while($data=mysqli_fetch_array($ef))
			 {
			     echo'<div id="six1">
						 <img src='.$data['path'].'>
					 </div>';
				echo 
					'<div id="six2">
                     <p><span>'.$data['type'].'</span></p>  
				     <h2><span id="xyz">'.$data['itemname'].'</span></h2> 　 
					 <h4>₨ <span id="x">'.$data['price'].'</span> </h4>
					 <hr></hr>
					  Quantity:
					 <select name="suryou" id="y"> 
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
						 <option value="4">4</option>
                         <option value="5">5</option>
                         <option value="6">6</option>
						 <option value="7">7</option>
                         <option value="8">8</option>
                         <option value="9">9</option>
						 <option value="10">10</option>
                     </select>
					 <input type="hidden" id="userid" value="'.$_SESSION['userid'].'">
					  <h3>Sub total:-  <span id="z"></span></h3>
					 <br>
					 
					 <input class="abc" type="submit" value="Add to Cart ">
						
		     </div>';
			 }
			 
		 }
		 
		 else
		 {
		     echo"not data found ";
		 }
		 ?>
		     
			 
         </div>
		 
		 <div id="seven">
		     <h3>Recommended for you</h3>
		 </div>
	 </div>
		 <div id="eight">
		     <p>Copyright © MISAO Co.,ltd. All Rights Reserved.</p>
		 </div>
	
	</div>