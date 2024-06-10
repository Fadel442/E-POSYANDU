<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>TAMBAH VAKSIN</h1>
    <form action="{{route('dummyaddvaksin')}}" method="POST">
        @csrf
        <p>Nama Vaksin</p><br>
        <input type="text" name="vaksin" id="vaksin">
        <p>Jumlah Vaksin</p><br>
        <input type="text" name="jumlah" id="jumlah">
        <button type="submit">Submit</button>
    </form>
</body>
</html>