<div class="page-header">
    <h3>Edit Macbook</h3>
</div>

<?php foreach($macbook as $m) { ?>
<form action="<?php echo base_url().'admin/mobil_update' ?>" method="post">
    

 
</form>
<?php }?>


<div class="page-header">
    <h3>Edit Macbook</h3>
</div>
<?php foreach($macbook as $m) { ?>
<form action="<?php echo base_url().'macbook/macbook_add_act' ?>" method="post">
<div class="form-group">
    
    <div class="form-group">
        <label>Type Macbook</label>
        <input type="text" name="type" class="form-control" value="<?php echo $m->macbook_type; ?>">
        <?php echo form_error('type'); ?>
    </div>
    <div class="form-group">
        <label>Serial Number</label>
        <input type="text" name="serial" class="form-control" value="<?php echo $m->macbook_serial; ?>">
    </div>
    <div class="form-group">
        <label>Warna</label>
        <input type="text" name="warna" class="form-control" value="<?php echo $m->macbook_warna; ?>">
    </div>
    <div class="form-group">
        <label>Tahun Keluaran </label>
        <input type="text" name="tahun" class="form-control" value="<?php echo $m->macbook_tahun; ?>">
    </div>
    <div class="form-group">
        <label>Status Mobil</label>
        <select name="status" class="form-control">
            <option <?php if($m->macbook_status =="1"){echo "selected='selected'";} echo $m->macbook_status;?> value="1"> Tesedia</option>
            <option <?php if($m->macbook_status =="2"){echo "selected='selected'";} echo $m->macbook_status;?> value="2"> Sedang Di Rental</option>
        </select>
        <?php echo form_error('status'); ?>
    </div>
    <div class="form-group">
        <input type="submit" value="Simpan" class="btn btn_primary">
    </div>
</div>
</form>
<?php }?>

