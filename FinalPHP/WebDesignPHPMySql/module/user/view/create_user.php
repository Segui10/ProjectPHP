<div id="contenido">
    <form autocomplete="on" method="post" name="alta_user" id="alta_user" onsubmit="return validate();" 
          action="index.php?page=controller_user&op=create">
        <h1>Insert mobile</h1>
        <fieldset>
                <p>
                <label for="usuario">Id: </label>
                <input type="text" id="usuario" name="usuario" placeholder="id" value=""/>
                <font color="red">
                    <span id="error_usuario" class="error">
                       <?php
                           echo $error['usuario']
                        ?>
                    </span>
                </font>
            </p>
            <p>
                <label for="so"> Sistema Operativo:</label>
                <select id="sisop" name="sisop" placeholder="sisop">
                    <option value="Android">Android</option>
                    <option value="IOS">IOs</option>
                    <option value="Windows Phone">Windows Phone</option>
                    </select></td>
                <font color="red">
                    <span id="error_sisop" class="error">
                       
                    </span>
                </font>
            </p>
             <p>
                <label for="nombre"> Marca: </label>
                <input type="text" id="marca" name="marca" placeholder="marca" value=""/>
                <font color="red">
                    <span id="error_marca" class="error">
                       <?php
                           echo $error['marca']
                        ?>
                    </span>
                </font>
            </p>
            <p>
                <label for="nombre"> Modelo: </label>
                <input type="text" id="model" name="model" placeholder="model" value=""/>
                <font color="red">
                    <span id="error_model" class="error">
                       <?php
                           echo $error['model']
                        ?>
                    </span>
                </font>
            </p>
            <p>
                <label for="so"> Tamaño de la pantalla:</label>
                <input type="radio" id="screty" name="screty" placeholder="screty" value="3.5" checked/>3.5"
                    <input type="radio" id="screty" name="screty" placeholder="screty" value="4"/>4"
                    <input type="radio" id="screty" name="screty" placeholder="screty" value="4.5"/>4.5"
                    <input type="radio" id="screty" name="screty" placeholder="screty" value="5"/>5"
                    <input type="radio" id="screty" name="screty" placeholder="screty" value="5.5"/>5.5"
                    <input type="radio" id="screty" name="screty" placeholder="screty" value="6"/>6"
                    <input type="radio" id="screty" name="screty" placeholder="screty" value="6.5"/>6.5"
                <font color="red">
                    <span id="error_screty" class="error">
                       
                    </span>
                </font>
            </p>
            <p>
                Tipo de pantalla: 
                <input type="text" id="sty" name="sty" placeholder="sty" value=""/></td>
                <font color="red">
                    <span id="error_sty" class="error">
                        <?php
                           echo $error['sty']
                        ?>
                    </span>
                </font>
            </p>
            <p>
               <label for="so">Resolucion de la pantalla:</label>
           
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
                <label for="nombre">   Tipo Procesador:    </label>
                <input type="text" id="pro" name="pro" placeholder="pro" value=""/>
                <font color="red">
                    <span id="error_pro" class="error">
                        <?php
                           echo $error['pro']
                        ?>
                    </span>
                </font>
            </p>

            <p>
            <label for="nombre">   Numero de Cores:    </label>
                <input type="text" id="core" name="core" placeholder="core" value=""/>
                <font color="red">
                    <span id="error_core" class="error">
                        <?php
                           echo $error['core']
                        ?>
                    </span>
                </font>
            </p>
            <p>
            <label for="nombre">Velocidad de los Cores:</label> 
                <input type="text" id="speed_c" name="speed_c" placeholder="speed_c" value=""/>
                <font color="red">
                    <span id="error_speed" class="error">
                        <?php
                           echo $error['speed']
                        ?>
                    </span>
                </font>
            
            </p>
            
            
            <p>
                <label for="nombre">   Fecha de nacimiento:     </label>
                <input id="fecha" type="text" name="fecha_nacimiento" placeholder="fecha de nacimiento" value=""/>
                <font color="red">
                    <span id="error_fecha_nacimiento" class="error">
                        <?php
                         echo $error['fecha_nacimiento']
                        ?>
                    </span>
                </font>
            
            </p>
            
            <p>
                <label for="nombre">    Pais:   </label>
                <select id="pais" name="pais" placeholder="pais">
                    <option value="España">España</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Francia">Francia</option>
                    </select>
               <font color="red">
                    <span id="error_pais" class="error">
                       
                    </span>
                </font>
            </p>

            
            <p>
                <label for="nombre">      Observaciones:   </label>
                <textarea cols="30" rows="5" id="observaciones" name="observaciones" placeholder="observaciones" value=""></textarea>
                <font color="red">
                    <span id="error_observaciones" class="error">
                       <?php
                         echo $error['observaciones']
                        ?>
                    </span>
                </font>
            </p>
            <p>
                <label for="nombre">      Url imagen:    </label>
                <input type="text" id="urlimg" name="urlimg" placeholder="urlimg" value=""/>
                <font color="red">
                    <span id="error_urlimg" class="error">
                        
                    </span>
                </font>
            </p>
            <p>
                <label for="nombre">Antutu benchmark: </label>
                <input type="text" id="antutu" name="antutu" placeholder="antutu" value=""/>
                <font color="red">
                    <span id="error_antutu" class="error">
                       <?php
                         echo $error['antutu']
                        ?> 
                    </span>
                </font>
            </p>
             
            <p>
                <label for="nombre">Correo: </label>
                <input type="text" id="email" name="email" placeholder="email" value=""/>
                <font color="red">
                    <span id="error_email" class="error">
                       <?php
                         echo $error['email']
                        ?> 
                    </span>
                </font>
            </p>
            
                <input type="submit" name="create" id="create"/>
                <a href="index.php?page=controller_user&op=list">Volver</a>
            
    </form>
</div>