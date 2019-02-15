<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="fontawesome-free-5.0.12/web-fonts-with-css/css/fontawesome-all.min.css">
   <link rel="stylesheet" href="css/flexboxgrid.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/estilos.css">
    
</head>
<body>
   
   
   <?php
    
    include('conexion.php');
    
    $query = "SELECT * FROM peliculas";
    $res = mysqli_query($con, $query);
    
    
    
     ?>   
        <div class="productos">
        
        <div class="row center-sm">
            
            <?php
            while( $row = mysqli_fetch_assoc($res)){
                ?>
            
            <div class="col-lg-2 col-md-3 col-sm-3  product">
              
              
               
               <div class="card">
                <center>
                <h4><?php  echo $row['nombre']; ?></h4>
               
                <img src="data:iamge/jpg;base64,<?php echo base64_encode($row['portada']); ?>" />
                
                <br>
                <?php  echo $row['categoria']; ?>
                <br>
                <?php  echo $row['anio']; ?>
                <br>
                <?php  echo $row['peso']; ?>
                <br>
                
                </center>
            </div>
            <br>
            </div>
            
            <?php    
    }
    
    ?>
            
        </div>
        
        </div>
        
        
    
   
    
    
    
    
    
    
    
    
    <script src="js/jquery-3.2.1.min.js"></script>  
   <script src="js/bootstrap.min.js"></script> 
   <script src="js/index.js"></script>
    
</body>
</html>