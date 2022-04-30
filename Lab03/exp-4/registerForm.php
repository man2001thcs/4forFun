<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab03-Exp4</title>
</head>
<script>
    function validateForm() {
        var x = document.forms["registerForm"]["age"].value;
        if (x <= 0) {
            alert("Số tuổi phải lớn hơn 0");
            return false;
        }
    }
    function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>
<style>
        table {
            width: 100%;
            padding: 10px;
        }
        table td {
            width: 50%;
            padding-left: 10px;
            padding-right: 10px;
        }
        .infor {
            margin: 5px;
        }
        .center {
            text-align: center;
        }
        h3 {
            margin: 0.5rem 0.5rem 0.5rem 0;
        }
</style>
<body>
<form name="registerForm" action="action_registerForm.php" onsubmit="return validateForm()" method="post">
        <h3 class="center" > Register form </h3>
        <table>
            <td>
            <div class="infor" >
                Name: <input type="text" aria-label="Name" tabindex="0" name="name" required>
            </div>
            <div class="infor" onKeyPress="return isNumberKey(event)">
                Age:  <input type="text" name="age" required>
            </div>
            <div class="infor" >
                Username: <input type="text" name="username" required>
            </div>
            <div class="infor" >
                Password: <input type="text" name="password" required>
            </div>
            </td>
            <td>
            <div class="infor" >
                Email: <input type="text" name="email" >
            </div>
            <div class="infor" onKeyPress="return isNumberKey(event)">
                Telephone: <input type="text" name="telephone" >
            </div>
            </td>
        </table>

        <div class="center">
            <input type="submit" value="Click to submit">  
        </div>
    </form>
</body>
</html>