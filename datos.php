<?php 

// Archivo para recibir los datos y almacenarlos en la BBDD


    if($_SERVER['REQUEST_METHOD']=='POST'){
        require('conexion.php');

        try{

                $nombre=$_POST['camponombre'];
                $direccion=$_POST['campodireccion'];
                $caracteristica=$_POST['campocaracteristica'];
                $numero=$_POST['camponumero'];
            
                $stmt=$conn->prepare('INSERT INTO info_contactos VALUES(NULL,:nombre,:direccion,:caracteristica,:numero)');
                
                $stmt->execute(array(':nombre'=>$nombre,':direccion'=>$direccion,':caracteristica'=>$caracteristica,':numero'=>$numero));
            
            
            
            
            
            
            }catch(PDOException $e){
                echo "Error: ".$e->getMessage();
            }

        header('location:index.php');

    }









?>