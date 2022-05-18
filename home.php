

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="layouts/assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>

    <div class="akun">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container">
            <h1>Sparepart Motor</h1>
            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="#">Pemesanan</a>
                    <ul class="dropdown">
                         <li><a href="index.php?page=konsumen"></a>Input Data Konsumen</li>
                         <li><a href="index.php?page=barang"></a>Input Data Barang</li>
                        <li><a href="index.php?page=pembelian"></a>Input Data Pembelian</li>
                    </ul>
                </li>
                <li><a href="index.php?page=informasi">Informasi</a></li>
                <li><a href="index.php?page=logout">Logout</a></li>
            </ul>
        </div>
    </header>

    <section class="banner">
        <h2>Welcome to My Website </h2>
    </section>
    <section class="about">
        <div class="container">
            <h3>ABOUT</h3>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    </section>

    <section class="item">
        <div class="container">
            <h3>Item</h3>
            <div class="box">
                <div class="col-4">
                    <div class="icon"><img src="layouts/assets/images/item1.jpg" alt=""></div>
                </div>
                <div class="col-4">
                    <div class="icon"><img src="layouts/assets/images/item2.jpg" alt=""></div>
                </div>
                <div class="col-4">
                    <div class="icon"><img src="layouts/assets/images/item4.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </section>
value="<?php echo date('Y-m-d H:i:s'); ?>"

</body>

</html>

