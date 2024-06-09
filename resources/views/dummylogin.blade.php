<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>DUMMY LOGIN</h1>
    <form action="{{route('dummylogin')}}" method="POST">
        @csrf
        <p>NIK</p><br>
        <input type="text" name="nik" id="nik">
        <p>Password</p><br>
        <input type="password" name="password" id="password">
        <button type="submit">Submit</button>
    </form>
</body>
</html>