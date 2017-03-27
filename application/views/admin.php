<?php header('Content-Type: text/html; charset=iso-8859-1'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
		<?php include 'includes/header.php';?>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
</head>
<body>
		
		<div id="wrapper">
			
			<?php include 'includes/navigation.php';?>
			<div id="page-wrapper">
		        <div class="container-fluid">
				<div class="row"><div id="msgNotification"></div></div>
				<div class="row"><div id="respModal"></div></div>
				<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Administrador <small>painel</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="<?= site_url('admin/')?>"> Home </a> <span id="breadCrumb"></span>
                            </li>
                        </ol>
                    </div>
 </div>
					<?php echo $output; ?>
				
				</div>
			</div>
			<?php include 'includes/scripts.php';?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</body>
</html>
