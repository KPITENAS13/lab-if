<div class="module">
    <div class="module-head" style="text-align: center">
        <h3>
            Jadwal Pengggunaan Lab Ruang 2401</h3>
    </div>
    <div class="module-body table">
        <table id="tabel1" cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped" width="100%">
            <thead>
                <tr>
                    <th>
                        Kegiatan
                    </th>
                    <th>
                        Waktu
                    </th>
                    <th>
                        Penanggung Jawab
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                include './query/tabel_jadwal_lab1.php';
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>
                        Kegiatan
                    </th>
                    <th>
                        Waktu
                    </th>
                    <th>
                        Penanggung Jawab
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>