<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.html");
}if ($_SESSION['rol']==2) {
	header("Location:donador.php");
}if($_SESSION['rol'] == 4){
    header("Location:index.html");
}elseif($_SESSION['rol'] ==3){
    header("Location:beneficiario.php");
}

?>
<?php
	include 'temp/cabeceraadmin.php';
	?>
<body>
 
 <div style="margin-top: 9%;">
     <table class="table table-bordered" >
         <thead >
             <tr>
                 <th colspan="8">Lista de Usuarios</th>
             </tr>
         </thead>
         <tbody >
             <tr>
                 <td class="table-primary">ID</td>
                 <td>Nombres</td>
                 <td>Contraseña</td>
                 <td>Correo</td>
                 <td>Contraseña administrador</td>
                 <td>Roles</td>
                 <td colspan="2">Operaciones</td>
             </tr>
             <?php
             $conectar= new mysqli('localhost','root', '', 'academ');
 
             $orden="SELECT * FROM login";
             $resultado= $conectar->query($orden);
             while($row=$resultado->fetch_assoc()){
             ?>
                 <tr>
                     <td><?php echo $row['id'];?></td>
                     <td><?php echo $row['user'];?></td>
                     <td><?php echo $row['password'];?></td>
                     <td><?php echo $row['email'];?></td>
                     <td><?php echo $row['pasadmin'];?></td>
                     <td><?php echo $row['rol'];?></td>
                     <td><a href="eliminar.php?id=<?php echo $row['id']; ?>"><button  class="btn btn-danger" type ='button' >Eliminar</button></a></td>;
                     <td><a href="actualizar.php?id=<?php echo $row['id']; ?>"><button class="btn btn-success" type ='button' >Editar</button></a></td>;
                     
                 </tr>
 
             <?php 
                 }
             ?>
         </tbody>
     </table>
 </div>
 
 </body>
 </html>