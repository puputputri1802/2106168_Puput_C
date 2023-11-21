<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamaran Pekerjaan</title>

    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="kotak">
        <h1> FORMULIR LAMARAN PEKERJAAN</h1>
        <form action="proses.php" method="post">
            <label for="posisi">Posisi yang Dilamar</label>
            <select name="posisi" id="posisi" class="form-input">
                <option value="CEO">CEO</option>
                <option value="HRD">HRD</option>
                <option value="Staff">Staff</option>
                <option value="Member">Member</option>
            </select>
            <br>
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" class="form-input">

            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-input" required>

            <label for="no_hp">Nomor Telepon</label>
            <input type="number" name="no_hp" id="no_hp" class="form-input" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-input" required>

            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-input">
                <option value="Laki Laki">Laki Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <label for="agama">Agama</label>
            <select name="agama" id="agama" class="form-input">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Budha">Budha</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
            </select>
            <br>
            <label for="alamat">Alamat Lengkap</label>
            <textarea name="alamat" id="alamat" cols="20" rows="10" class="form-input" required></textarea>
            <br>
            <button class="btn" name="kirim" id="kirim">Kirim</button>
        </form>
    </div>
</body>

</html>