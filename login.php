<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2c2c2c;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            background-color: #333333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 90%;
            max-width: 400px;
        }

        input {
            padding: 10px;
            border-radius: 5px;
            border: none;
            margin: 10px 0;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            background-color: #007BFF;
            color: #ffffff;
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
            margin: 10px 0;
        }

        button:hover {
            background-color: #0056b3;
        }

        .message {
            margin-top: 10px;
            color: #ff0000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button><br> <br>

            <a href="index.html" 
            style="padding: 10px 20px;
            border-radius: 5px;
            border: none;
            background-color: #007BFF;
            color: #ffffff;
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
            margin: 10px 0;"> Home</a>
        </form>
        
        <div class="message">
            <?php
                session_start();
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    // Hardcoded credentials for simplicity
                    $validUsername = 'admin';
                    $validPassword = 'password123';

                    if ($username === $validUsername && $password === $validPassword) {
                        $_SESSION['loggedin'] = true;
                        header('Location: set_rate.php');
                        exit();
                    } else {
                        echo "Invalid username or password.";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
