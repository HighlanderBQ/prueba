<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<?php  
 include('conexion.php');    
    ?>
    <head>
        <title>Formulario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>TODO write content</div>
        
        <br>
        <form method="POST">
            <label for="meta">Meta:</label>
            <input type="text" name="meta" id="meta">
		<br>
                <span>
                    yo <span class="enfasis">escribo </span>algo
                </span>
		<br>
            <label for="descripcion">Descripcion</label>
			<br>
            <textarea name="descripcion" placeholder="Escribe la descripcion"></textarea>
            <br>
            <br>
            <label for="plazo">Plazo: </label>
            <select name="plazo">
            <option value="1">Uno </option>
            <option value="3">Tres </option>
            <option value="5">Cinco </option>
			<option value="10">Diez </option>
            </select>
            <br>
            <br>
			
            <label for="indispensable">Es indispensable ?</label>
            <input type="radio" name="Indispensable" value="si">Si <!-- que tenga un valor ya que es "variable"-->                        
            <input type="radio" name="puedo vivir sin ello" value="no">NO
            <br>
            <label for="cuando">Cuando: </label>
            <label for="antes">Antes de la carrera</label>
            <input type="checkbox" name="antes" id="antes" value="antes">
            
            <label for="durante">Durante de la carrera</label>
            <input type="checkbox" name="durante" id="durante" value="durante">
            
            <label for="despues">Despues de la carrera</label>
            <input type="checkbox" name="despues" id="despues" value="despues">
            <br>
            <input type="hidden" name="codigo" value="1234" id="codigo">;)
            <br><br>
            Password: <input type="password" name="pass" value="pepe"> <br>
            <br>
            <input type="date" name="fecha"><br><br>
            <input type="number" name="edad"> <br>                     
            <br>
            <input type="submit" value="Crear meta" >
            <button type="submit" value="meta">Crear meta</button><br>
                
        </form>

        <?php
        if(count($_POST) > 0){
        foreach($_POST as $k => $v){
            echo "$k : : $v <br>";
        }
            $meta=$_POST['meta'];
            $descripcion= $_POST['descripcion'];
            $plazo= $_POST['plazo'];

            $sql= "INSERT INTO mis_metas (meta, descripcion, plazo) VALUES ('$meta', '$descripcion', '$plazo')";
            $conn->exec($sql);
            
       

/*
            if(count($metas)){
                foreach($metas as $values){

                }
            }

    }*/
/*





    if(count ($_GET)>0){
        foreach($_GET as $k => $v){
            echo "$k :: $v <br>";
        }
            $meta=$_GET ['meta'];
            $descripcion= $_GET ['descripcion'];
            $plazo= $_GET['plazo'];
    */}
    
        ?>
        
    </body>
</html>
