<!DOCTYPE html>
<html>
  <head>
    <title>Form Pendaftaran Akun</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/daftar.css" />
  </head>

  <body>
    <form action="input.php" method="post">
      <h3>Pendaftaran Akun</h3>
      <label for="id">ID:</label>
      <input type="text" id="id" name="id" required /><br />

      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" required /><br />

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required /><br />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required /><br />
      <a href="berhasil.php"></a>
      <button>Daftar</button></a>
    </form>
  </body>
</html>
