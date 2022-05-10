<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .category-item {
            cursor: pointer;
        }
        .selecting-category-item {
            cursor: pointer;
            background-color: gray;
        }
        .page-container {
            padding: 0.5rem;
        }
        .vertical-grid-container {
            display: grid;
            grid-template-columns: 20% 80%;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php
        include_once("./navbar.php");
    ?>
    <div class="page-container">
        <h1>Business Lists</h1>
        <?php
            include_once("../../db/db.php");
            $sqlQuery = "SELECT * FROM Categories";
            $result = $conn->query($sqlQuery);
            if (mysqli_num_rows($result) > 0){
                echo "<div class=\"vertical-grid-container\"><div class=\"categories-container\">";
                while($row = mysqli_fetch_assoc($result)){
                    $redirect_url = "biz_listing.php?cat_id=".$row["CategoryID"];
                    echo "<div class=\"category-item\"><a href=\"$redirect_url\">".$row["Title"]."</a></div>";
                }
                echo "</div>";
                echo "<div class=\"businesses-container\"><table class=\"table table-hover table-bordered\">";
                echo "<tr><th>Name</th><th>Address</th><th>City</th><th>Telephone</th><th>URL</th><th>Category</th></tr>";
                if (!empty($_GET)) {
                    $sqlQuery = "SELECT b.Name, b.Address, b.City, b.Telephone, b.URL, bc.CategoryID FROM Businesses b, Businesses_Categories bc WHERE b.BusinessID = bc.BusinessID AND CategoryID = \"".$_GET["cat_id"]."\"";
                    $result = $conn->query($sqlQuery);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr><td>".$row["Name"]."</td><td>".$row["Address"]."</td><td>".$row["City"]."</td><td>".$row["Telephone"]."</td><td>".$row["URL"]."</td><td>".$row["CategoryID"]."</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan=\"6\" style=\"text-align: center;\">No business is found!</td></tr>";
                    }
                    echo "</table></div></div>";
                } else {
                    echo "<tr><td colspan=\"6\" style=\"text-align: center;\">Select a category to see the correspoding business(es)</td></tr>";
                }
            } else {
                echo "0 results";
            }
            mysqli_close($conn);
        ?>
    </div>
</body>
</html>