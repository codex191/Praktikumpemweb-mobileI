<?php
include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>index</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="ajax/ajax.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        #grafik {
            width: 50vw;
            height: 50vh;
        }
    </style>
</head>
<body>
    <center>
        <h1>pemilu</h1>
    </center>
    <div style="margin: auto;width: 60%;">
        <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        </div>
        <form id="fupForm" name="form1" method="post">
            <div class="form-group">
                <label for="nik">nik:</label>
                <input type="text" class="form-control" id="nik" placeholder="nik" name="nik" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="nama">nama:</label>
                <input type="text" class="form-control" id="nama" placeholder="nama" name="nama" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">tanggal_lahir:</label>
                <input type="date" class="form-control" id="tanggal_lahir" placeholder="tanggal_lahir" name="tanggal_lahir" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="capres">daftar pilihan</label>
                <br>
                <input type="radio" name="capres" value="a" id="capres" class="capres">a<br>
                <input type="radio" name="capres" value="b" id="capres" class="capres">b<br>
                <input type="radio" name="capres" value="c" id="capres" class="capres">c<br>
            </div>
            <input type="button" name="save" class="btn btn-primary" value="vote" id="butsave">
        </form>
    </div>
    <br>
    <div id="grafik" class="container">
    </div>
    <script>
        //insert data
        $(document).ready(function() {
            $('#grafik').load('grafik.php');
            $('#butsave').on('click', function() {
                $("#butsave").attr("disabled", "disabled");
                var nik = $('#nik').val();
                var nama = $('#nama').val();
                var tanggal_lahir = $('#tanggal_lahir').val();
                var capres = $("input[name='capres']:checked").val();
                if (nik != "" && nama != "" && tanggal_lahir != "" && capres != "") {
                    $.ajax({
                        url: "save.php",
                        type: "POST",
                        data: {
                            nik: nik,
                            nama: nama,
                            tanggal_lahir: tanggal_lahir,
                            capres: capres
                        },
                        cache: false,
                        success: function(dataResult) {
                            $('#grafik').load('grafik.php');
                            var dataResult = JSON.parse(dataResult);
                            if (dataResult.statusCode == 200) {
                                $("#butsave").removeAttr("disabled");
                                $('#fupForm').find('input:text').val('');
                                $("#success").show();
                                $('#success').html('Data added successfully !');
                            } else if (dataResult.statusCode == 201) {
                                alert("Error occured !");
                            }
                        }
                    });
                } else {
                    alert('Please fill all the field !');
                }
            });
        });
    </script>
</body>
</html>