<!-- index.html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        .container {
            margin: 50px auto;
            width: 400px;
            padding: 30px;
            background-color: #f5f5f5;
            border-radius: 10px;
            box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.5);
        }

        input {
            font-size: 16px;
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            width: calc(100% - 20px);
            border: 1px solid #ccc;
        }

        button {
            font-size: 16px;
            background-color: rgb(204, 222, 216);
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        h2 {
            text-align: center;
        }
    </style>

</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>


<!-- login.php -->
<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $uname = $_POST["username"];
            $pass = $_POST["password"];
            $file = fopen("login.txt", "r");

            $content = fgets($file);
            if ($content == $uname . ":" . $pass) {
                echo "alert('Access granted!')";
            } else {
                echo "alert('Incorrect')";
            }
        }
        ?>


<!-- login.txt -->
bob:1556
