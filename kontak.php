<?php
$message = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars(string: trim(string: $_POST["nama"]));
  $email = htmlspecialchars(string: trim(string: $_POST["email"]));
  $pesan = htmlspecialchars(string: trim(string: $_POST["pesan"]));

  if (empty($name) || empty($email) || empty($pesan)) {
    $message = "❗ Semua field wajib diisi!";
  } else {
    $data = "Nama: $name\nEmail: $email\nPesan: $pesan\n---\n";
    file_put_contents(filename: "messages.txt", data: $data, flags: FILE_APPEND);
    $message = "✅ Terima kasih, $name! Pesanmu sudah dikirim.";
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak</title>
  <link rel="stylesheet" href="stylekontak.css">
</head>
<body>
  <header>
    <h1>Kontak - MBC Laboratory</h1>
    <nav>
      <a href="nyoba landing.html">Beranda</a>
      <a href="divisi & layanan.html">Divisi & Layanan</a>
      <a href="developer.html">Developer</a>
    </nav>
  </header>

  <main>
    <section>
      <h2>Informasi Kontak</h2>
      <p><strong>Alamat:</strong> Jl. Telekomunikasi No. 1, Terusan Buah Batu, Bandung, Indonesia</p>
      <p>🏢 Telkom University Landmark Tower Lantai 13, Ruangan 04 (TULT 13.04)</p>
      <p>📝 Telkom University Landmark Tower Lantai 11, Ruangan 12 (TULT 11.12)</p>
      <p><strong>Line:</strong> @sok8073r</p>
      <p><strong>Email:</strong> laboratory.mbc@gmail.com</p>
    </section>

    <section>
      <h2>Lokasi Kami</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3960.3389813521057!2d107.6255821!3d-6.9692767!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9bc3974981d%3A0x613eec0feec9fcf7!2sTelkom%20University%20Landmark%20Tower%20(TULT)!5e0!3m2!1sid!2sid!4v1751688952639!5m2!1sid!2sid" 
        width="600" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </section>

    <section>
      <h2>Formulir Kontak</h2>

      <?php if (!empty($message)): ?>
        <p style="font-weight: bold; color: green;"><?php echo $message; ?></p>
      <?php endif; ?>

      <form action="" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="pesan">Pesan:</label><br>
        <textarea id="pesan" name="pesan" rows="5" required></textarea><br><br>

        <button type="submit">Kirim Pesan</button>
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 MBC Laboratory. Beberapa konten © 2025 KK Networking, Cybernetics, and Engineering Management. All rights reserved.</p>
  </footer>
</body>
</html>
