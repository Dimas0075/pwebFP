<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TOEFL</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/profile.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <nav>
        <!-- dikelompokkan ke navigasi menggunakan elemen "nav" karena termasuk dalam navigasi -->
        <ul>
            <li><a href="<?= BASEURL; ?>">Home</a></li>
            <li><a href="<?= BASEURL; ?>/mahasiswa">Peserta</a></li>
            <li style="float:right" class="dropdown"><a href="#">Account</a>
                <ul class="isi-dropdown">
                    <li><a href="<?= BASEURL; ?>/mahasiswa/profile">Profile</a></li>
                    <li><a href="<?= BASEURL; ?>/login/logout">Log Out</a></li>
                </ul>
            </li>
        </ul>
    </nav>