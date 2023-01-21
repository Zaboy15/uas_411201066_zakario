<div class="page-header">
    <h3>Laptop Baru</h3>
</div>

<form action="<?php echo base_url().'laptop/laptop_add_act' ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Merk Laptop</label>
        <input type="text" name="merk_laptop" class="form-control">
        <?php echo form_error('merk_laptop'); ?>
    </div>
    <div class="form-group">
        <label>Spesifikasi</label>
        <input type="text" name="spesifikasi" class="form-control">
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input type="text" name="harga" class="form-control">
    </div>
    <div class="form-group">
    <label>Pilih 1 Gambar</label>
    <input type='file' name='file_laptop' size='20' />
    </div>
    <div class="form-group">
        <input type="submit" value="Simpan" class="btn btn_primary">
    </div>

    
</div>
</form>
