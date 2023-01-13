<div class="page-header">
    <h3>Data Macbook </h3>
</div>

<a href="<?php echo base_url().'macbook/macbook_add';?>" class="btn btn-primary btn-sn"><span class="glyphicon glyphicon-plus"></span>Mobil Baru</a>
<br/><br/>
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover" id="table-datatable">
    <thead>
        <tr>
            <th>No </th>
            <th>Merk Mobil</th>
            <th>Plat</th>
            <th>Warna</th>
            <th>Tahun pembuatan</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no=1;
        foreach($macbook as $m){
            ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $m->macbook_type; ?></td>
            <td><?php echo $m->macbook_serial; ?></td>
            <td><?php echo $m->macbook_warna; ?></td>
            <td><?php echo $m->macbook_tahun; ?></td>
            <td>
                <?php
                if ($m->macbook_status == "1") {
                    echo "Tersedia";
                } elseif ($m->macbook_status == "2") {
                    echo "Sedang di Rental";
                }
                ?>
            </td>
            <td>
                <a class="btn btn-warning btn-sn" href="<?php echo base_url().'macbook/macbook_edit/',$m->macbook_id;?>"><span class="glyphicon glyphicon-plus"></span>Edit</a>
                <a class="btn btn-danger btn-sn" href="<?php echo base_url().'admin/macbook_hapus/',$m->macbook_id;?>"><span class="glypicon glyphicon-trash"></span>Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>













