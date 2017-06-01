<div id="contenido">
    <form autocomplete="on" method="post" name="alta_user" id="alta_user" onsubmit="return validate();" 
          action="index.php?page=controller_user&op=create">
        <h1>Usuario nuevo</h1>
        <table border='0'>
            <tr>
                <td>Id: </td>
                <td><input type="text" id="usuario" name="usuario" placeholder="id" value=""/></td>
                <td><font color="red">
                    <span id="error_usuario" class="error">
                       <?php
                           echo $error['usuario']
                        ?>
                    </span>
                </font></td>
            </tr>
            <tr>
                <td>Sistema Operativo: </td>
                <td><select id="sisop" name="sisop" placeholder="sisop">
                    <option value="Android">Android</option>
                    <option value="IOS">IOs</option>
                    <option value="WinPhone">Windows Phone</option>
                    </select></td>
                <td><font color="red">
                    <span id="error_sisop" class="error">
                       
                    </span>
                </font></td>
            </tr>
             <tr>
                <td>Marca: </td>
                <td><input type="text" id="marca" name="marca" placeholder="marca" value=""/></td>
                <td><font color="red">
                    <span id="error_marca" class="error">
                       
                    </span>
                </font></td>
            </tr>
            <tr>
                <td>Modelo: </td>
                <td><input type="text" id="model" name="model" placeholder="model" value=""/></td>
                <td><font color="red">
                    <span id="error_model" class="error">
                       
                    </span>
                </font></td>
            </tr>
            <tr>
                <td>Tamaño de pantalla: </td>
                <td><input type="radio" id="screty" name="screty" placeholder="screty" value="3.5" checked/>3.5"
                    <input type="radio" id="screty" name="screty" placeholder="screty" value="4"/>4"
                    <input type="radio" id="screty" name="screty" placeholder="screty" value="4.5"/>4.5"
                    <input type="radio" id="screty" name="screty" placeholder="screty" value="5"/>5"
                    <input type="radio" id="screty" name="screty" placeholder="screty" value="5.5"/>5.5"
                    <input type="radio" id="screty" name="screty" placeholder="screty" value="6"/>6"
                    <input type="radio" id="screty" name="screty" placeholder="screty" value="6.5"/>6.5"</td>
                <td><font color="red">
                    <span id="error_screty" class="error">
                       
                    </span>
                </font></td>
            </tr>
            <tr>
                <td>Tipo de pantalla: </td>
                <td><input type="text" id="sty" name="sty" placeholder="sty" value=""/></td>
                <td><font color="red">
                    <span id="error_sty" class="error">
                        
                    </span>
                </font></td>
            </tr>
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
            <tr>
                <td>Tipo de Procesador: </td>
                <td><input type="text" id="pro" name="pro" placeholder="pro" value=""/></td>
                <td><font color="red">
                    <span id="error_pro" class="error">
                        
                    </span>
                </font></td>
            </tr>

            <tr>
            <td>Numero de Cores: </td>
                <td><input type="text" id="core" name="core" placeholder="core" value=""/></td>
                <td><font color="red">
                    <span id="error_core" class="error">
                        
                    </span>
                </font></td>
            </tr>
            <td>Velocidad de los Cores: </td>
                <td><input type="text" id="speed_c" name="speed_c" placeholder="speed_c" value=""/></td>
                <td><font color="red">
                    <span id="error_speed" class="error">
                        
                    </span>
                </font></td>
            </tr>
            
            
            <tr>
                <td>Fecha de nacimiento: </td>
                <td><input id="fecha" type="text" name="fecha_nacimiento" placeholder="fecha de nacimiento" value=""/></td>
                <td><font color="red">
                    <span id="error_fecha_nacimiento" class="error">
                        <?php
                         echo $error['fecha_nacimiento']
                        ?>
                    </span>
                </font></td>
            </tr>
            
            
            <tr>
                <td>Pais: </td>
                <td><select id="pais" name="pais" placeholder="pais">
                    <option value="España">España</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Francia">Francia</option>
                    </select></td>
                <td><font color="red">
                    <span id="error_pais" class="error">
                       
                    </span>
                </font></td>
            </tr>

            
            <tr>
                <td>Observaciones: </td>
                <td><textarea cols="30" rows="5" id="observaciones" name="observaciones" placeholder="observaciones" value=""></textarea></td>
                <td><font color="red">
                    <span id="error_observaciones" class="error">
                       <?php
                         echo $error['observaciones']
                        ?>
                    </span>
                </font></td>
            </tr>
            <tr>
                <td>Url imagen: </td>
                <td><input type="text" id="urlimg" name="urlimg" placeholder="urlimg" value=""/></td>
                <td><font color="red">
                    <span id="error_urlimg" class="error">
                        
                    </span>
                </font></td>
            </tr>
            <tr>
                <td>Antutu benchmark: </td>
                <td><input type="text" id="antutu" name="antutu" placeholder="antutu" value=""/></td>
                <td><font color="red">
                    <span id="error_antutu" class="error">
                        
                    </span>
                </font></td>
            </tr>
            
            <tr>
                <td><input type="submit" name="create" id="create"/></td>
                <td align="right"><a href="index.php?page=controller_user&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>