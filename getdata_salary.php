
<!--this file is for the cdpap from get data-->

<?php

if(isset($_POST['submit'])){
$filepath = realpath(dirname(__FILE__));
require_once($filepath . "/db.php");
    
$month=$_POST['month'];
$amount=$_POST['salary'];
$name=$_POST['name'];
$account=$_POST['bank'];
$nid=$_POST['NID'];
$tin=$_POST['TIN'];
$ra=$_POST['ra'];
$ta=$_POST['td'];
$date=$_POST['date'];
$sign=$_POST['data_mon_1'];

 
// echo($month);    
// echo '<br>';  
// echo($amount);    
// echo '<br>'; 
// echo($name);    
// echo '<br>';
// echo($account);    
// echo '<br>';  
// echo($nid);    
// echo '<br>';
// echo($tin);    
// echo '<br>';  
// echo($ra);    
// echo '<br>';
// echo($ta);    
// echo '<br>';
// echo($date);    
// echo '<br>';
// echo($sign);    
// echo '<br>';



$rand1=rand();
$rand1_str1=(string)$rand1;
$rand2=rand(10000,1000001);
$rand2_str2=(string)$rand2;
$rand_result=$rand1_str1.$rand2_str2;


$result=mysqli_query($conn,"INSERT into salary(month,amount,name,account,nid,tin,ra,td,date,sign,random) VALUES ('$month','$amount','$name','$account','$nid','$tin','$ra','$ta','$date','$sign','$rand_result')");

if($result){
    
$to='farhan.hossain.shakal@candthomecare.com';
$subject="Acknowledgement of Salary Receipt Form of ".$name;
$message="Click the link below to view  
http://candthomecare.us/salary/view_index.php?rand=$rand_result";
$headers = "From: candt@techdepartment.com" . "\r\n" .
"CC: farhan.hossain.shakal@candthomecare.com";
 if(mail($to,$subject,$message,$headers)){
     
 ?><script>
  alert("Thank you for submitting")
  </script>  
<?php 
   
}
else{
   ?><script>
  alert("please try again")
  </script>  
<?php 
}
    
    
}
else{
    
    
    ?>
    <script>
  alert("please try again")
  </script> 
<?php    
}

}



?>