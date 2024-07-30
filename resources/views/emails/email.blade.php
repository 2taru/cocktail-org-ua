<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $details['subject'] }} | {{ $details['fromName'] }}</title>
</head>

<body>
    <h3>Тема: {{ $details['subject'] }}</h3>
    <p><b>Повідомлення:</b> {{ $details['message'] }}</p>
    <br/>
    <h3>Надсилач:</h3>
    <p><b>Ім'я:</b> {{$details['fromName']}}</p>
    <p><b>Email:</b> {{$details['fromEmail']}}</p>
    <p><b>Номер телефону:</b> {{$details['phone']}}</p>

</body>

</html>
