


// // Get the name and score from the form
// $name = $_POST['name'];
// $score = $_POST['score'];

// // Determine the competency level
// if ($score >= 80) {
//     $competency = 'Competent';
//     $emoticon = '😀';
// } else {
//     $competency = 'Not Competent';
//     $emoticon = '😔';
// }

// // Display the result
// echo "<h1>$name, your competency level is: $competency $emoticon</h1>";



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/30d9a6bac1.js" crossorigin="anonymous"></script>
    <style>
        *{
            font-family: Poppins    ;
        }

        body{
           background-color: #31363F;
           height: 1000px;
        }
    .hiasan{
        background-color:#76ABAE ;
        height: 800px;
        width: 1300px;
        color:  white;
        text-align: center;
        margin-left: 17%;
        border-radius: 30px;
        margin-top: 50px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.600) ;
    }

    .hiasan h1{
    padding-top: 20px;
    }

    .atur-posisi{
        padding: 10px 150px 100px;
    }

    .form{
        display: flex;
        width: 1000px;
        background-color: #31363F;
        height: 600px;
        border-radius: 30px;
        box-shadow: 0 0 20px #222831;
    }
    form{
        margin-top: 0px;
        width: 500px;
        font-size: 20px;
    }

    form h2 {
        text-align: start;
        margin-left: 50px;
        color: white;
        font-size: 25px;
    }
    input{
        width: 80%;
        border-radius: 10px;
        border: none;
        margin: px 20px;
        padding: 18px 0;
        text-align: center;
       outline: none;
    }

    input::placeholder{
        text-align: center;
    }

    input:focus{
        box-shadow: 0 0 10px aqua;
    }

    .btn{
        text-align: start;
        margin-left: 50px;
        margin-top: 20px;
    }
    button {
        border-radius: 10px;
        padding: 20px 60px;
        border: none;
        margin-top: 40px;
        border: none;
        box-shadow: 0px 10px 0px  rgba(0, 0, 0, 0.321);
        transition: all 0.3s;
    }

    button:hover {
        border-radius: 10px;
        padding: 19px 60px 20px;
        border: none;
        margin-top: 40px;
        border: none;
        box-shadow: 0px 0px 0px black;
        transition: all 0.3s;
    }

    .hasil{
        background-color: white;
        width: 500px;
        text-align: center;
        color: black;
        font-size: 20px;
        border-radius: 30px;
    }

    .php{
        font-size: 20px;
    }

    .Rincian{
        margin-top: -20px;
       
    }

    .judul-rincian{
        margin-top: 10px;
    }

    .judul-rincian h1{
        border: 1px solid;
        border-radius: 30px;
        margin: 40px 150px 0;
        padding: 10px 15px;
        margin-bottom: 20px;
        font-size: 25px;
        color: white;
        background-color: black;

    }

    .Nama{
        font-size: 30px;
        font-family: Poppins;
        margin-top: 10px;
    }

    .Nama h2{
        font-size: 30px;
    }

    .Nilai{
        margin-top: -30px;
    }

    .emoji h1{
        margin-top: 20px;
        margin-bottom: 20px;
    }

    @media only screen and (max-width: 600px) {

        body{
            height: 1000px;
        }
        .atur-posisi{
            margin: 0;
            padding: 0;
        }
        .hiasan{
            width:500px ;
            margin: 20px 30px;
            
        }
        .form{
            display: block;
            width: 500px;
            justify-content: center;
        }

        button{
            width: 90%;
        }
    }

  .kotak{
    font-size: 10px;
        background-color: #222831;
    margin-left: 20px;
    padding: 5px 40px;
    border-radius: 10px;
    font-family: Poppins;
    color: white;
  }
    
    </style>
</head>
<body>

    <div class="hiasan">
    <h1>Form Uji Kompetensi</h1>
        <div class="atur-posisi">
    <div class="form">
    <form action="" method="POST">
        <h1>Masukan Data</h1>
        <h2>Nama</h2>
        <input type="text" placeholder="Masukan nama" name="inputNama" id="inputNama" required>
        <h2>Nilai</h2>
        <input type="number" placeholder="Masukan nilai" name="inputNilai" id="inputNilai" required>
        <div class="btn">
        <button  type="submit">Submit</button>
        </div>
    </form>

    <div class="hasil">
        <h1>Cek Keterangan Nilai</h1>
        <div class="php">
    <div class="emoji">
    <?php
    if (@$_POST['inputNilai']>=80 && @$_POST['inputNilai']<=100){
        echo "<i class='fa-solid fa-face-smile-beam' style='color: #74C0FC; font-size : 80px; margin-top : 20px'></i>";
        echo "<br>";
        echo "<h1 style='color:green; font-size:30px;' >Kompeten</h1>";
    } elseif (@$_POST['inputNilai']<=60){
        echo  "<i class='fa-solid fa-face-frown' style='color: #74C0FC; font-size : 80px; margin-top : 20px'></i>";
        echo "<br>";
        echo "<h1 style='color:red; font-size:30px;' >Tidak Kompetn</h1>";
    }else{
        echo  "<i class='fa-solid fa-face-frown' style='color: #74C0FC; font-size : 80px; margin-top : 20px'></i>";
    }
    ?>
    </div>
    <div class="Rincian">
        <div class="judul-rincian">
        <h1>Rincian </h1>
        </div>
        <div class="Nama">
        <?php
    if (@$_POST['inputNilai']>=80 && @$_POST['inputNilai']<=100){
        echo "<h2>". $_POST['inputNama']."</h2>";
    } elseif (@$_POST['inputNilai']<=60){
        echo "<h2>". $_POST['inputNama']."</h2>";
    }else {
        echo "BELUM KOMPETEN";
    }
    ?>
        </div>
        <div class="Nilai">
        <?php
    if (@$_POST['inputNilai']>=80 && @$_POST['inputNilai']<=100){
        echo "<h1 style='color: #92C7CF '>". $_POST['inputNilai']."</h1>";
    } elseif (@$_POST['inputNilai']<=60){
        echo "<h1 style='color:red'>". $_POST['inputNilai']."</h1>";
    }else {
        echo "";
    }
    ?>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

</body>
</html>