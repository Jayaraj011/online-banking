
<html >
<head>

<title>Bank Balance Details</title>
<link rel="stylesheet" type="text/css" href="Assets/css/balance.css">
</head>
<body>

 <?php
$con=mysqli_connect('localhost','root','','bank');
$sql="select * from balance";
$res=mysqli_query($con,$sql);
while($r=mysqli_fetch_array($res))
{ 
?>

<center>
  <div class="form">
    <h1>Balance Details</h1>
    <?php  ?>
    
<div>
    <label class="head">NAME</label>
    <input type="text" id="name" placeholder="Name" value="<?php echo $r['name']; ?>">
</div><br>
<div>
    <label class="head1">ACCOUNT NUMBER</label>
    <input type="text" id="account-number" placeholder="Account Number" value="<?php echo $r['accno']; ?>">
</div><br>
<div>
    <label class="head2">YOUR BALANCE</label>
    <input type="text" id="balance" placeholder="Balance" value="<?php echo $r['balance']; ?>">
</div>
   <!-- <input type="submit" value="Save">-->
</center>
</div><?php
}?>

  

 