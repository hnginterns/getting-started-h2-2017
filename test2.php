<?php 
 $conn = mysqli_connect('localhost', 'root', 'root', 'hnginternship');

 if(!$conn){
 	//echo "Error";
 }else{
 	//echo "Yasssssss";
 }

 $query = 'SELECT * FROM first_task';
 $query2 = mysqli_query($conn, $query);
 $query3 = mysqli_fetch_array($query2);
 if(!$query2){
 	//echo "Error2";
 }else{
 	//echo "Yasssssss2";
 }
 echo $query3["output"];
?>