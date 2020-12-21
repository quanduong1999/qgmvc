<?php
  	include("dbConnect.php");
	$cmd = $_REQUEST['cmd']??'';
  
  switch($cmd){
	  
	 default:
	   
		$ln = $_REQUEST['ln']??'';	
		if(isset($ln)){	
			//update
			$sql = "UPDATE selected_lang SET ln='".$ln."'";
			$result = $conn->query($sql);
		}
		
		$sql = "SELECT * from selected_lang";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			$arr = array();
			$i = 0;
			while ($data = mysqli_fetch_assoc($result)) {
				while (list ($key, $value) = each($data))
					$arr[$i][$key] = $value;
				$i ++;
			}
		}
		$ln = $arr[0]['ln'];
	 
		$sql = "SELECT * from content";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			$arr = array();
			$i = 0;
			while ($data = mysqli_fetch_assoc($result)) {
				while (list ($key, $value) = each($data))
					$arr[$i][$key] = $value;
				$i ++;
			}
		}
	    // include("website/views/shared/header.php");  
  }

?>

