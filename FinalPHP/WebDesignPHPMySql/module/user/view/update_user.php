<div id="contenido">
    <form class="form" autocomplete="on" method="post" name="aupdate_user" id="update_user" onsubmit="return validate();" action="index.php?page=controller_user&op=update">
  

      
       
    
        <h1>Modificar usuario</h1>
        
            <p>
                Usuario: 
                <input type="text" id="usuario" name="usuario" placeholder="usuario" value="<?php echo $user['user'];?>" readonly/>
                <font color="red">
                    <span id="error_usuario" class="error"/>
                          <?php
                            echo $error['usuario']
                        ?>
                
                </font>
            </p>
            <p>
                Sistema Operativo: 
                <select id="sisop" name="sisop" placeholder="sisop">
                    <?php
                        if($user['sisop']==="Android"){
                    ?>
                        <option value="Android" selected>Android</option>
                        <option value="IOS">IOs</option>
                        <option value="Windows Phone">Windows Phone</option>
                        
                    <?php
                        }elseif($user['sisop']==="IOS"){
                    ?>
                        <option value="Android">Android</option>
                        <option value="IOS" selected>IOs</option>
                        <option value="Windows Phone">Windows Phone</option>
                      
                    <?php
                        }elseif($user['sisop']==="Windows Phone"){
                    ?>
                        <option value="Android">Android</option>
                        <option value="IOS" selected>IOs</option>
                        <option value="Windows Phone" selected>Windows Phone</option>
                   
                    
                    <?php
                            
                        }
                    ?>
                    </select>
                <font color="red">
                    <span id="error_pais" class="error"/>
                        
                </font>
            </p>
            <p>
                Marca: 
                <input type="text" id="marca" name="marca" placeholder="marca" value="<?php echo $user['marca'];?>" />
                <font color="red">
                    <span id="error_marca" class="error">
                        <?php
                           echo $error['marca']
                        ?>
                </span>
                </font>
            </p>
            <p>
                Modelo: 
                <input type="text" id="model" name="model" placeholder="model" value="<?php echo $user['model'];?>" />
                <font color="red">
                    <span id="error_model" class="error">
                    <?php
                           echo $error['model']
                        ?>
                    </span>
                        
                
                </font>
            </p>
             <p>
                Tamaño de pantalla: 
                
                    <?php
                        if ($user['screen']==="3.5"){
                    ?>
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="3.5" checked/>3.5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="4"/>4
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="4.5"/>4.5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="5"/>5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="5.5"/>5.5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="6"/>6
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="6.5"/>6.5
                    <?php    
                        }elseif ($user['screen']==="4"){
                    ?>
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="3.5"/>3.5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="4" checked/>4
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="4.5"/>4.5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="5"/>5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="5.5"/>5.5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="6"/>6
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="6.5"/>6.5
                    <?php    
                        }elseif ($user['screen']==="4.5"){
                    ?>
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="3.5"/>3.5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="4"/>4
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="4.5" checked/>4.5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="5"/>5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="5.5"/>5.5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="6"/>6
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="6.5"/>6.5
                    <?php    
                        }elseif ($user['screen']==="5"){
                    ?>
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="3.5"/>3.5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="4"/>4
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="4.5"/>4.5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="5" checked/>5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="5.5"/>5.5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="6"/>6
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="6.5"/>6.5
                     <?php    
                        }elseif ($user['screen']==="5.5"){
                    ?>
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="3.5"/>3.5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="4"/>4
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="4.5"/>4.5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="5"/>5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="5.5" checked/>5.5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="6"/>6
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="6.5"/>6.5
                    <?php    
                        }elseif ($user['screen']==="6"){
                    ?>
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="3.5"/>3.5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="4"/>4
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="4.5"/>4.5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="5"/>5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="5.5"/>5.5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="6" checked/>6
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="6.5"/>6.5
                    <?php    
                        }elseif ($user['screen']==="6.5"){
                    ?>
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="3.5"/>3.5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="4"/>4
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="4.5"/>4.5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="5"/>5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="5.5"/>5.5
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="6"/>6
                        <input type="radio" id="screty" name="screty" placeholder="screty" value="6.5 checked"/>6.5
                    <?php   
                        }
                    ?>
                
                <font color="red">
                    <span id="error_sexo" class="error"/>
                       
                  
                </font>
            </p>
            <p>
                Tipo de pantalla: 
                <input type="text" id="sty" name="sty" placeholder="sty" value="<?php echo $user['sty'];?>"/>
                <font color="red">
                    <span id="error_sty" class="error">
                    <?php
                           echo $error['sty']
                        ?>
                    </span>
                      
                </font>
            </p>
            <p>
               <label for="so"> Resolucion de la pantalla:</label>
           
                <select id="repan" name="repan" placeholder="repan">
                    <option value="320 x 480">320 x 480</option>
                    <option value="480 x 800">480 x 800</option>
                    <option value="720 x 1280">720 x 1280</option>
                    <option value="1080 x 1920">1080 x 1920</option>
                    <option value="1440 x 2560">1440 x 2560</option>
                </select>
               
                    <span id="error_repan" class="error">
                       
                    </span>
                
            </p>
            <p>
                Tipo de Procesador: 
                <input type="text" id="pro" name="pro" placeholder="pro" value="<?php echo $user['pro'];?>"/>
                <font color="red">
                    <span id="error_pro" class="error">
                    <?php
                           echo $error['pro']
                        ?>
                      </span>
                </font>
            </p>
             <p>
                Numero de Cores: 
                <input type="text" id="core" name="core" placeholder="core" value="<?php echo $user['core'];?>"/>
                <font color="red">
                    <span id="error_core" class="error">
                    <?php
                           echo $error['core']
                        ?>
                      </span>
                </font>
            </p>
            <p>
                Core Speed: 
                <input type="text" id="speed_c" name="speed_c" placeholder="speed_c" value="<?php echo $user['speed'];?>"/>
                <font color="red">
                    <span id="error_speed" class="error">
                     <?php
                           echo $error['speed']
                        ?>
                    </span>
                </font>
            </p>
            
            
            <p>
                Fecha de nacimiento: 
                <input  type="text" id="fecha"  name="fecha_nacimiento" placeholder="fecha de nacimiento" value="<?php echo $user['birthdate'];?>"/>
                <font color="red">
                    <span id="error_fecha_nacimiento" class="error"/>
                        <?php
                         echo $error['fecha_nacimiento']
                        ?>
                </font>
            </p>
            
          
            <p>
                Pais: 
                <select id="pais" name="pais" placeholder="pais">
                    <?php
                        if($user['country']==="España"){
                    ?>
                        <option value="España" selected>España</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Francia">Francia</option>
                    <?php
                        }elseif($user['country']==="Portugal"){
                    ?>
                        <option value="España">España</option>
                        <option value="Portugal" selected>Portugal</option>
                        <option value="Francia">Francia</option>
                    <?php
                        }else{
                    ?>
                        <option value="España">España</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Francia" selected>Francia</option>
                    <?php
                        }
                    ?>
                    </select>
                <font color="red">
                    <span id="error_pais" class="error"/>
                        
                </font>
            
            </p>
            
    
            
            <p>
                Observaciones:
                <textarea cols="30" rows="5" id="observaciones" name="observaciones" placeholder="observaciones"><?php echo $user['comment'];?></textarea>
                <font color="red">
                    <span id="error_observaciones" class="error"/>
                        <?php
                            echo $error['observaciones']
                        ?>
                </font></font>
            </p>
            
            <p>
                Urlimg: 
                <input type="text" id="urlimg" name="urlimg" placeholder="urlimg" value="<?php echo $user['urlimg'];?>"/>
                <font color="red">
                    <span id="error_urlimg" class="error"/>
                      
                </font></font>
            </p>
            <p>
                Antutu: 
                <input type="text" id="antutu" name="antutu" placeholder="antutu" value="<?php echo $user['antutu'];?>"/>
                <font color="red">
                    <span id="error_antutu" class="error">
                      <?php
                         echo $error['antutu']
                        ?> 
                        </span>
                </font></font>
            </p>
                 <p>
                Urlimg: 
                <input type="text" id="email" name="email" placeholder="email" value="<?php echo $user['email'];?>"/>
                <font color="red">
                    <span id="error_email" class="error"/>
                      
                </font></font>
            </p>
                <input type="submit" name="update" id="update"/>
                <a class="Button_red" href="index.php?page=controller_user&op=list">Volver</a>
           
    </form>
</div>