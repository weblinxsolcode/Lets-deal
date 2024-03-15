<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Request Approved</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #ffffff;
            color: #000000;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            background-color: #ffffff;
        }
        h1 {
            color: #f7c243; /* Main color */
        }
        p {
            margin-bottom: 15px;
        }
        .button {
            display: inline-block;
            background-color: #f7c243; /* Main color */
            color: #ffffff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .credentials {
            background-color: #f7c243; /* Main color */
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Congratulations, {{ $vendor->contact_person ?? '-' }}!</h1>
    <p>Your partner request has been approved.</p>
    
    <p>You are now a valued partner of our organization. Below are your account credentials:</p>
    
    <div class="credentials">
        <p><strong>Email:</strong> {{ $vendor->email ?? '-' }}</p>
        <p><strong>Password:</strong> {{ $newPassword ?? '-' }}</p>
    </div>
    
    <a href="{{ route('vendor.login') }}" class="button">Click here to login!</a>
    
    <p>If you have any questions or need assistance, feel free to contact us.</p>
    
    <p>Thank you for partnering with us,<br> Happicard</p>
</div>

</body>
</html>
