<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Tablet</title>
    <style>
        body {
            margin: 0;
            background: linear-gradient(to left, rgb(220, 147, 21), #fff);
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            padding: 20px;
        }

        .header {
            display: flex;
        }

        .header img {
            max-width: 300px;
            align-self: flex-start;
        }

        .kata {
            margin: 30px 0px 30px 0px;
            padding-left: 90px;
            flex-grow: 1;
        }

        .kata p {
            margin-top: 80px;
        }

        .btn-option {
            background-color: rgb(3, 28, 251);
            color: #fff;
            text-decoration: none;
            padding: 15px;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            width: 250px;
            height: 120px;
            font-size: 18px;
            font-weight: bold;
            align-items: center;
        }

        .option {
            display: flex;
            justify-content: center;
            gap: 25px;
            margin-top: 60px;
            margin-left: 85px;
        }

        .btn-option:hover {
            background-color: rgb(90, 203, 255);
        }

        footer {
            position: fixed;
            bottom: 5px;
            background-color: rgb(3, 28, 251);
            width: 100%;
            color: #fff;
            padding: 10px;
            font-size: 25px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="kata">
                <h4>Assalamualaikum WR, WB</h4>
                <h5>Hai Guys, welcome Back di PT BPR.</h5>
                <p>Mau Ngapain nih?? Pilih yang ada dibawah yaaa </p>
            </div>
            <img src="../img/image_logo.png">
        </div>
        <div class="option">
            <a href="" class="btn-option">Customer Service</a>
            <a href="" class="btn-option">Teller Office</a>
            <a href="" class="btn-option">Pengaduan Nasabah</a>
        </div>
    </div>

    <footer>
        <marquee direction="right">Welcome to PT Bank Perekonomian Rakyat</marquee>
    </footer>
</body>

</html>