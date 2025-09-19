<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
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
        display: flex;
        box-shadow: 0 0 15px #000;
        padding: 10px;
        min-height: 100px;
      }

      .content h1, .content h2 {
        color: #36a;
      }

      .content h1, p {
        margin-left: 20px;
      }

      .content h2 {
        margin-left: 10px;
      }

      .aboutus li, p {
        line-height: 25px;
      }

      .img-sample img {
        width: 400px;
        
      }

      .img-sample {
        margin-left: 50px;
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
  </head>
  <body>
<?php include "../inc/nav.php" ?>

    <hr />
    <div class="content">
     <div class="aboutus">
        <h1>Visi Dan Misi</h1>
     <p>
      <h2>Visi</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur incidunt aperiam, exercitationem vero dicta sint. Eius laborum, porro repellendus itaque nulla, dignissimos odio ipsam culpa in quod ipsa esse cumque!</p>
    </p>
    <h2>Misi</h2>
    <ul>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, doloremque eos aliquid id fugit quo nulla maxime soluta libero saepe. Quam sit atque hic odit autem ad quasi nostrum facilis.</li>
        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia expedita eligendi dolorem, libero cumque qui enim voluptatibus. Corrupti, rem est. Modi voluptatum natus nesciunt ullam atque doloribus, nisi numquam iure!</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum possimus odio perspiciatis ipsam veniam dignissimos atque, necessitatibus facere quis laboriosam quia in rerum. Itaque, dignissimos dolores incidunt quas sed odio.</li>
        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio velit eos vitae aperiam tenetur necessitatibus quidem itaque dolores labore molestias! Ad accusantium mollitia sunt tempore omnis cumque, quis cum earum.</li>
    </ul>
    </div>
        <div class="img-sample">
            <img src="../img/gambar 1.jpg" alt="Gambar 1">
        </div>
    </div>

     <footer>&copy; Developed By Bagas Dwiprasandi</footer>
  </body>
</html>
