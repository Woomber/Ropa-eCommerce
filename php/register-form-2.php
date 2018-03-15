<h2 class="titulo-form">Paso 2: Dirección personal</h2>
<form method="POST" onsubmit="return validateForm2()">
    <!-- Cargar los datos del post para reenviarlos -->
    <?php foreach($_POST as $key => $val){ ?>
        <input type="hidden" name="<?php echo $key ?>" value="<?php echo htmlspecialchars($val, ENT_COMPAT, 'UTF-8') ?>">
    <?php } ?>
    <!-- -->

    <div id="datosTodos">
        <div class="datosDireccion">
            <p>Calle/Avenida *</p>
            <input type="text" name="calle" required="required">
            <p>Número Int. *</p>
            <input type="text" name="numInt" required="required">
            <p>Número Ext.</p>
            <input type="text" name="numExt">
             <p>Colonia *</p>
            <input type="text" name="colonia" required="required">
             <p>Ciudad/Municipio *</p>
            <input type="text" name="ciudad" required="required">
             <p>Estado *</p>
            <input type="text" name="estado" required="required">
             <p>Código Postal *</p>
            <input type="text" name="cp" pattern="[0-9]{5}" required="required" maxlength=5 size="5">
        </div>
        <div class="datosCheckFactura">
            <input type="checkbox" name="facturar" value="facturar">
            Facturar con mismos datos <br>
        </div>
        <input type="submit" value="Siguiente" />
    </div>
</form>