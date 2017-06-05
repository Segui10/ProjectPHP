<div id="contenido">
    <form autocomplete="on" method="post" name="delete_user" id="delete_user" action="index.php?page=controller_user&op=delete&id=<?php echo $_GET['id']; ?>">
       
            
                <h3>¿Desea seguro borrar el telefono con id: <?php echo $_GET['id']; ?>?</h3>
                
           <button type="submit" class="Button_green"name="delete" id="delete">Aceptar</button>
              <a class="Button_red" href="index.php?page=controller_user&op=list">Cancelar</a>
           
    </form>
</div>