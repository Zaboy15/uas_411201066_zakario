<div class="page-header">
    <h3>Edit Laptop</h3>
</div>
<?php foreach($laptop as $m) { ?>
<form action="<?php echo base_url().'laptop/laptop_edit_act' ?>" method="post" enctype="multipart/form-data">
<div class="form-group">
    
    <div class="form-group">
        <label>Merk Laptop</label>
        <input type="hidden" name="id_laptop" value="<?php echo $m->id_laptop; ?>">
        <input type="text" name="merk_laptop" class="form-control" value="<?php echo $m->merk_laptop; ?>">
        <?php echo form_error('merk_laptop'); ?>
    </div>
    <div class="form-group">
        <label>Spesifikasi</label>
        <input type="text" name="spesifikasi" class="form-control" value="<?php echo $m->spesifikasi; ?>">
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input type="numbe" name="harga" class="form-control" value="<?php echo $m->harga; ?>">
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
<?php }?>

