<div class="container-fluid">
    <h1>Data TroubleShoot</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Ticket No.</th>
                <th scope="col">Troubleshoot Date</th>
                <th scope="col">Trouble Category</th>
                <th scope="col">Request by</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($request as $r) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $r['ticket_no']; ?></td>
                    <td><?= $r['troubleshoot_date']; ?></td>
                    <td><?= $r['troubleshoot_cat']; ?></td>
                    <td><?= $r['request_by']; ?></td>
        </tbody>
    <?php } ?>
    </table>

    <div class="container-fluid">
        <form action="<?= base_url('main/tambah_data'); ?>" method="post">
            <h1>Tambah Data</h1>

            <div class="form-group mb-2">
                <input type="text" class="form-control" name="ticket" id="ticket" placeholder="Ticket No">
            </div>
            <div class="form-group mb-2">
                <input type="date" class="form-control" name="trob_date" id="trob_date" placeholder="Trouble Date">
            </div>
            <div class="form-group mb-2">
                <select class="form-control mr-sm-2" name="trob_cat" id="trob_cat">
                    <option value="">--Pilih Kategori--</option>
                    <option value="Outlook">Outlook</option>
                    <option value="Microsoft Office">Microsoft Office</option>
                    <option value="Internet">Internet</option>
                    <option value="Printer">Printer</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <select class="form-control mr-sm-2" name="req_by" id="req_by">
                    <option value="">--Pilih User--</option>
                    <option value="Fajar">Fajar</option>
                    <option value="Reza">Reza</option>
                    <option value="Yanti">Yanti</option>
                    <option value="Ivanna">Ivanna</option>
                    <option value="Febri">Febri</option>
                    <option value="Riki">Riki</option>
                    <option value="Alvin">Alvin</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
        <table class="table">
            <thead>
                <h2>Jumlah Terbanyak by Karyawan</h2>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Request by</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($jml as $r) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $r['request_by']; ?></td>
                        <td><?= $r['jumlah']; ?></td>
                    </tr>
                <?php }; ?>
            </tbody>
        </table>
        <table class="table">
            <thead>
                <h2>Jumlah Terbanyak by Kategori</h2>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($jml_cat as $r) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $r['troubleshoot_cat']; ?></td>
                        <td><?= $r['jumlah']; ?></td>
                    </tr>
                <?php }; ?>
            </tbody>
        </table>
    </div>

</div>