<?php

	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}if ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}if($_SESSION['rol']==4) {
		header("Location:index.html");
    }
	elseif($_SESSION['rol'] ==3){
		header("Location:beneficiario.php");
	}
    
    
	?>
<?php 
    include 'global/configura.php';
    include 'global/conexion.php';
    include 'temp/cabecera_donador.php';
    
    
    ?>
    <br>
	
		<div class="row">

	<body>
        <div class="container">
            <?php
            error_reporting(0);
            $mensaje = $_GET["mensaje"];
            if ($mensaje == 1) {
                echo "<p class='btn  btn-danger'><i class='icon-trash icon-white'></i> El Reporte fue eliminado con éxito.</p><br><br>";
            

                
        
            }
            if ($mensaje == 2) {
                echo "<p class='btn  btn-success'><i class='icon-ok icon-white'></i> El Reporte fue guardado con éxito.</p><br><br>";
            }
            if ($mensaje == 3) {
                echo "<p class='btn  btn-warning'><i class='icon-refresh icon-white'></i> El Reporte fue modificado con éxito.</p><br><br>";
            }
        ?>
        <form class="form-horizontal" action="AgregarEstudiante.php" method="post">
            <div class="control-group" align="center">
                <label class="control-label" for="inputNEst"></label>
                <div class="controls">
                    <input type="text" name="area" id="inputNEst" class="input-xlarge" placeholder="Area"/>
                </div>
            </div>
             <div class="control-group" align="center">
                <label class="control-label" for="inputAEst"></label>
                <div class="controls">
                    <input type="text" name="maquina" id="inputAEst" class="input-xlarge" placeholder="Maquina"/>
                </div>
            </div>
             <div class="control-group" align="center">
                <label class="control-label" for="inputEEst"></label>
                <div class="controls">
                    <input type="text" name="codigo" id="inputEEst" class="input-xlarge" placeholder="Codigo de la maquina"/>
                </div>
            </div>
            <?php
            date_default_timezone_set('America/Mexico_City');
            $fecha_actual=date("Y-m-d H:i:s");
            ?>
            <div class="control-group" align="center">
                <label class="control-label" for="inputSEst"></label>
                <div class="controls">
                    <input type="text" value="" name="fecha" id="inputSEst"  class="input-xlarge" placeholder="Fecha"/>
                </div>
            </div>
            
            <div class="control-group" align="center">
                <label class="control-label" for="inputMaño"></label>
                <div class="controls">
                    <input type="text" name="diagnostico" id="inputMaño" class="input-xlarge" placeholder="Diagnostico del solicitante"/>
                </div>
            </div>

            <div class="control-group" align="center">
                <label class="control-label" for="inputMNu"></label>
                <div class="controls">
                    <input type="text" name="firma" id="inputMNu" class="input-xlarge" placeholder="Firma interna solicitante"/>
                </div>
                </div>
                
             <br>
            <div class="control-group"align="center">
                <div class="controls">
                    <button type="submit" class="btn btn-default btn-primary"><i class="icon-book icon-white"></i> Generar Reporte</button>
                   
                </div>
            </div>
             
        </form>
			<br>
			<br>
            <h3>Tabla de Ordenes de trabajo pendientes</h3>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="tr-head">
                        <th>Area</th>
                        <th>Maquina</th>
                        <th>Codigo</th>
                        <th>Fecha y Hora</th>
                        <th>Diagnostico</th>
                        <th>Firma Interna</th>
                        <th>Estatus</th>
                        <th>ID</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
                        require_once("connect_estudiantes.php");
                        if ($users->count()>0)
                        {
                            $datos = $users->find(['Estatus' => 'Pendiente']);
                            foreach ($datos as $dato) {   

                    ?>
                    <tr>
                        <td><?php echo $dato["Area"]; ?></td>
                        <td><?php echo $dato["Maquina"]; ?></td>
                        <td><?php echo $dato["Codigo"]; ?></td>
                        <td><?php echo $dato["Fecha"]; ?></td>
                        <td><?php echo $dato["Diagnostico"]; ?></td>
                        <td><?php echo $dato["FirmaInterna"]; ?></td>
                        <td><?php echo $dato["Estatus"]; ?></td>
                        <td><?php echo $dato["_id"]; ?></td>

                        
            

                    </tr>
                    <?php
                        }
                    }else{
                    ?>
                    <tr>
                        <td colspan="4"><h4><i class="icon-info-sign"></i> Sin registros en la Base de Datos</h4></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>   
    </body>
</div>


