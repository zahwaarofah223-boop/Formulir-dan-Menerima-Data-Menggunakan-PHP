<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Input Pengguna</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f6f8fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .hasil {
      background: white;
      padding: 25px 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 380px;
    }
    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }
    p {
      font-size: 15px;
      margin: 8px 0;
      color: #444;
    }
    .error {
      color: red;
      text-align: center;
      font-weight: bold;
    }
    a {
      display: inline-block;
      margin-top: 15px;
      text-decoration: none;
      color: white;
      background: #007bff;
      padding: 8px 15px;
      border-radius: 5px;
      transition: 0.3s;
    }
    a:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>
  <div class="hasil">
    <h2>Hasil Input Formulir</h2>
    <?php
    if (
        isset($_POST['nama']) && 
        isset($_POST['alamat']) && 
        isset($_POST['tgl_lahir']) && 
        isset($_POST['jenis_kelamin']) &&
        !empty($_POST['nama']) &&
        !empty($_POST['alamat']) &&
        !empty($_POST['tgl_lahir']) &&
        !empty($_POST['jenis_kelamin'])
    ) {
        $nama = htmlspecialchars($_POST['nama']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $tgl_lahir = htmlspecialchars($_POST['tgl_lahir']);
        $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);

        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>Alamat:</strong> $alamat</p>";
        echo "<p><strong>Tanggal Lahir:</strong> $tgl_lahir</p>";
        echo "<p><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
    } else {
        echo "<p class='error'>⚠️ Mohon isi semua data dengan lengkap!</p>";
    }
    ?>
    <div style="text-align:center;">
      <a href="form.html">⬅ Kembali ke Form</a>
    </div>
  </div>
</body>
</html>
