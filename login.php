<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Account Login</title>
    <link rel="stylesheet" type="text/css" href="Assets/css/log.css">
    <script src="https://smtpjs.com/v3/smtp.js"></script>
</head>
<body>
    <div class="form">
        <h1 class="head">LOGIN</h1>
        <form action="login.php" method="post">
            <input type="number" name="phone" id="accno" placeholder="Mobile Number" required>
            <div class="otpverify">
                <input type="password" name="otp" id="otp" placeholder="Enter Your OTP" required>
                <button type="button" class="btn" onclick="sendOTP()">Send OTP</button>
            </div>
            <a href="index.php"> <button type="submit" class="btn" id="loginBtn">LOGIN</button></a>
        
        </form>
    </div>

    <script>
        function sendOTP() {
            var phoneNumber = document.getElementById("accno").value;
            var otp = Math.floor(1000 + Math.random() * 9000); 
            alert("OTP Sent to " + phoneNumber + ": " + otp);
        }

        document.getElementById("loginBtn").addEventListener("click", function(event) {
            event.preventDefault(); // Prevent form submission for demonstration
            var enteredOTP = document.getElementById("otp").value;
            
            alert("OTP Verified Successfully");
            
        });
    </script>
</body>
</html>
