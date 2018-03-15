<h2 class="titulo-form">Paso 3: Datos de Facturación</h2>
<form method="POST" onsubmit="return validateForm3()" action="php/do-register.php">
   
    <!-- Cargar los datos del post para reenviarlos -->
    <?php foreach($_POST as $key => $val){ ?>
        <input type="hidden" name="<?php echo $key ?>" value="<?php echo htmlspecialchars($val, ENT_COMPAT, 'UTF-8') ?>">
    <?php } ?>
    <!-- -->   

    <div id="datosTodos">

        <div class="datosFacturar">
            <p>RFC *</p>
            <input type="text" name="rfc" pattern="[A-Z]{3,4}[0-9]{6}[A-Z0-9]{3}" required="required" maxlength=13>
            <p>Razón Social *</p>
            <input type="text" name="razonSocial" required="required">
            <p>Tipo persona</p>
            <select name="tipoPersona" required="required">
                <option value="fisica">Física</option>
                <option value="moral">Moral</option>
            </select><br>
        </div>        

        <?php if(@$_POST["facturar"] != "facturar"){ ?>
            <div class="datosDireccion">
                <p>Calle/Avenida *</p>
                <input type="text" name="calleF" required="required">
                <p>Número Int. *</p>
                <input type="text" name="numIntF" required="required">
                <p>Número Ext.</p>
                <input type="text" name="numExtF" required="required">
                <p>Colonia *</p>
                <input type="text" name="coloniaF" required="required">
                <p>Ciudad/Municipio *</p>
                <input type="text" name="ciudadF" required="required">
                <p>Estado *</p>
                <input type="text" name="estadoF" required="required">
                <p>Código Postal *</p>
                <input type="text" name="cpF" pattern="[0-9]{5}" required="required" maxlength=5>
            </div>
        <?php
        } //if
        ?>
       
        <input type="submit" value="Finalizar" />
    </div>
</form>