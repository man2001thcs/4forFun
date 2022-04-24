<HTML>
    <Head>
        <title>
            A simple form receive
</title>
</head>
<body>
    <h1>Here your information</h1>
    <?php
        $name = $_POST["Name"];
        $email = $_POST["email"];
        $day = $_POST["day"];
        $time = $_POST["times"];
        print("<br> Hi $name");
        print("<br> Your appointment will be on: $day");
        print("<br> The time we shall meet: $time");
    ?>


</body>
</html>

