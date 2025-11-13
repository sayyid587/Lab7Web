<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input Data</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      padding: 30px;
    }
    h2 {
      text-align: center;
      color: #333;
    }
    form {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 400px;
      margin: 0 auto;
    }
    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
    }
    input, select {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    input[type="submit"] {
      background-color: #007bff;
      color: white;
      cursor: pointer;
      border: none;
      margin-top: 15px;
    }
    .result {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      width: 400px;
      margin: 20px auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

  <h2>Form Input Data</h2>

  <form method="POST" action="">
    <label>Nama:</label>
    <input type="text" name="nama" required>

    <label>Tanggal Lahir:</label>
    <input type="date" name="tgl_lahir" required>

    <label>Pekerjaan:</label>
    <select name="pekerjaan" required>
      <option value="">-- Pilih Pekerjaan --</option>
      <option value="Programmer">Programmer</option>
      <option value="Desainer">Desainer</option>
      <option value="Guru">Guru</option>
      <option value="Dokter">Dokter</option>
      <option value="Petani">Petani</option>
    </select>

    <input type="submit" name="submit" value="Tampilkan">
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $pekerjaan = $_POST['pekerjaan'];

    $tgl_lahir_obj = new DateTime($tgl_lahir);
    $sekarang = new DateTime();
    $umur = $sekarang->diff($tgl_lahir_obj)->y;

    switch ($pekerjaan) {
      case 'Programmer':
        $gaji = 8000000;
        break;
      case 'Desainer':
        $gaji = 6000000;
        break;
      case 'Guru':
        $gaji = 5000000;
        break;
      case 'Dokter':
        $gaji = 10000000;
        break;
      case 'Petani':
        $gaji = 4000000;
        break;
      default:
        $gaji = 0;
        break;
    }

    echo "<div class='result'>";
    echo "<h3>Hasil Data</h3>";
    echo "Nama: <strong>$nama</strong><br>";
    echo "Tanggal Lahir: <strong>" . date('d-m-Y', strtotime($tgl_lahir)) . "</strong><br>";
    echo "Umur: <strong>$umur tahun</strong><br>";
    echo "Pekerjaan: <strong>$pekerjaan</strong><br>";
    echo "Gaji: <strong>Rp " . number_format($gaji, 0, ',', '.') . "</strong>";
    echo "</div>";
  }
  ?>

</body>
</html>
