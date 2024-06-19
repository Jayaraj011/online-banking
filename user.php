<html>
    <head>
        <title>user account</title>
        <link rel="stylesheet" type="text/css" href="Assets/css/user.css">
        <script>
            function ok(){
                alert("success");
            }
            </script>
            <style>
                .update{
  background-color:lightseagreen;
  padding:10px ;
  outline: none;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  width: 50%;
  margin-left: 12rem;
  float:left;
  margin-bottom:15rem;
                }
                </style>
    </head>
    <body>
        <?php
$con=mysqli_connect('localhost','root','','bank');
$sql="select * from details ";
$res=mysqli_query($con,$sql);
while($r=mysqli_fetch_array($res))
{ ?>



        
        <form id="user">
            
            <h2> Balance Details</h2>
            <input type="text" id="name" placeholder="Name" value="<?php echo $r['name']; ?>">
            <input type="text" id="account-number" placeholder="Account Number" value="<?php echo $r['ac']; ?>">
            <input type="text" id="balance" placeholder="Branch" value="<?php echo $r['branch']; ?>">
            <input type="text" id="balance" placeholder="IFSC No" value="<?php echo $r['ifsc']; ?>"  >
            <input type="text" id="balance" placeholder="Account type" value="<?php echo $r['actype']; ?>" >
            <input type="text" id="balance" placeholder="BAN Number" value="<?php echo $r['banno']; ?>" >
            <button class="btn" id="but" onclick="ok()">Save</button> 
            <button class="btn" id="but" onlilck="">update</button>
          </form><?php
}?>
    </body>
</html>