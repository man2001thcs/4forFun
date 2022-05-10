<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Business Registration</title>
    <style>
        .page-container {
            padding: 0.5rem;
        }
        .vertical-grid-container {
            display: grid;
            grid-template-columns: 35% 60%;
            grid-gap: 5%;
        }
        .horizontal-box-container {
            display: flex;
            flex-direction: column;
        }
        .right-align {
            display: flex;
            flex-direction: row;
        }
        .right-align div {
            margin-left: auto;
            margin: 0.25rem 2.875rem 0 auto;
        }
        .categories-container {
            display: flex;
            flex-direction: column;
            height: 230px;
            overflow-y: auto;
        }
        .item-category {
            cursor: pointer;
            padding: 0.25rem;
        }
        .form-input {
            align-items: center;
            display: grid;
            grid-template-columns: 15% 80%;
            padding: 0.25rem;
        }
        .form-input input {
            border: 1px solid black;
            border-radius: 0.25rem;
            font-size: 16px;
            padding: 0.25rem 0 0.25rem 0.25rem;
            width: 100%;
        }
        label {
            margin: 0;
        }
        p {
            margin: 0 0 0.75rem 0;
        }
        /* The container */
        .checkbox-container {
            display: block;
            position: relative;
            padding-left: 35px;
            margin: 10px 0;
            cursor: pointer;
            font-size: 16px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default checkbox */
        .checkbox-container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        /* Create a custom checkbox */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
        }

        /* On mouse-over, add a grey background color */
        .checkbox-container:hover input ~ .checkmark {
            background-color: #ccc;
        }

        /* When the checkbox is checked, add a blue background */
        .checkbox-container input:checked ~ .checkmark {
            background-color: #2196F3;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the checkmark when checked */
        .checkbox-container input:checked ~ .checkmark:after {
        display: block;
        }

        /* Style the checkmark/indicator */
        .checkbox-container .checkmark:after {
            left: 8px;
            top: 5px;
            width: 7px;
            height: 14px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }
    </style>
</head>
<body>
    <?php
        include_once("./navbar.php");
    ?>
    <div class="page-container">
        <h1>Business Registration</h1>
        <div class="horizontal-box-container">
            <?php
                $name = $address = $city = $telephone = $url = "";
                $categories = [0];
                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = test_input($_POST["business-name"]);
                    $address = test_input($_POST["business-address"]);
                    $city = test_input($_POST["business-city"]);
                    $telephone = test_input($_POST["business-telephone"]);
                    $url = test_input($_POST["business-url"]);
                    isset($_POST['business-category']) && $categories = $_POST["business-category"];
                }
            ?>
            <div class="vertical-grid-container">
                <p>Click on one, or control-click multiple categories<br>(if not, first option will be the default selection):</p>
                <p>Register your business:</p>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="vertical-grid-container">
                <?php
                    include("../../db/db.php");
                    $sqlQuery = "SELECT CategoryID, Title FROM Categories";
                    $result = $conn->query($sqlQuery);
                    $businessCategories = array();
                    echo "<div class=\"categories-container\">";
                    if (mysqli_num_rows($result) > 0){
                        $index = 0;
                        while($row = mysqli_fetch_assoc($result)){
                            array_push($businessCategories, $row["CategoryID"]);
                            echo    "<label class=\"checkbox-container\">".$row["Title"].
                                        "<input type=\"checkbox\" class=\"item-category\" name=\"business-category[]\" value=".$index.">
                                        <span class=\"checkmark\"></span>
                                    </label>";
                            $index++;
                        }
                    } else {
                        echo "Please add some categories before adding your businesses <a href=\"admin.php\"></a>";
                    }
                    echo "</div>";
                    mysqli_close($conn);
                ?>
                <div>
                    <div class="form-input">
                        <label for="business-name">Business Name:</label>
                        <input type="text" id="business-name" name="business-name" required>
                    </div>
                    <div class="form-input">
                        <label for="business-address">Address:</label>
                        <input type="text" id="business-address" name="business-address" required>
                    </div>
                    <div class="form-input">
                        <label for="business-city">City:</label>
                        <input type="text" id="business-city" name="business-city" required>
                    </div>
                    <div class="form-input">
                        <label for="business-telephone">Telephone:</label>
                        <input type="text" id="business-telephone" name="business-telephone" required>
                    </div>
                    <div class="form-input">
                        <label for="business-url">URL:</label>
                        <input type="text" id="business-url" name="business-url" required>
                    </div>
                    <div class="right-align">
                        <div>
                            <?php
                                if ($_SERVER["REQUEST_METHOD"] != "POST") {
                                    echo (  "<button type=\"submit\" class=\"btn btn-outline-primary\">Submit</button>
                                            <button type=\"reset\" class=\"btn btn-outline-secondary\">Reset</button>"
                                    );
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                include("../../db/db.php");
                $sqlQuery = "INSERT INTO Businesses (`Name`, `Address`, `City`, `Telephone`, `URL`) VALUES ('".$name."', '".$address."', '".$city."', '".$telephone."', '".$url."')";
                $last_id;
                echo !$conn;
                if ($conn->query($sqlQuery) === TRUE) {
                    $last_id = $conn->insert_id;
                } else {
                    echo "Error: " . $sqlQuery . "<br>" . $conn->error;
                }
                $isSuccessful = false;
                for ($i = 0; $i < count($categories); $i++){
                    $sqlQuery = "INSERT INTO Businesses_Categories VALUES ('".$last_id."', '".$businessCategories[$categories[$i]]."')";
                    if ($conn->query($sqlQuery) === TRUE) {
                        $isSuccessful = true;
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error . "<a href=\"http://localhost/WebProgramming/Lab04/4.2/application/Views/add_biz.php\">Try again?</a></div>"; 
                    }
                }
                if ($isSuccessful) echo "<div>Register successfully, "."<a href=\"http://localhost/WebProgramming/Lab04/4.2/application/Views/add_biz.php\">Add another business</a></div>";
                mysqli_close($conn);
            }
        ?>
    </div>
</body>
</html>