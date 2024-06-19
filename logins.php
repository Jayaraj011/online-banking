<html>
    <head>
        <title>bank account?</title>
        <link rel="stylesheet" type="text/css" href="Assets/css/log.css">
        <script>
            function account()
            {
                alert("Your bank account is create")
            }
          
        </script>
        
        <script src="https://smtpjs.com/v3/smtp.js"> </script>
    </head>

    <body>
    <?php
$con=mysqli_connect('localhost','root','','bank');
$sql="select * from login";
$res=mysqli_query($con,$sql);
        ?>
    
     <div class="form" action="verifyotp">
        <h1 class="head">LOGIN</h1>
         <input type="number" name="phone" id="accno" placeholder="mobileno"  require> 
         <div class="otpverify">
           <input type="password"name="otp" id="phone" placeholder="Enter Your otp"  require>  
           <button class="btn" onclick="sendOTP()">otp</button> 
        </div> 
       
         <a href="index.php"> <button class="btn" id="otp"  onclick="verifyOTP()">LOGIN</button></a>
        </div>

   <script>
         function sendOTP() {
    var phoneNumber = document.getElementById("accno").value;
    // Send AJAX request to backend to send OTP to the provided phone number
    // For demonstration purposes, alert the OTP
    var otp = Math.floor(1000 + Math.random() * 9000); // Generate a random OTP
    alert("OTP Sent to " + phoneNumber + ": " + otp);
}

function verifyOTP() {
    var enteredOTP = document.getElementById("phone").value;
    
    alert("OTP Verified Successfully");
}

       
    
    </script>
    </body>
</html>
