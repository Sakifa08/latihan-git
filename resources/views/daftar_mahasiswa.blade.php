<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <li>
            Nama : Sakifa Indira Putri <br>
            NIM : 221402130 <br>
            Gender : Perempuan <br>
            <form action="/detail_mahasiswa" method="POST">
                @csrf 
                <button type="submit" class="btn
                btn-primary">Detail Mahasiswa [POST]</button>
            </form>

            <form action="/detail_mahasiswa" method="GET">
                @csrf 
                <button type="submit" class="btn
                btn-primary">Detail Mahasiswa [GET]</button>
            </form>
        </li>
        <li>
            Nama : Sapapun Itu <br>
            NIM : 12345678 <br>
            Gender : Perempuan <br>
        </li>
    </ul>
</body>
</html>