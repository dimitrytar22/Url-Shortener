<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007bff;
            font-size: 24px;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Нове повідомлення з форми зворотного зв'язку</h1>
    <p><strong>Ім'я:</strong> {{$data['name']}}</p>
    <p><strong>Email:</strong> {{$data['email']}}</p>
    <p><strong>Повідомлення:</strong></p>
    <p>{{$data['message']}}</p>
    <div class="footer">
        <p>Цей лист згенеровано автоматично. Будь ласка, не відповідайте на нього.</p>
    </div>
</div>
</body>
</html>
