<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base Form Student</title>
</head>
<body>
<form action="/CN-WEB/4forFun/Lab02/exp-1/baseForm2.php" method="post">
        Enter your information here
        <br>

        <label style="color: red; display: block;">
            Name
        </label>
        <input type="text" name="Name">
        <br>

        <label style="color: red; display: block;">
            Age
        </label>
        <input type="text" name="age">
        <br>

        <label style="color: red; display: block;">
            ID
        </label>
        <input type="text" name="id">
        <br>

        <label style="color: red; display: block;">
            Class
        </label>
        <input type="text" name="class">
        <br>
        
        <label style="color: red; display: block;">
            University
        </label>
        <input type="text" name="university">
        <br>

        <label style="color: red; display: block;">
            Your hobby: 
        </label>
        <ul>
            <li><input type="text" name="hobby1"></li>
             <br>
            <li><input type="text" name="hobby2"></li>
             <br>
            <li><input type="text" name="hobby3"></li>
             <br>
            <li><input type="text" name="hobby4"></li>
             <br>
            <li><input type="text" name="hobby5"></li>
             <br>
        </ul>
        <br>

        <input type="submit" value="Click to submit">
        <input type="reset" name="Restart">
    </form>
</body>
</html>