<!DOCTYPE html>
<html>
<head>
	<title>Dasboard - Website Sewa Macbook</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/datatabel/datatabels.css' ?>">
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'; ?>" ></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/datatable/jquery.dataTable.js'; ?>" ></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/datatabel/datatables.js'; ?>" ></script>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <! -- Brand and toggle get grouped for better mobile display -- >
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" ariaexpanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                <a class="navbar-brand" href="<?php echo base_url().'admin';?>">Sewa Macbook Jakarta</a>
                </div>
        <div class="collapse navbar-collapse" id="bs-example-navba-collapse=1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url().'admin'; ?>"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                <li><a href="<?php echo base_url(). 'macbook/macbook';?>"><i class="glyphicon glyphicon-list-alt"></i> Data Macbook</a></li>
                <li><a href="<?php echo base_url(). 'admin/kostumer';?>"><i class="glyphicon glyphicon-list-alt"></i> Data Customer</a></li>
                <li><a href="<?php echo base_url(). 'admin/transaksi';?>"><i class="glyphicon glyphicon-list-alt"></i> Data Transaksi</a></li>
                <li><a href="<?php echo base_url(). 'admin/laporan';?>"><i class="glyphicon glyphicon-list-alt"></i> Data Laporan</a></li>
           
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url().'admin/logout'; ?>"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdwon" role="button"aria-hapopup="true" aria-expanded="false"><?php echo "Halo, <b>".$this->session->userdata('nama'); ?></b> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo base_url().'admin/ganti_password' ?>"><i class="glyphicon glyphicon-lock"></i>Ganti password</a>
                    </li>
                </ul>
             </li>
        </ul>
    </div><!--/.navbar-collapse -->
</div><!--/.container-fluid -->
</nav>
<div class="container">
</body>
</html>
