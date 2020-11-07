<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mensaje recivido</title>
</head>
<body>
<p>Recibistes un mensaje de: {{$mensaje['name']}} - {{$mensaje['email']}}  </p>
<p><strong>Asunto: {{$mensaje['subject']}}</strong></p>
<p><strong>Contenido: {{$mensaje['content']}}</strong></p>

</body>
</html>