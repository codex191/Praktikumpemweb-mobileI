<html>
<head>
<title>MODUL 2</title>
</head>
<body>
<form action="" method="POST">
    <input type="text" name="name" value="" placeholder="Masukan Username">
    <br>
    <input type="password" name="pass" value="" placeholder="Masukan password">
    <br>
    <input type="password" name="cpass" value="" placeholder="Masukan kembali password">
    <br>

    <input type="submit" name="submit" value="Validasi">
    <input type="reset" value="Reset Form">
</form>


<?php
    if(isset($_POST['submit'])){
        $n = $_POST['name'];
        $p = $_POST['pass'];
        $pv = $_POST['cpass'];
        if(empty($n)){
            echo "Tolong isikan Nama Anda!";
        }
        
        if(strlen($n)<7){
            echo "Username tidak boleh lebih dari tujuh karakter!<br>";
        }

        if(!preg_match("#[0-9]+#", $p)){
            echo "Harap dalam password anda harus mengandung angka!<br>";
        }

        if(!preg_match("#[a-z]+#", $p)){
            echo "Harap dalam password anda harus mengandung huruf kecil!<br>";
        }
        
        if(!preg_match("#[A-Z]+#", $p)){
            echo "Harap dalam password anda harus mengandung huruf besar/kapital!<br>";
        }

        if(!preg_match("/[\'^$%&*()}{#~?><>,|=_=-]/", $p)){
            echo "Harap dalam password anda harus mengandung karakter unik!<br>";
        }

        if($p != $pv){
            echo "Kedua password tersebut tidak cocok!, harap isi ulang lagi.<br>";
        }
    }

?>
</body>
</html>

