<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LISTA DE USUARIOS</h3>
    	</div>
    	<div class="row">
    	    <div class="create">
    		<p><a href="index.php?page=controller_user&op=create">Create</a></p>
            </div>
    		<table>
          
                 
                <?php
                    if ($rdo->num_rows === 0){
                       
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO HAY NINGUN USUARIO</td>';
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