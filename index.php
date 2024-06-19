<html>
    <head>
        <title>online banking </title>
        
        <link rel="stylesheet" type="text/css" href="Assets/css/style.css">
        <style>
            *{
                margin:0;
                padding:0;
                box-shadow: none;
                text-decoration: none;
            }
            .navbar{
padding-left: 15px;
padding-right: 15px;
padding-top: 30px;
padding-bottom: 30px;
background:transparent;
font-family: 'Times New Roman';
            }
            .navdiv{
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            .logo{

            text-align: center;
            }
            .logo a{
                font-size: 30px;
                color:red;
                font-weight: 600;
                position: relative;
            }
            li{
list-style: none;
display: inline-block;
padding-left: 10px;
            }
            li a{
                font-size: 20px;
                color:wheat;
                font-family: monospace;
            }
        </style>
    </head>
    <body>
        <nav class="navbar">
            <div class="navdiv">
                <div class="logo">
                    <img src="Assets/images/glow.png" class="icon">
                    <a href="#" style="text-align:center;">DIGITAL BANK</a></div>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="logins.php">Logout</a></li>
                    
                </ul>
            </div>

        </nav>
     <div class="container">
        <a href="user.php"><img src="Assets/images/account.jpg" style="height: 100px; width: 150px;"></a></li>
        <div class="accinfo">
<h4 class="title">ACCOUNT</h4>
        </div>
        </div>
        <div class="container">
            <a href="balance.php"><img src="Assets/images/loan service.jpg" style="height: 100px; width: 150px;"></a></li>
            <div class="accinfo">
    <h4 class="title">BANK BALANCE</h4>
            </div>
            </div>
            <div class="container">
                <a href="loanservice.php"><img src="Assets/images/banking1.jpg" style="height: 100px; width: 150px;"></a></li>
                <div class="accinfo">
        <h4 class="title">LOAN SERVICE</h4>
                </div>
                </div>       
                <div class="container">
                    <a href="history.php"><img src="Assets/images/history.jpg" style="height: 100px; width: 150px;"></a></li>
                    <div class="accinfo">
            <h4 class="title">HISTORY</h4>
                    </div>
                    </div>   
         
    </div>   
        
       
        
    </body>
</html>

