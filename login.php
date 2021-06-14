<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8"/> -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="./css/login.css">
    <title>Login</title>
    <script>
        var attempt = 3;
        function validate(){
            var username = document.myform.email.value;
            var password = document.myform.password.value;
            if ( username == "adminbsabdr@gmail.com" && password == "bsabdr"){
                return true;
            }
            else{
                attempt --;
                alert("You have left "+attempt+" attempt;");
                if( attempt == 0){
                    document.myform.email.disabled = true;
                    document.myform.password.disabled = true;
                    document.getElementById("submit").disabled = true;
                    return false;
                }
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Welcome!</h1>
        <form action="/table.html" method="post" onsubmit="return validate()" name="myform">
            <input id="email" type="email" name="email" placeholder="Enter your email address">
            <input id="password" type="password" name="password" placeholder="Enter your password">
            <button type="submit" id="submit" onclick="validate()">Login</button>
        </form>
    </div>

</body>
</html>
