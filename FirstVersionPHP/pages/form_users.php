<form method="post" name="formusers" id="formusers" onsubmit="return validate_user();" action="index.php?page=controller_users">
		<?php
		if(isset($error)){
			print ("<BR><span CLASS='styerror'>" . "* ".$error . "</span><br/>");
		}?>
    <h1>CRUD Mobile</h1>
<fieldset>
   <legend><span class="number">1</span>Sistema Operativo</legend>
   
   <select id="so" name="so">
  <option value="Android">Android</option>
  <option value="IOs">IOs</option>
  <option value="WinPhone">Windows Phone</option>
  <option value="Symbian">Symbian</option>
  <option value="BBOS">BlackBerryOS</option>
</select> 
		<legend><span class="number">2</span>Marca-Modelo</legend>
		<p>
			<label for="marca">Marca</label>
			<input name="marca" id="marca" type="text" placeholder="Marca" value="<?php echo $_POST?$_POST['marca']:""; ?>" />
			<span id="e_marca" class="styerror"></span>
		</p>
        <p>
			<label for="modelo">Modelo</label>
			<input name="modelo" id="modelo" type="text" placeholder="Modelo" value="<?php echo $_POST?$_POST['modelo']:""; ?>" />
			<span id="e_modelo" class="styerror"></span>
		</p>
       <legend><span class="number">3</span>Screen</legend>
       <p>
		    
				<input name="screen" type="radio" value="3.5" checked>3.5" 
				<input name="screen" type="radio" value="4">4"
        		<input name="screen" type="radio" value="4.5">4.5"
        		<input name="screen" type="radio" value="5">5"
				<input name="screen" type="radio" value="5.5">5.5"
				<input name="screen" type="radio" value="6">6"
				<input name="screen" type="radio" value="6.5">6.5"
            
				</p>
       
        <p>
			<label for="scrty">Screen Type</label>
			<input name="scrty" id="scrty" type="text" placeholder="Screen Type" value="<?php echo $_POST?$_POST['scrty']:""; ?>" />
			<span id="e_scrty" class="styerror"></span>
		</p>
      
       <legend><span class="number">4</span>Procesador</legend>
       <p>
			<label for="procesador">Procesador</label>
			<input name="procesador" id="procesador" type="text" placeholder="Procesador" value="<?php echo $_POST?$_POST['procesador']:""; ?>" />
			<span id="e_procesador" class="styerror"></span>
		</p>
       <legend><span class="number">5</span>RAM</legend>
           <label for="ram">RAM</label>
		    <div class="styled-select">
		    
		    <select id="ram" name="ram" value="<?php echo $_POST?$_POST['ram']:""; ?>">
				<option value="0.5">0.5</option>
				<option value="1">1</option>
				<option value="1.5">1.5</option>
				<option value="2">2</option>
				<option value="2.5">2.5</option>
				<option value="3">3</option>
				<option value="3.5">3.5</option>
				<option value="4">4</option>
				<option value="4.5">4.5</option>
				<option value="5">5</option>
				<option value="5.5">5.5</option>
				<option value="6">6</option>
				<option value="6.5">6.5</option>
			</select></div>
      <legend><span class="number">6</span>ROM</legend>
       <p>
			<label for="rom">ROM</label>
			<input name="rom" id="rom" type="text" placeholder="Rom" value="<?php echo $_POST?$_POST['rom']:""; ?>" />
			<span id="e_rom" class="styerror"></span>
		</p>
       
       
		<p>
			<label for="date_birthday">Fecha de presentacion</label>
			<input id="date_birthday" type="text" name="date_birthday" readonly="readonly">
			<span id="e_date_birthday" class="styerror"></span>
		</p>
		<input name="Submit" type="submit" value="Registrar"/>
    </fieldset>
	</form>
	