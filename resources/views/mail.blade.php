<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contect</title>
</head>
<body>
    <script src="{{ asset('mainassets2/vendor/purecounter/purecounter_vanilla.js') }}"></script>


<p>name: {{$data['nom']}}</p>
<p>email: {{$data['email']}}</p>
<p>phone:{{$data['telephone']}} </p>

<p>Message :{{$data['message']}} </p>


<p>Message :{{$data['countries']}} </p>








</body>
</html>