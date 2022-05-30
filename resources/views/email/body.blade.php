<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail BoolPress</title>
</head>
<body>

    <h1> {{$author}} ti ha contattato da WordPress</h1>

    <h1>La mail alla quale vorrebbe essere contattato è: {{$authorEmail}}</h1>

    <p>
        {{$guestMessage}}
    </p>

</body>
</html>