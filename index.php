<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

        <link rel="icon" href="img/logo.png">
        <title>Televisi Republik Indonesia TVRI</title>
    </head>
    <body style="font-family: 'Roboto',sans serif; background-image: url('img/bg.png');">

        <!-- NAVBAR-->
        <?php include 'navbar.php'; ?>
        <!-- END NAVBAR -->

        <!-- CONTENT -->
        <div class="content">
            <div class="container-fluid">

                <h1 class="text-center" style="margin-top: 50px; margin-bottom: 50px; font-weight: 400;">
                    DAFTAR DINAS PETUGAS BIDANG BERITA
                </h1>

                <div class="hari">
                    <div class="row justify-content-center ">
                        <div class="col-sm text-center">
                            <button class="btn tombol"> Senin </button>
                        </div>
                        <div class="col-sm text-center">
                            <button class="btn tombol"> Selasa </button>
                        </div>
                        <div class="col-sm text-center">
                            <button class="btn tombol"> Rabu </button>
                        </div>
                        <div class="col-sm text-center">
                            <button class="btn tombol"> Kamis </button>
                        </div>
                        <div class="col-sm text-center">
                            <button class="btn tombol"> Jum'at </button>
                        </div>
                        <div class="col-sm text-center">
                            <button class="btn tombol"> Sabtu </button>
                        </div>
                        <div class="col-sm text-center">
                            <button class="btn tombol"> Minggu </button>
                        </div>
                    </div>
                </div>

                <div class="tanggal">
                    <div class="row">
                        <div class="col-sm-5">
                        <h4><span id="tanggalwaktu"></span></h4>
                            <script>
                                var tw = new Date();
                                if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
                                else (a=tw.getTime());
                                tw.setTime(a);
                                var tahun= tw.getFullYear ();
                                var hari= tw.getDay ();
                                var bulan= tw.getMonth ();
                                var tanggal= tw.getDate ();
                                var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
                                var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
                                document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
                            </script>
                        </div>
                    </div>
                </div>
                
                <div class="daftar">
                    <div class="row justify-content-center">


                        <div class="col-sm text-center">
                            <div class="accordion" id="accordionExample">
                                <div class="card de">
                                    <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#de" aria-expanded="true" aria-controls="de">
                                        <span> DE / EIC </span>
                                        </button>
                                    </h2>
                                    </div>

                                    <div id="de" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Tunggul</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm">
                            <div class="accordion" id="accordionExample">
                                <div class="card redaksi">
                                    <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#redaksi" aria-expanded="true" aria-controls="redaksi">
                                        Redaksi
                                        </button>
                                    </h2>
                                    </div>

                                    <div id="redaksi" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Lukman</li>
                                            <li class="list-group-item">Annisa</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm">
                            <div class="accordion" id="accordionExample">
                                <div class="card penyiar">
                                    <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#penyiar" aria-expanded="true" aria-controls="penyiar">
                                        Penyiar
                                        </button>
                                    </h2>
                                    </div>

                                    <div id="penyiar" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Harry Irawan</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm">
                            <div class="accordion" id="accordionExample">
                                <div class="card acara">
                                    <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#acara" aria-expanded="true" aria-controls="acara">
                                        P.ACARA / ASS.PA
                                        </button>
                                    </h2>
                                    </div>

                                    <div id="acara" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Tarmizi</li>
                                            <li class="list-group-item">Wahyu P.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm">
                            <div class="accordion" id="accordionExample">
                                <div class="card editor">
                                    <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#editor" aria-expanded="true" aria-controls="editor">
                                        Editor
                                        </button>
                                    </h2>
                                    </div>

                                    <div id="editor" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Wahyudin</li>
                                            <li class="list-group-item">Irwansyah</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm">
                            <div class="accordion" id="accordionExample">
                                <div class="card lt">
                                    <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#lt" aria-expanded="true" aria-controls="lt">
                                        LT / PA.LC
                                        </button>
                                    </h2>
                                    </div>

                                    <div id="lt" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Dwinta</li>
                                            <li class="list-group-item">Ahmad</li>
                                            <li class="list-group-item">Fitriani</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>



        <!-- END CONTENT -->
        
        

        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>