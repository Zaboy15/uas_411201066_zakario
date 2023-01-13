<!DOCTYPE html>
<html>
<head>
	<title>Login - Website Sewa Mobil </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url(). 'assets/js/bootstrap.js'; ?>"></script>
</head>
<body>
<div class="container">
    <div class="col-md-4 col-md-offset-4" style="margin-top: 50px">
        <center>
            <h2>PERANCANGAN WEBSITE SEWA MOBIL</h2>
            <h3 class="display-5"><br>LOGIN</h3>
        </center>
    
        <?php
        if(isset($_GET['pesan'])) {
            if($_GET['pesan'] == "gagal") {
                echo "<div class='alert alert-danger'>Login gagal! Username dan password salah.</div>";
            }else if($_GET['pesan'] == "logout") {
                echo "<div class='alert alert-danger'>Anda telah logout.</div>";
            }else if ($_GET['pesan'] == "belumlogin"){
                echo "<div class='alert alert-success'>Silahkan login dulu.</div>";
            }
        }
        ?>
        <br/>
        <div class="panel panel-default">
            <div class="panel-body">
                <form method="post" action="<?php echo base_url(). 'welcome/login' ?>"><br><br>
                
                    <center>
                	<p>Masukan username Anda</p>
                    <div class="mb-3">
                        <input type="text" name="username" placeholder="Username" class="form-control">
                        <?php echo form_error('username'); ?>
                    </div>
                    <br>
                    <p>Masukan Password Anda</p>
                    <div class="mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                        <?php echo form_error('password'); ?>
                    </div>
                    <br>
                    <br>
                    </center>
                    <div class="mb-3">
                    	<center>
                        <input type="submit" value="Login" class="btn btn-primary">
                        </center>
                    </div>
                </form>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</div>
</body>
</html>
