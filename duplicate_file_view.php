<?php
session_start();
include_once 'conct.php';

?>
<?php

include_once 'top.php';
?>
   <div class="clearfix" style="margin-bottom:5px;"> </div>

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
#img-wrapper{margin-top:50px;}
.fram{width:140px; height:100px; display:inline-block; }
.fram > img{width: 100%; height:100%}
</style>
</head>

<!--
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!--link  rel="stylesheet"  type="text/css"  href="css/style.css">
	
	<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
  
	   <!--script src="jQuery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--script src="js/bootstrap.min.js"></script-->  
	

<body>

<div class="container theme-showcase" role="main">
 <div class ="row">
 
 <div class='col-sm-1'  >
		
		
		</div>
 
 <div class="col-md-9">
 <div class="clearfix" style="margin-bottom:33px;"> </div>

<h4 style="color:red;"> Do you want to Upload any file. Please <a href="universal_user_login_form.php">Click Here</a></h4>
<div>
<?php
if (isset($_GET["error"])){
	echo $_GET["error"];
	
}
?>


<div id="img-wrapper">
<?php 


//include_once 'topic_na.php';
//$ss=$row['topic_name'].

//$ss = $_REQUEST['topic_name'];

$ss = $_SESSION['topic_nam'] ;
//echo "What is this".$ss;

$sql="select *
		from files
		where topic_name = '$ss' ";


  $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)> 0){
	
	  while($data=mysqli_fetch_array($result)){
	
		  echo "<div>";
		 ?>
		 <?php
		 echo"<a href='for_file_download.php?name=".$data["name"]."'> "; echo $data["name"].""; echo"</a>" ;
		  echo "</div>";
		    echo " ";
			echo"<div class='clearfix' style='margin-bottom:11px;'>"; echo" </div>";
		  }
		}
?>
</div>
</div>
</div>
</div>
</div>

</body>


  <div class="clearfix" style="margin-bottom:25px;"> </div>


<?php
include_once 'bottom.php';
?>

