<!DOCTYPE html>
<html>
<head>
    <title>Halaman Profile</title>
    <style>
        body {
            text-align: center;
        }
        .fotoprofil {
            width: 130px;
            height: 130px;
        }
        .info-box {
            background-color: #d9d9d9;
            width: 250px;
            padding: 10px;
            margin: 10px auto;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <img src="{{ asset('profil.jpg') }}" class="fotoprofil" alt="Foto Profil">
    <div class="info-box">{{ $name }}</div>
    <div class="info-box">{{ $kelas }}</div>
    <div class="info-box">{{ $NPM }}</div>
</body>
</html>