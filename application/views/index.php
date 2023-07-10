<div class="container-fluid">
    <h1>Tabel Saldo</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Customer</th>
                <th scope="col">Nama</th>
                <th scope="col">Saldo</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($jml as $r) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $r['id_cust']; ?></td>
                    <td><?= $r['nama']; ?></td>
                    <td><?= $r['total_uang']; ?></td>
        </tbody>
    <?php } ?>
    </table>

    <form action="<?= base_url('main/tambah_user'); ?>" method="post">
            <h1>Tambah Data User</h1>

            <div class="form-group mb-2">
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama User">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>

    <div class="container-fluid">
        <form action="<?= base_url('main/tambah_data'); ?>" method="post">
            <h1>Tambah Data Transaksi</h1>

             <div class="form-group mb-2">
                <select class="form-control mr-sm-2" name="user" id="user">
                    <option> -- Pilih User --</option>
                <?php foreach ($user as $u) { ?>
                    <option value="<?= $u['id_cust']; ?>"><?= $u['nama']; ?></option>
                <?php } ?>
                </select>
            </div>
             <div class="form-group mb-2">
                <select class="form-control mr-sm-2" name="jenis" id="jenis">
                    <option> -- Pilih Jenis Transaksi --</option>
                    <option value="Debet">Debet</option>
                    <option value="Kredit">Kredit</option>
                </select>
            </div>

            <div class="form-group mb-2">
                <input type="number" class="form-control" name="nominal" id="nominal" placeholder="Nominal anda">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>

        <table class="table">
            <thead>
                <h2>Data Transaksi User</h2>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Transaksi</th>
                    <th scope="col">Nominal</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($trans as $r) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $r['cust_id']; ?></td>
                        <td><?= $r['nominal']; ?></td>
                        <td><?= $r['jenis']; ?></td>
                        <td><?= date('Y-m-d h:i:s', $r['tanggal']); ?></td>
                        <td>
                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url(); ?>main/hapus/<?= $r['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php }; ?>
            </tbody>
        </table>
    </div>

</div>