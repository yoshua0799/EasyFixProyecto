<?php

	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.html");
	}if ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}if($_SESSION['rol'] == 4){
		header("Location:index.html");
	}
	elseif($_SESSION['rol'] ==2){
		header("Location:donador.php");
	}

	?>
    <?php 
    include 'global/conexion.php';
    include 'temp/cabecera.php';
    ?>

<body style="background-color: white;"> 
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="margin-top: 5%;">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/constru.jpg" class="d-block w-50" alt="..." style="margin-left: 300px; min-width: 250px">
                
                
              </div>