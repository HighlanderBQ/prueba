 <?php
        if(count ($_POST)> 0){
        foreach($_POST as $k => $v){
            echo "$k : : $v <br>";
        }
            $meta=$_POST['meta'];
            $descripcion= $_POST['descripcion'];
            $plazo= $_POST['plazo'];

    }

    if(count ($_GET)>0){
        foreach($_GET as $k => $v){
            echo "$k :: $v <br>";
        }
            $meta=$_GET ['meta'];
            $descripcion= $_GET ['descripcion'];
            $plazo= $_GET['plazo'];
    }
        ?>