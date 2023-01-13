<div class="page-header">
    <h3>Macbook Baru</h3>
</div>

<form action="<?php echo base_url().'macbook/macbook_add_act' ?>" method="post">
    <div class="form-group">
        <label>Type Macbook</label>
        <input type="text" name="type" class="form-control">
        <?php echo form_error('type'); ?>
    </div>
    <div class="form-group">
        <label>Serial Number</label>
        <input type="text" name="serial" class="form-control">
    </div>
    <div class="form-group">
        <label>Warna</label>
        <input type="text" name="warna" class="form-control">
    </div>
    <div class="form-group">
        <label>Tahun Keluaran </label>
        <input type="text" name="tahun" class="form-control">
    </div>
    <div class="form-group">
        <label>Status Mobil</label>
        <select name="status" class="form-control">
            <option value="1">Tersedia</option>
            <option value="2">Sedang Di Rental</option>
        </select>
        <?php echo form_error('status'); ?>
    </div>
    <div class="form-group">
        <input type="submit" value="Simpan" class="btn btn_primary">
    </div>
</div>
</form>
