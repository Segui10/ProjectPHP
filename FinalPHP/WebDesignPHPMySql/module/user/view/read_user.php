<div id="contenido">

<?php
if(isset($_GET['fav'])){
    if($_GET['fav']==0){
    echo '<div class="alert info">';
      echo '<span class="closebtn">&times;</span> ' ;
      echo '<strong>Vaya!</strong> Acabas de eliminar el mobil de favoritos.';
    echo '</div>';
} elseif($_GET['fav']==1) {
    echo '<div class="alert success">';
    echo '<span class="closebtn">&times;</span>';
    echo '<strong>Perfecto!</strong> Se ha añadido el telefono a favoritos.';
    echo '</div>';
}
}
?>
       <script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
</script>
    <h1>Mobile summary</h1>

    <div class="conte">

        <div class="general">
        <table class="ctable">
            <tr><td><?php echo '<img class="readima" src="'.$user['urlimg'].'"/>'; ?></td>
                <td valign="top">
                    <div class="readmarca"><?php echo $user['marca']; ?></div>
                    <p><div class="readmodel"> <?php echo $user['model']; ?></div></p>
                    <table class="ctable2">
                    <tr>
                        <td>
                            <div class="readantutu">
                            <img class="imgat" src="https://d2giyh01gjb6fi.cloudfront.net/images/kifeatures/f_antutu_6.png"/>
                            <div class="fc100antutu">
                              
                                
                            </div>
                            <p class="antbench"><?php echo $user['antutu']; ?><p>
                            </div> 
                        </td>
                        <td><div class="readproc">
                            <img class="readpro" src="http://d2giyh01gjb6fi.cloudfront.net/images/kifeatures/f_processor_v4.png"/> <b class="cor">x10 Cores</b>
                        </div></td>
                        <td><div class="readscre">
                            <img class="readscr" src="https://d2giyh01gjb6fi.cloudfront.net/images/kifeatures/f_screen_v2.png"/> <b class="cora"><?php echo $user['screen']; ?></b>
                        </div></td>
                    </tr>
                    </table>
                </td>
            </tr>
        </table>
            <div class="readbutton">
            <div class="readreturn">
            <?php
                echo '<a href="index.php?page=controller_user&op=list">Volver</a>';
            ?>
            </div>
            <div class="readupdate">
            <?php
                echo '<a href="index.php?page=controller_user&op=update&id='.$user['user'].'">Update</a>';
            ?>
            </div>
            <div class="readdelete">
            <?php
                echo '<a href="index.php?page=controller_user&op=delete&id='.$user['user'].'">Delete</a>';
            ?>
            </div>
            
            </div>
            </div>
            
        </div>
        <div class="specific">
            <div class="screen">
                <p><b>Screen</b></p>
                <hr>
                <img class="imgread" src="view/img/telefono-inteligente.png">
                <p class="borom">Tamaño de la pantalla: <?php echo $user['screen']; ?>"</p>
                <p class="borom">Tipo de pantalla: <?php echo $user['sty']; ?></p>
                <p class="borom">Resolucion de la pantalla: <?php echo $user['repan']; ?></p>
                <br>
            </div>
            <div class="processor">
                <p><b>Procesador</b></p>
                <hr>
                <img class="imgread" src="view/img/chip.png">
                <p class="borom">Marca de procesador: <?php echo $user['pro']; ?></p>
                <p class="borom">Numero de cores: <?php echo $user['core']; ?></p>
                <p class="borom">Velocidad de los cores: <?php echo $user['speed']; ?></p>
                <br>
                </div>
            <div class="gen_info">
                <p><b>General Info</b></p>
                <hr>
                <img class="imgread" src="view/img/telefono-inteligente1.png">
                <p class="borom">Sistema Operativo: <?php echo $user['sisop']; ?></p>
                <p class="borom">Pais de Fabricacion: <?php echo $user['country']; ?></p>
                <p class="borom">Fecha de lanzamiento: <?php echo $user['birthdate']; ?></p>
                <p class="borom">Puntuacion Antutu: <?php echo $user['antutu']; ?></p>
                <p class="borom">Cobertura: <?php echo $user['cober']; ?></p>
                 <p class="borom">Cobertura: <?php echo $user['email']; ?></p>
                <br>
                </div>
           
            <div class="overwiew">
                <p><b>Overview</b></p>
                <hr>
                <p><?php echo $user['comment']; ?></p>
                
                </div>
            </div>
            <div class="favorite">
               <p><b>Favorite</b></p>
               <hr>
                
                    <?php
                    
                    if($user['fav']==1) {
                        echo '<div class="readdelete">';
                        echo '<a href="index.php?page=controller_user&op=read&id='.$user['user'].'&fav=0">-</a>';
                        echo '</div>';
                    }elseif($user['fav']==0) {
                         echo '<div class="readfavins">';
                        echo '<a href="index.php?page=controller_user&op=read&id='.$user['user'].'&fav=1">+</a>';
                        echo '</div>';
                    }
                    ?>
            
            </div>
             </div>
        </div>
    </div>
    
    <p>
            
    <!--<table border='2'>
        <tr>
            <td>Usuario: </td>
            <td>
                <?php
                    echo $user['user'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Sistema Operativo: </td>
            <td>
                <?php
                    echo $user['sisop'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Marca: </td>
            <td>
                <?php
                    echo $user['marca'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Modelo: </td>
            <td>
                <?php
                    echo $user['model'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Tamaño de la pantalla: </td>
            <td>
                <?php
                    echo $user['screen'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Tipo de pantalla: </td>
            <td>
                <?php
                    echo $user['sty'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Resolucion de pantalla: </td>
            <td>
                <?php
                    echo $user['repan'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Procesador: </td>
            <td>
                <?php
                    echo $user['pro'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Cores: </td>
            <td>
                <?php
                    echo $user['core'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Speed: </td>
            <td>
                <?php
                    echo $user['speed'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Fecha de nacimiento: </td>
            <td>
                <?php
                    echo $user['birthdate'];
                ?>
            </td>
        </tr>
        
        
        
        <tr>
            <td>Pais: </td>
            <td>
                <?php
                    echo $user['country'];
                ?>
            </td>
        </tr>
        
        
        <tr>
            <td>Observaciones: </td>
            <td>
                <?php
                    echo $user['comment'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Img: </td>
            <td>
                <?php
                
                    echo $user['urlimg'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Antutu: </td>
            <td>
                <?php
                
                    echo $user['antutu'];
                ?>
            </td>
        </tr>
        
    </table>-->
    </p>
   
</div>