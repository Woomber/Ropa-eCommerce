<h2 class="titulo-form">Paso 3: Datos de Facturación</h2>
<div class="progress">
    <i class="far fa-circle"></i>
    <i class="far fa-circle"></i>
    <i class="fas fa-circle"></i>
</div>
<form method="POST" onsubmit="return validateForm3()" action="php/do-register.php">
   
    <!-- Cargar los datos del post para reenviarlos -->
    <?php foreach($_POST as $key => $val){ ?>
        <input type="hidden" name="<?php echo $key ?>" value="<?php echo htmlspecialchars($val, ENT_COMPAT, 'UTF-8') ?>">
    <?php } ?>
    <!-- -->   

    <div id="datosTodos">

        <div class="datosFacturar">
            <p>RFC *</p>
            <input type="text" name="rfc" class="form-control" placeholder="RFC" size="13" pattern="[A-Z]{3,4}[0-9]{6}[A-Z0-9]{3}" required="required" maxlength=13>
           <p>Tipo persona *</p>
            <select name="tipoPersona"  class="form-control" required="required">
                <option value="fisica">Física</option>
                <option value="moral">Moral</option>
            </select>
             <p>Razón Social *</p>
            <input type="text" name="razonSocial" class="form-control" placeholder="Razón Social" required="required">
            <br>
        </div>        

        <?php if(@$_POST["facturar"] != "facturar"){ ?>
            <div class="datosDireccion">
            <p>Calle/Avenida *</p>
            <input type="text" class="form-control" placeholder="Calle/Avenida" name="calleF" required="required">
            <div class="datosNum">
                <div class="half-block first">
                      <p>Número Interior *</p>
            <input type="text" class="form-control" placeholder="Número Interior" name="numIntF" required="required">
            </div>
            <div class="half-block last">
                  <p>Número Exterior *</p>
            <input type="text" class="form-control" placeholder="Número Exterior" name="numExtF" required="required">
            </div>
            </div>
             <p>Colonia *</p>
            <input type="text" class="form-control" placeholder="Colonia" name="coloniaF" required="required">
             <p>Ciudad/Municipio *</p>
            <input type="text" class="form-control" placeholder="Ciudad/Municipio" name="ciudadF" required="required">
            <div class="datosNum">
                <div class="half-block first">
 <p>Estado *</p>
            <input type="text" class="form-control" placeholder="Estado" name="estadoF" required="required">
                </div>
                <div class="half-block last">
                      <p>Código Postal *</p>
            <input type="text" class="form-control" placeholder="Código Postal" name="cpF" pattern="[0-9]{5}" required="required" maxlength=5 size="5">
       
                </div>
            </div> 
           </div>
        <?php
        } //if
        ?>
         <div class="btnSubmit">
        <input type="submit" class="btn btn-send"   value="Finalizar" />
    </div>
    </div>
</form>