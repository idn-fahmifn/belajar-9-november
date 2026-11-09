<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Input</h1>
    <p>Masukan data lengkap dibawah : </p>

    <form action="{{route('simpan.barang')}}" method="post">
        <div class="">
            <label for="">Nama Barang</label>
            <input type="text" name="nama_barang" required>
        </div>
        <div class="">
            <label for="">Brand</label>
            <input type="text" name="brand" required>
        </div>
        <div class="">
            <label for="">Harga Barang</label>
            <input type="number" name="harga" required>
        </div>

        <button type="submit">Kirim Barang</button>
    </form>

</body>
</html>