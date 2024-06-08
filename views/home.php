<?php hakAkses(['admin']); $now = date('Y-m-d'); ?>
<!-- Begin Page Content -->
<div class="container-fluid"">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0" style="color: #E88D67">Dashboard</h1>
    </div>

    <div class="card">
        <div class="card-header" style="background-color: #E88D67">
                <marquee class="teks" style="color: #F3F7EC"> SELAMAT DATANG DI PERBAIKAN PONSEL, SAHABAT SEHAT PONSEL! </marquee>
        </div>
        <div class="card-body" style="background-color: #">
            <h5 class="card-title"><?= $_SESSION['username'] ?></h5>
            <p class="card-text">Data data yang telah di input silahkan dicek kembali dan jangan sampai ada yang tidak diinput ya</p>
        </div>
    </div>

</div>
<!-- /.container-fluid -->