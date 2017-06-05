<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LISTA DE MÓVILES</h3>
    	</div>
    	<div class="row">
    	    <div class="create">
    		<p><a href="index.php?page=controller_user&op=create">Create</a></p>
            </div>
            </div>
            <div class="search">
            <h1>Filtros:</h1>
            <p>Favoritos:<p>
            <div class="and">
            <p><a href="index.php?page=controller_user&op=list&fav=t">Favoritos</a></p>
            </div>
            <p>Dispositivos: </p>
            <div class="and">
            <p><a href="index.php?page=controller_user&op=list&so=Android">Dispositivos Android</a></p>
            </div>
            <div class="win">
            <p><a href="index.php?page=controller_user&op=list&so=Windows Phone">Dispositivos Windows &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></p>
            </div>
            <div class="ios">
            <p><a href="index.php?page=controller_user&op=list&so=IOS">Dispositivos IOs</a></p>
            </div>
            <div class="all">
            <p><a href="index.php?page=controller_user&op=list">Todos los dispositivos</a></p>
            </div>
            <p>Ordenar</p>
            <div class="and">
            <p><a href="index.php?page=controller_user&op=list&or=antutu">Antutu Benchmark</a></p>
            <p><a href="index.php?page=controller_user&op=list&or=screen">Tamaño de pantalla</a></p>
            </div>
            </div>
    		<table>
          
                 
                <?php
                    if ($rdo->num_rows === 0){
                       
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO HAY TELEFONOS EN LA BASE DE DATOS</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                            if ($row['sisop']==="Android"){
                       		echo '<div class="box">';
                            echo '<div class="ima">';
                            echo '<img class="phimg" src="'.$row['urlimg'].'"/>';
                            echo '</div>';
                            echo '<div class="cont">';
                            echo '<p class="marc">'. $row['marca'] . '</p>';
                            echo '<p class="mod">'. $row['model'] . '</p>';
                            echo '<p class="press">Presentacion:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $row['birthdate'] . '</p>';
                    	   //	echo '<p>'. $row['user'] . '</p>';
                            
                    	    echo '<div class="antutu">';
                    	   	echo '<p><img class="phimg4" src="//d2giyh01gjb6fi.cloudfront.net/images/kifeatures/f_antutu_6.png"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $row['antutu'] .'</p>';
                            echo '</div>';
                    	   	
                            echo '<div class="readl">';
                    	   	echo '<a href="index.php?page=controller_user&op=read&id='.$row['user'].'">Read</a>';
                            echo '</div>';
                            echo '<div class="update">';
                    	   	echo '<a href="index.php?page=controller_user&op=update&id='.$row['user'].'">Update</a>';
                            echo '</div>';
                            echo '<div class="read">';
                    	   	echo '<a href="index.php?page=controller_user&op=delete&id='.$row['user'].'">Delete</a>';
                            echo '</div>';
                    	   	
                            echo '</div>';
                    	   	echo '</div>';
                        }elseif($row['sisop']==="Windows Phone"){
                            echo '<div class="box">';
                            echo '<div class="ima2">';
                            echo '<img class="phimg" src="'.$row['urlimg'].'"/>';
                            echo '</div>';
                            echo '<div class="cont2">';
                            
                            echo '<p class="marc">'. $row['marca'] . '</p>';
                            echo '<p class="mod">'. $row['model'] . '</p>';
                                echo '<p class="press">Presentacion:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $row['birthdate'] . '</p>';
                    	  // 	echo '<p>'. $row['user'] . '</p>';
                            echo '<div class="antutu">';
                            echo '<p><img class="phimg4" src="//d2giyh01gjb6fi.cloudfront.net/images/kifeatures/f_antutu_6.png"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $row['antutu'] .'</p>';
                            echo '</div>';
                    	   	
                    	   	echo '<p>';
                            echo '<div class="readl">';
                    	   	echo '<a href="index.php?page=controller_user&op=read&id='.$row['user'].'">Read</a>';
                            echo '</div>';
                            echo '<div class="update">';
                    	   	echo '<a href="index.php?page=controller_user&op=update&id='.$row['user'].'">Update</a>';
                            echo '</div>';
                            echo '<div class="read">';
                    	   	echo '<a href="index.php?page=controller_user&op=delete&id='.$row['user'].'">Delete</a>';
                            echo '</div>';
                    	   	echo '</p>';
                            echo '</div>';
                    	   	echo '</div>';
                                
                            }elseif($row['sisop']==="IOS"){
                                echo '<div class="box">';
                            echo '<div class="ima3">';
                            echo '<img class="phimg" src="'.$row['urlimg'].'"/>';
                            echo '</div>';
                            echo '<div class="cont3">';
                            
                            echo '<p class="marc">'. $row['marca'] . '</p>';
                            echo '<p class="mod">'. $row['model'] . '</p>';
                            echo '<p class="press">Presentacion:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $row['birthdate'] . '</p>';
                    	 //  	echo '<p>'. $row['user'] . '</p>';
                            echo '<div class="antutu">';
                            echo '<p><img class="phimg4" src="//d2giyh01gjb6fi.cloudfront.net/images/kifeatures/f_antutu_6.png"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $row['antutu'] .'</p>';
                            echo '</div>';
                    	   	
                    	   echo '<p>';
                            echo '<div class="readl">';
                    	   	echo '<a href="index.php?page=controller_user&op=read&id='.$row['user'].'">Read</a>';
                            echo '</div>';
                            echo '<div class="update">';    
                    	   	echo '<a href="index.php?page=controller_user&op=update&id='.$row['user'].'">Update</a>';
                            echo '</div>';
                            echo '<div class="read">';
                    	   	echo '<a href="index.php?page=controller_user&op=delete&id='.$row['user'].'">Delete</a>';
                            echo '</div>';
                    	   	echo '</p>';
                            echo '</div>';
                    	   	echo '</div>';
                            }
                    }
                    }
                ?>
                
            </table>
    	</div>
    </div>
</div>