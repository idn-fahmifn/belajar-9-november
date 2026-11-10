<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hallo weclome</h1>
    <p>Saya sedang belajar Laravel</p>

    @if (session('messages'))
        <span style="color: #ff0000;">{{session('messages')}}</span>
    @endif

    <a href="{{route('halaman.barang')}}">Ke halaman fahmi</a>

</body>
</html>