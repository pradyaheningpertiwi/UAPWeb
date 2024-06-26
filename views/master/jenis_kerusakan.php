<?php hakAkses(['admin']) ?>
<script>
function submit(x) {
    if (x == 'add') {
        $('#jenisKerusakanModal .modal-title').html('Tambah jenis kerusakan');
        $('[name="nama_kerusakan"]').val("").trigger('change');
        $('[name="harga_perbaikan"]').val("").trigger('change');
        $('[name="ubah"]').hide();
        $('[name="tambah"]').show();
    } else {
        $('#jenisKerusakanModal .modal-title').html('Edit jenis kerusakan');
        $('[name="nama_kerusakan"]').val("").trigger('change');
        $('[name="harga_perbaikan"]').val("").trigger('change');
        $('[name="tambah"]').hide();
        $('[name="ubah"]').show();

        $.ajax({
            type: "POST",
            data: {
                id: x
            },
            url: '<?=base_url();?>process/view_jenis_kerusakan.php',
            dataType: 'json',
            success: function(data) {
                $('[name="id"]').val(data.id_kerusakan);
                $('[name="nama_kerusakan"]').val(data.nama_kerusakan);
                $('[name="harga_perbaikan"]').val(data.harga_perbaikan);
            }
        });
    }
}
</script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0" style="color: #E88D67">Jenis Kerusakan</h1>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="#" class="btn btn-success btn-icon-split btn-sm" data-toggle="modal" data-target="#jenisKerusakanModal"
                onclick="submit('add')">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="20">NO</th>
                            <th>NAMA KERUSAKAN</th>
                            <th>HARGA PERBAIKAN</th>
                            <th width="50">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $n=1;
                        $query = mysqli_query($con,"SELECT * FROM tb_jenis_kerusakan ORDER BY id_kerusakan DESC")or die(mysqli_error($con));
                        while($row = mysqli_fetch_array($query)):
                        ?>
                        <tr>
                            <td><?= $n++; ?></td>
                            <td><?= $row['nama_kerusakan']; ?></td>
                            <td><?= $row['harga_perbaikan']; ?></td>
                            <td>
                            <div class="d-inline-flex p-2">
                                <a href="#jenisKerusakanModal" data-toggle="modal" onclick="submit(<?=$row['id_kerusakan'];?>)"
                                    class="btn btn-sm btn-circle btn-info mr-2"><i class="fas fa-edit"></i></a>
                                <a href="<?=base_url();?>/process/process_jenis_kerusakan.php?act=<?=encrypt('delete');?>&id=<?=encrypt($row['id_kerusakan']);?>"
                                    class="btn btn-sm btn-circle btn-danger btn-hapus"><i class="fas fa-trash"></i></a>
                            </div>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- Modal Tambah Jenis Kerusakan -->
<div class="modal fade" id="jenisKerusakanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="<?=base_url();?>process/process_jenis_kerusakan.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Kerusakan</label>
                                <input type="hidden" name="id" class="form-control">
                                <input type="text" class="form-control" name="nama_kerusakan" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" class="form-control" name="harga_perbaikan" required>
                            </div>
                        </div>
                    </div>
                    <hr class="sidebar-divider">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fas fa-times"></i>
                        Batal</button>
                    <button class="btn btn-primary float-right" type="submit" name="tambah"><i class="fas fa-save"></i>
                        Tambah</button>
                    <button class="btn btn-primary float-right" type="submit" name="ubah"><i class="fas fa-save"></i>
                        Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>