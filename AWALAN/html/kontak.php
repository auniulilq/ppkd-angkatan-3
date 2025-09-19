<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/style.css" />
    <title>Contact Us</title>
    <style>
      body {
        padding: 0;
        margin: 0;
      }

      nav {
        background-color: #36a;
        color: #fff;
        padding: 10px;
        padding: 10px;
        display: flex;
        gap: 30px;
      }

      nav a {
        text-decoration: none;
        color: #fff;
      }

      nav a:hover {
        color: cadetblue;
      }

      .content {
        background-color: cyan;
        box-shadow: 0 0 15px #000;
        padding: 10px;
        min-height: 100px;
      }

      form label {
        font-weight: bold;
        display: block;
      }

      form input,
      form textarea {
        width: 98%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      button {
        width: 100%;
        padding: 10px;
        background-color: rgb(99, 121, 221);
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 15px;
      }

      footer {
        position: fixed;
        bottom: 0;
        background-color: #1f5464;
        color: cyan;
        text-align: center;
        padding: 10px;
        width: 100%;
      }
    </style>
  </head>
  <body>

     <?php require_once "../inc/nav.php" ?>
    
    <h1>Kontak Kami</h1>
    <p>
      <small>Berinteraksi dengan kami</small>
    </p>
    <hr />
    <div class="content">
      <form action="" method="post">
        <label for="">Nama</label>
        <input type="text" name="nama" id="nama" required />

        <label for="">Email</label>
        <input type="email" name="email" id="email" required />

        <label for="">Pesan</label>
        <textarea name="pesan" id="pesan" required></textarea>

        <button type="submit">Kirim Pesan</button>
        <!-- <input type="button" type="submit" value="Kirim Pesan" /> -->
      </form>
    </div>
    <footer><?php include "../inc/footer.php" ?></footer>
  </body>
</html>
