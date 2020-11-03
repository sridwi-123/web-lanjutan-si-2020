<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>tugas 3</title>

        <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" />
    </head>

    <body class="container-md">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 15px;">
            <a class="navbar-brand" href="#">Tugas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1">Tambah Data</a>
                    </li>
                </ul>
                <span class="navbar-item">
                    EWIK
                </span>
            </div>
        </nav>

        <div class="alert alert-info" role="alert" style="text-align: center;">
            <b>BAIQ SRI DWI LESARI</b>
        </div>

        <div class="card">
            <div class="card-header">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nomor</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Ewik</td>
                            <td>1901050005</td>
                            <td>Gerung</td>
                            <td><button type="button" class="btn btn-warning">Edit</button> <button type="button" class="btn btn-danger">Delete</button></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Alfi</td>
                            <td>1901050002</td>
                            <td>Mataram</td>
                            <td><button type="button" class="btn btn-warning">Edit</button> <button type="button" class="btn btn-danger">Delete</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    </body>
</html>