<div id="contenido">
    <form autocomplete="on" method="post" name="aupdate_user" id="update_user" onsubmit="return validate();" action="index.php?page=controller_user&op=update">
        <h1>Modificar usuario</h1>
        <table border='0'>
            <tr>
                <td>Usuario: </td>
                <td><input type="text" id="usuario" name="usuario" placeholder="usuario" value="<?php echo $user['user'];?>" readonly/></td>
                <td><font color="red">
                    <span id="error_usuario" class="error"/>
                          <?php
                            echo $error['usuario']
                        ?>
                
                </font></td>
            </tr>
            <tr>
                <td>Sistema Operativo: </td>
                <td><select id="sisop" name="sisop" placeholder="sisop">
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
                    </select></td>
                <td><font color="red">
                    <span id="error_pais" class="error"/>
                        
                </font></td>
            </tr>
            <tr>
                <td>Marca: </td>
                <td><input type="text" id="marca" name="marca" placeholder="marca" value="<?php echo $user['marca'];?>" /></td>
                <td><font color="red">
                    <span id="error_marca" class="error"/>
                        
                
                </font></td>
            </tr>
            <tr>
                <td>Modelo: </td>
                <td><input type="text" id="model" name="model" placeholder="model" value="<?php echo $user['model'];?>" /></td>
                <td><font color="red">
                    <span id="error_model" class="error"/>
                        
                
                </font></td>
            </tr>
             <tr>
                <td>Tamaño de pantalla: </td>
                <td>
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
                </td>
                <td><font color="red">
                    <span id="error_sexo" class="error"/>
                       
                  
                </font></td>
            </tr>
            <tr>
                <td>Tipo de pantalla: </td>
                <td><input type="text" id="sty" name="sty" placeholder="sty" value="<?php echo $user['sty'];?>"/></td>
                <td><font color="red">
                    <span id="error_sty" class="error"/>
                      
                </font></td>
            </tr>
            <tr>
                <td>Procesador: </td>
                <td><input type="text" id="pro" name="pro" placeholder="pro" value="<?php echo $user['pro'];?>"/></td>
                <td><font color="red">
                    <span id="error_pro" class="error"/>
                      
                </font></td>
            </tr>
             <tr>
                <td>Cores: </td>
                <td><input type="text" id="core" name="core" placeholder="core" value="<?php echo $user['core'];?>"/></td>
                <td><font color="red">
                    <span id="error_core" class="error"/>
                      
                </font></td>
            </tr>
            <tr>
                <td>Core Speed: </td>
                <td><input type="text" id="speed_c" name="speed_c" placeholder="speed_c" value="<?php echo $user['speed'];?>"/></td>
                <td><font color="red">
                    <span id="error_speed" class="error"/>
                      
                </font></td>
            </tr>
            
            
            <tr>
                <td>Fecha de nacimiento: </td>
                <td><input id="fecha" type="text" name="fecha_nacimiento" placeholder="fecha de nacimiento" value="<?php echo $user['birthdate'];?>"/></td>
                <td><font color="red">
                    <span id="error_fecha_nacimiento" class="error"/>
                        <?php
                         echo $error['fecha_nacimiento']
                        ?>
                </font></td>
            </tr>
            
          
            <tr>
                <td>Pais: </td>
                <td><select id="pais" name="pais" placeholder="pais">
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
                    </select></td>
                <td><font color="red">
                    <span id="error_pais" class="error"/>
                        
                </font>
            </td>
            </tr>
            
    
            
            <tr>
                <td>Observaciones: </td>
                <td><textarea cols="30" rows="5" id="observaciones" name="observaciones" placeholder="observaciones"><?php echo $user['comment'];?></textarea></td>
                <td><font color="red">
                    <span id="error_observaciones" class="error"/>
                        <?php
                            echo $error['observaciones']
                        ?>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Urlimg: </td>
                <td><input type="text" id="urlimg" name="urlimg" placeholder="urlimg" value="<?php echo $user['urlimg'];?>"/></td>
                <td><font color="red">
                    <span id="error_urlimg" class="error"/>
                      
                </font></font></td>
            </tr>
            <tr>
                <td>Antutu: </td>
                <td><input type="text" id="antutu" name="antutu" placeholder="antutu" value="<?php echo $user['antutu'];?>"/></td>
                <td><font color="red">
                    <span id="error_urlimg" class="error"/>
                      
                </font></font></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" id="update"/></td>
                <td align="right"><a href="index.php?page=controller_user&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>