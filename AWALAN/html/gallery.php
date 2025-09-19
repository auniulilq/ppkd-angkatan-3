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

      .gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
      }

      .gallery img {
        width: 300px;
        height: 300px;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
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
    <nav>
      <a href="#">Home</a>
      <a href="aboutus.html">About Us</a>
      <a href="gallery.html">Gallery</a>
      <a href="kontak.html">Contact</a>
    </nav>
    <h1>Our Gallery</h1>
    <p>
      <small>Our Photos</small>
    </p>
    <hr />
    <div class="content">
      <div class="gallery">
        <img src="../img/gambar 1.jpg" alt="gambar 1" />
        <img src="../img/gambar 2.jpg" alt="gambar 2" />
        <img src="../img/gambar 3.jpg" alt="gambar 3" />
        <img src="../img/gambar 4.jpg" alt="gambar 4" />
      </div>
    </div>
    <footer>&copy; Developed By Bagas Dwiprasandi</footer>
  </body>
</html>
