<html>
    <head>
        <title>Online voting system - Registratrion</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
        $(document).ready(function() {
        $('#mobile').on('keypress', function(e) {
        var $this = $(this);
        var regex = new RegExp("^[0-9\b]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        // for 10 digit number only
        if ($this.val().length > 9) {
        e.preventDefault();
        return false;
        }
        // if (e.charCode < 54 && e.charCode > 47) {
        // if ($this.val().length == 0) {
        // e.preventDefault();
        // return false;
        // } else {
        // return true;
        // }
        // }
        if (regex.test(str)) {
        return true;
        }
        e.preventDefault();
        return false;
        });
        });
        </script>
        <!-- <script>
        $(document).ready(function () { 
        $("input[name=mob]").attr("maxlength", "10"); 
        $('#mobile').keypress(function (e) { 
        var charCode = (e.which) ? e.which : event.keyCode
        if (String.fromCharCode(charCode).match(/[^0-9]/g)) 
        return false;         
        });    
        }); 


        </script> -->
    </head>
    <body>
        <center>
            <div id="headerSection">
            <h1>Online Voting System</h1>  
            </div>
            <hr>

            <h2>Registration</h2>
                <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Name" onblur="$(this).val($(this).val().trim());" required>&nbsp
                    <input type="number" name="mob" placeholder="Mobile" id="mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Password" required>&nbsp
                    <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    <input style="width: 31%" type="text" name="add" placeholder="Address" onblur="$(this).val($(this).val().trim());" required><br><br>
                    <div id="upload" style="width: 30%">
                        Upload image: <input type="file" id="profile" name="image" required>
                    </div><br>
                    <div id="upload" style="width: 30%">
                        Select your role:
                        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select><br>                   
                    </div><br>
                    <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
                    Already user? <a href="../">Login here</a>
                </form>
            </center>
    </body>
</html>