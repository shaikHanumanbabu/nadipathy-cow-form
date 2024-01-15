<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 15px 0;
            text-decoration: none;
            background-color: #3498db;
            color: #fff;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Password Reset</h1>
        <p>Hello {{ $details['user'] }},

        You recently requested to reset your password. Click the button below to proceed with the password reset:</p>

        <a href="{{ env('APP_URL') }}update-password?token={{ $details['expireIn'] }}&email={{ $details['email'] }}" class="btn">Reset Password</a>

        <p>If you didn't request a password reset, please ignore this email. Your password will remain unchanged.</p>

        <p>Thank you,<br>{{ $details['company'] }}</p>
    </div>
</body>
</html>
