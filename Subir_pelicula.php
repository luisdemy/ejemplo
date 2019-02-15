<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="/static/css/bootstrap-theme.css">
<link rel="stylesheet" href="fontawesome-free-5.0.12/web-fonts-with-css/css/fontawesome-all.min.css">
   
   
    <link rel="stylesheet" href="js/bootstrap.js">
</head>




<body>
   
   <blockquote style="margin-left: 30px; margin-right: 30px">
   <div class="row">
       
       <div class="col-lg-12 col-sm-12">
           
           <form method="POST" action="subir.php" enctype="multipart/form-data">
           
           <h3>Nombre de la pelicula</h3>
           <input type="text" name="nombre" required class="form-control"  placeholder="Nombre De La Pelicula"/>
           
           <h3>Año de la pelicula</h3>
           <input  name="anio" required class="form-control" placeholder="Año De La Pelicula"/>
           
           <h3>Categoria</h3>
           <select name="categoria" required class="form-control" id="">
               <option value="Acción">Acción</option>
               <option value="Animación">Animación</option>
               <option value="Aventura">Aventura</option>
               <option value="Ciencia Ficción">Ciencia Ficción</option>
               <option value="Comedia">Comedia</option>
               <option value="Drama">Drama</option>
               <option value="Romance">Romance</option>
               <option value="Terror">Terror</option>
               
               
                
           </select>
           
           <h3>Descripción</h3>
           <textarea name="descripcion" class="form-control" id="" cols="2" rows="2"></textarea>
           
           <h3>Peso</h3>
           <input  name="peso" required class="form-control" placeholder="Peso De La Pelicula En Mb."/>
           
           <h3>Imagen</h3>
           <input name="imagen" required class="form-control" type="file" >

            <button class="btn-success">agregar</button>
           
           </form>
           
       </div>
   </div>
   
   </blockquote>
   

   <script src="js/jquery-3.2.1.min.js"></script>  
   <script src="js/bootstrap.min.js"></script> 
</body>


</html>








