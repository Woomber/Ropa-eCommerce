<h1 class="titulo-form">Paso 1: Datos personales</h1>
<div class="progress">
    <i class="fas fa-circle"></i>
    <i class="far fa-circle"></i>
    <i class="far fa-circle"></i>
</div>
<form method="POST" onsubmit="return validateForm1()">
    <div id="datosTodos">
        <div class="datosUsuario">
            <div class="half-block first">
                  <p>Nombre de Usuario *</p>
            <input type="text" class="form-control" placeholder="Nombre de Usuario" name="usuario" required="required">
            </div>
            <div class="half-block last">
                <p>Contraseña *</p>
            <input type="password" class="form-control" placeholder="Contraseña" name="contrasena" required="required">
            </div>     
        </div>
        <div class="datosNombre">
            <p>Nombre(s) *</p>
            <input type="text" class="form-control" placeholder="Nombre(s)" name="nombre" required="required">
            <p>Apellido paterno *</p>
            <input type="text" class="form-control" placeholder="Apellido Paterno" name="apellidoP" required="required">
            <p>Apellido Materno *</p>
            <input type="text" class="form-control" placeholder="Apellido Materno" name="apellidoM" required="required">
        </div>
        <div class="datosEmail">
              <div class="half-block first">
            <p>Email *</p>
            <input type="text" class="form-control" name="email" placeholder="Email" required="required" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.com]+[.mx]">
              </div>
            <div class="half-block last">
            <p>Confirmar Email *</p>
            <input type="text" class="form-control" name="confirmar" placeholder="Confirmar Email" required="required" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.com]+[.mx]">
            </div>
        </div>
        <div class="datosTelefono">
            <p>Teléfono *</p>
            <input type="text" class="form-control" name="telefono" placeholder="Teléfono" required="required" pattern="[0-9]{7-10}" maxlength=10>
        </div>
        <div class="datosTarjeta">
            <div class="tarjeta-block first">
 <p id="tarjeta-text">Tarjeta *</p>
            <input type=text class="form-control form-tarjeta t1" name="tarjeta1" required="required" placeholder="0000" size="3" pattern="[0-9]{4}" maxlength=4>
            <input type=text class="form-control form-tarjeta t1" name="tarjeta2" required="required" placeholder="0000" size="3" pattern="[0-9]{4}" maxlength=4>
            <input type=text class="form-control form-tarjeta t1" name="tarjeta3" required="required" placeholder="0000" size="3" pattern="[0-9]{4}" maxlength=4>
            <input type=text class="form-control form-tarjeta t1" name="tarjeta4" required="required" placeholder="0000" size="3" pattern="[0-9]{3,4}" maxlength=4>
            
            </div>
            <div class="tarjeta-block">
                  <p>CVV *</p>
            <input type=text pattern="[0-9]{3}" class="form-control form-tarjeta" name="cav" required="required" size="2" maxlength=3 placeholder="CVV">
            
            </div>
            <div class="tarjeta-block">
                 <p>Fecha de expiración *</p>
            <input type="text" class="form-control form-tarjeta" name="fechaEx" required="required" pattern="[0-9]{2}/[0-9]{2}" size="5" maxlength="5" placeholder="MM/YY">
        
            </div>
        </div>
        <div class="btnSubmit">
             <input type="submit" class="btn btn-send" value="Siguiente" />
        </div>
       
    </div>
</form>