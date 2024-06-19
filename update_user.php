<html>
    <head>
        <title>user account</title>
        <link rel="stylesheet" type="text/css" href="Assets/css/user.css">
        <script>
            function ok(){
                alert("success");
            }
            </script>
    </head>
    <body>
        <?php
$con=mysqli_connect('localhost','root','','bank');
$sql="select * from details ";
$res=mysqli_query($con,$sql);
while($r=mysqli_fetch_array($res))
if (!is_null($r)) { 
{ ?>

<?php
$con = mysqli_connect('localhost', 'root', '', 'bank');


$data = json_decode(file_get_contents("php://input"), true);


$name = $data['name'];
$accountNumber = $data['accountnumber'];
$branch = $data['branch'];
$ifsc = $data['ifsc'];
$accountType = $data['accountType'];
$banNumber = $data['banNumber']; 

$sql = "UPDATE details SET  name='$name', branch='$branch', ifsc='$ifsc', actype='$accountType', banno='$banNumber' WHERE ac='$accountNumber'";
if (mysqli_query($con, $sql)) {
    echo "Data updated successfully";
} else {
    echo "Error updating data: " . mysqli_error($con);
} 

mysqli_close($con);
?>


        
        <form id="user">
            
            <h2> User Details</h2>
            <input type="text" name="name" id="uname" placeholder="Name"  value="<?php echo isset($r['name']) ? $r['name'] : ''; ?>">
            <input type="text" name="ac" id="account-number" placeholder="Account Number" value="<?php echo isset($r['ac']) ? $r['ac'] : ''; ?>">
            <input type="text" name="branch" id="branchname" placeholder="Branch" value="<?php echo isset($r['branch']) ? $r['branch'] : ''; ?>">
            <input type="text" name="ifsc" id="ifscno" placeholder="IFSC No" value="<?php echo isset($r['ifsc']) ? $r['ifsc'] : ''; ?>">
            <input type="text" name="actype" id="account-type" placeholder="Account type" value="<?php echo isset($r['actype']) ? $r['actype'] : ''; ?>">
            <input type="text" name="banno" id="ban-number" placeholder="BAN Number" value="<?php echo isset($r['banno']) ? $r['banno'] : ''; ?>">
            <button class="btn" id="but" onclick="ok()">Save</button> 
            

            
          
          
    <!-- Your form inputs -->
    <button type="button" class="bttn" onclick="updateData()">Update</button>
</form>
<?php
}
}?>
<script>
    function updateData() {
        var name = document.getElementById('uname').value;
        var accountNumber = document.getElementById('account-number').value;
        var branch = document.getElementById('branchname').value;
        var ifsc = document.getElementById('ifscno').value;
        var accountType = document.getElementById('account-type').value;
        var banNumber = document.getElementById('ban-number').value;

        var data = {
            name: uname,
            accountNumber: accountNumber,
            branch: branch,
            ifsc: ifsc,
            accountType: accountType,
            banNumber: banNumber
        };

        // Sending data to the server using AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'update.php', true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.onload = function() {
            if (xhr.status === 200) {
                alert('Update successful');
            } else {
                alert('Error updating data');
            }
        };
        xhr.send(JSON.stringify(data));
    }
</script>

    </body>
</html>