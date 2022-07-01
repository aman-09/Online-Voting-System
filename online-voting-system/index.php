<html>
    <head>
        <title>Online voting system - Home</title>
        <link rel="stylesheet" href="css/stylesheet.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

     <!--validation for mobile/text-->
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
                                                                          // validation only for 6/7/8/9
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

        $(document).ready(function () {   
        $('#mobile').keypress(function (e) {    
        var charCode = (e.which) ? e.which : event.keyCode    
        if (String.fromCharCode(charCode).match(/[^0-9]/g))    
         return false;                        
        });    
        }); 

        </script> 
    </head>
    <body>
        
            <center>
            <div id="headerSection">
            <h1>Online Voting System</h1>  
            </div>
            <hr>

            <div id="loginSection">
                <h2>Login</h2>
                <form action="api/login.php" method="POST">
                    <input type="number" name="mob" placeholder="Enter mobile" id="mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>
                    <select name="role" style="width: 15%; border: 2px solid black">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select><br><br>                  
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                    New user? <a href="app/register.php">Register here</a>
                </form>
            </div>

            </center> 
    </body>
</html>