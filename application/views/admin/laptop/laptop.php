<div class="page-header">
    <h3>Data Laptop </h3>
</div>

<a href="<?php echo base_url().'laptop/laptop_add';?>" class="btn btn-primary btn-sn"><span class="glyphicon glyphicon-plus"></span>Laptop Baru</a>
<br/><br/>
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover" id="table-datatable">
    <thead>
        <tr>
            <th>No </th>
            <th>Merk Laptop</th>
            <th>Spesifikasi</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no=1;
        foreach($laptop as $m){
            ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $m->merk_laptop; ?></td>
            <td><?php echo $m->spesifikasi; ?></td>
            <td><?php echo $m->harga; ?></td>
            <td><img src="<?php echo base_url()."/upload/".$m->gambar; ?>" alt="laptopImage" width="200" height="200" title="" rel="lightbox" /> </td>
            <td>
                <a class="btn btn-warning btn-sn" href="<?php echo base_url().'laptop/laptop_edit/',$m->id_laptop;?>"><span class="glyphicon glyphicon-plus"></span>Edit</a>
                <a class="btn btn-danger btn-sn" href="<?php echo base_url().'laptop/laptop_delete/',$m->id_laptop;?>"><span class="glyphicon glyphicon-trash"></span>Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>













