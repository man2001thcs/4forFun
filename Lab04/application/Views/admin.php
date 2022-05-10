<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Administration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            overflow: hidden;
        }
        .page-container {
            display: flex;
            flex-direction:column;
            padding: 0.5rem;
        }
        th, td {
            padding: 0.5rem
        }
        th {
            background-color: gray;
        }
        .table-container {
            height: 590px;
            overflow-y: auto;
        }
        .table {
            margin-bottom: 0.5rem;
        }
        input {
            border: 1px solid black;
            border-radius: 0.2rem;
            font-size: 16px;
            height: 32px;
            padding-left: 0.2rem;
            width: 100%;
        }
        button {
            margin: 0.5rem 0 0 0.25rem;
        }
    </style>
</head>
<body>
    <?php
        include_once("./navbar.php");
    ?>
    <div class="page-container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <h1>Category Administration</h1>
            <div class="table-container">
                <table class="table table-hover table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>CategoryID</th>
                            <th>Title</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include("../../db/db.php");
                            $sqlQuery = "SELECT * FROM Categories";
                            $result = $conn->query($sqlQuery);
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr><td>".$row["CategoryID"]."</td><td>".$row["Title"]."</td><td>".$row["Description"]."</td></tr>";
                                }
                            } else {
                                echo "0 results";
                            }
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                include("../../db/db.php");
                                $sqlQuery = "INSERT INTO Categories VALUES (\"".$_POST["category-id"]."\", \"".$_POST["category-title"]."\", \"".$_POST["category-description"]."\")";
                                if ($conn->query($sqlQuery) !== TRUE) {
                                    echo "<div>Error: ".$conn->error."</div>";
                                } else {
                                    echo "<tr><td>".$_POST["category-id"]."</td><td>".$_POST["category-title"]."</td><td>".$_POST["category-description"]."</td></tr>";
                                }
                                mysqli_close($conn);
                            }
                        ?>
                        <tr>
                            <td><input type="text" name="category-id" placeholder="Please set your category's id..."></td>
                            <td><input type="text" name="category-title" placeholder="Name its title..."></td>
                            <td><input type="text" name="category-description" placeholder="Write it some description..."></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <button type="submit" class="btn btn-outline-primary">Add Category</button>
                <button type="reset" class="btn btn-outline-secondary">Reset</button>
            </div>
        </form>
    </div>
</body>
</html>