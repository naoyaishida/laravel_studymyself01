<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="get" action= "{{URL::to('/submit')}}">
        <input type="text" name="name">
        <input type="password" name="pw" >
        <input type="hidden" name="tokun" value="{{csrf_token()}}">
        <button type="submit">submit</button>
    </form>
</body>
</html>