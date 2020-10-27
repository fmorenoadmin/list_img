<?php
	session_start();
	$rut='./';
	require_once($rut.'constant.php');
	$pagina='Listado de Imágenes';
	$action='imagenes.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?= $pagina; ?></title>
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

            <!-- CSS Libraries -->
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
            <link href="<?= FMMA; ?>lib/animate/animate.min.css" rel="stylesheet">
            <link href="<?= FMMA; ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
            <link href="<?= FMMA; ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

            <!-- PLUGINS Libraries -->
            <link rel="stylesheet" href="<?= FMMA; ?>plugins/select2/css/select2.min.css">
            <link rel="stylesheet" href="<?= FMMA; ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
            <link rel="stylesheet" href="<?= FMMA; ?>plugins/toastr/toastr.min.css">
            <script type="text/javascript" src="<?= FMMA; ?>plugins/ckeditor/ckeditor.js"></script>
        <!-- Template Stylesheet -->
        <link href="<?= FMMA; ?>css/style.css" rel="stylesheet">

    <?php
    	$inf=null;

    	require_once($rut.DIRACT.$action);
    	$inf = index($rut);

    	if (isset($_SESSION['inf2'])){ $inf2=$_SESSION['inf2']; unset($_SESSION['inf2']); }else{ $inf2=null; }
    ?>
</head>
<body>

        <!-- Portfolio Start -->
        <div class="portfolio" id="portfolio">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>My Portafolio</p>
                    <h2>My Excellent Portafolio</h2>
                </div>
                <div class="row">
                    <div class="col-12">
						<?php echo $inf; $inf=null; ?>
                    </div>
                </div>
                <div class="row portfolio-container">
					<?php echo $inf2; $inf2=null; ?>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?= FMMA; ?>lib/easing/easing.min.js"></script>
        <script src="<?= FMMA; ?>lib/wow/wow.min.js"></script>
        <script src="<?= FMMA; ?>lib/waypoints/waypoints.min.js"></script>
        <script src="<?= FMMA; ?>lib/typed/typed.min.js"></script>
        <script src="<?= FMMA; ?>lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="<?= FMMA; ?>lib/isotope/isotope.pkgd.min.js"></script>
        <script src="<?= FMMA; ?>lib/lightbox/js/lightbox.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.3/umd/popper.min.js" integrity="sha512-53CQcu9ciJDlqhK7UD8dZZ+TF2PFGZrOngEYM/8qucuQba+a+BXOIRsp9PoMNJI3ZeLMVNIxIfZLbG/CdHI5PA==" crossorigin="anonymous"></script>

        <!-- Template Javascript -->
        <script src="<?= FMMA; ?>js/main.js"></script>
</body>
</html>