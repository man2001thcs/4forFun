<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab03-Exp4</title>
</head>

<body>
<h1>This is your information</h1>
    <?php
        $name = $_POST["name"];
        $age = $_POST["age"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"]; 
        $telephone= $_POST["telephone"];
        
        print("<br> Hello, $name");
        print("<br> Your age is $age");
        print("<br> You username is $username");
        print("<br> Your password is $password");
        print("<br> Your Email is $email");
        print("<br> Your Telephone is $telephone");

    ?>
</body>
</html>