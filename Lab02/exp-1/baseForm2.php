<HTML>
    <Head>
        <title>
            A simple form receive
</title>
</head>
<body>
    <h1>This is your information</h1>
    <?php
        $name = $_POST["Name"];
        $id = $_POST["id"];
        $age = $_POST["age"];
        $class = $_POST["class"];
        $university = $_POST["university"];
       
        $hobby1 = $_POST["hobby1"];
        $hobby2 = $_POST["hobby2"];
        $hobby3 = $_POST["hobby3"];
        $hobby4 = $_POST["hobby4"];
        $hobby5 = $_POST["hobby5"];
        
        print("<br> Hello, $name");
        print("<br> Your age is $age, and your ID is: $id");
        print("<br> You are studying at $class , $university");
        print("<br> Your hobby is ");
        print("<br>      1.  $hobby1 ");
        print("<br>      2.  $hobby2 ");
        print("<br>      3.  $hobby3 ");
        print("<br>      4.  $hobby4 ");
        print("<br>      5.  $hobby5 ");

    ?>


</body>
</html>

