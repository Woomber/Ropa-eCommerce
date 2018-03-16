<h2 class="titulo-form">Paso 2: Dirección personal</h2>
<div class="progress">
    <i class="far fa-circle"></i>
    <i class="fas fa-circle"></i>
    <i class="far fa-circle"></i>
</div>
<form method="POST" onsubmit="return validateForm2()">
    <!-- Cargar los datos del post para reenviarlos -->
    <?php foreach($_POST as $key => $val){ ?>
        <input type="hidden" name="<?php echo $key ?>" value="<?php echo htmlspecialchars($val, ENT_COMPAT, 'UTF-8') ?>">
    <?php } ?>
    <!-- -->

    <div id="datosTodos">
        <div class="datosDireccion">
            <p>Calle/Avenida *</p>
            <input type="text" class="form-control" placeholder="Calle/Avenida" name="calle" required="required">
            <div class="datosNum">
                <div class="half-block first">
                      <p>Número Interior *</p>
            <input type="text" class="form-control" placeholder="Número Interior" name="numInt" required="required">
            </div>
            <div class="half-block last">
                  <p>Número Exterior *</p>
            <input type="text" class="form-control" placeholder="Número Exterior" name="numExt" required="required">
            </div>
            </div>
             <p>Colonia *</p>
            <input type="text" class="form-control" placeholder="Colonia" name="colonia" required="required">
             <p>Ciudad/Municipio *</p>
            <input type="text" class="form-control" placeholder="Ciudad/Municipio" name="ciudad" required="required">
            <div class="datosNum">
                <div class="half-block first">
 <p>Estado *</p>
            <input type="text" class="form-control" placeholder="Estado" name="estado" required="required">
                </div>
                <div class="half-block last">
                      <p>Código Postal *</p>
            <input type="text" class="form-control" placeholder="Código Postal" name="cp" pattern="[0-9]{5}" required="required" maxlength=5 size="5">
       
                </div>
            </div> 
           </div>
        <div class="datosCheckFactura">
            <input type="checkbox" class="check"  name="facturar" value="facturar">
            <span>Facturar con mismos datos</span> <br>
        </div>
          <div class="btnSubmit">
        <input type="submit" class="btn btn-send"  value="Siguiente" />
    </div>
    </div>
</form>