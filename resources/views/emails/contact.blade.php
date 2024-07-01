
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Email</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 20px;
        }
        .email-header {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 15px;
            text-align: center;
        }
        .email-body {
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            margin-top: 10px;
        }
        .email-footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            font-size: 12px;
            color: #777777;
        }
        .table {
            width: 100%;
        }
        .table td {
            padding: 8px;
            border: 1px solid #dddddd;
        }
    </style>
</head>
<body>

<div class="container">
    <div>
        <img src="{{ asset('front/img/logo.jpg') }}" width="40px" height="40px" alt="">
    </div>
    <div class="email-header">
        <h1>{{ $details['subject'] }}</h1>
    </div>
    <div class="email-body">
        <p><strong>Dear Big Cubes,</strong></p>
        <p>You have received a new message from the contact us form on your website. Here are the details:</p>
        <table class="table">
            <tr>
                <td><strong>Name:</strong></td>
                <td>{{ $details['name'] }}</td>
            </tr>
            <tr>
                <td><strong>Email:</strong></td>
                <td>{{ $details['email'] }}</td>
            </tr>
            <tr>
                <td><strong>Message:</strong></td>
                <td>{{ $details['message']}}</td>
            </tr>
        </table>
        <p>{{ $details['lastline'] }}</p>

    </div>
    <div class="email-footer">
        <p>&copy; 2024 Big Cubes. All rights reserved.</p>
    </div>
</div>
</body>
</html>

