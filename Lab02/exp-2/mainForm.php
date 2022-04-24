<HTML>
    <Head>
        <title>
            A simple form
</title>
</head>
<body>
    <form action="/formResponse.php" method="post">
        Enter your information here
        <br>
        <label style="color: blue; display: block;">
            Name
        </label>
        <input type="text" name="Name">
        <br>
        <label style="color: blue; display: block;">
            Email
        </label>
        <input type="text" name="email">
        <br>
        
        <label for="day">Date:</label>
        <input type="date" id="day" name="day">
        <br>

        <label for="times">Time:</label>
        <input type="time" id="times" name="times">
        <br>
        
        
        <input type="submit" value="Click to submit">
        <input type="reset" name="Restart">
    </form>

</body>
</html>

