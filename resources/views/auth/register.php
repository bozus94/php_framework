<form class="row g-3" method="POST" action="/register">
    <h1>Crear Cuenta</h1>
    <div class="col-md-6">
        <label for=FirstName class="form-label">Nombre</label>
        <input type="text" class="form-control" id=FirstName name=firsName>
    </div>
    <div class="col-md-6">
        <label for=LastName class="form-label">Apellido</label>
        <input type="text" class="form-control" id=LastName name=lastName>
    </div>
    <div class="col-md-6">
        <label for=email class="form-label">Correo Electronico</label>
        <input type="email" class="form-control" id=email name=email>
    </div>
    <div class="col-md-6">
        <label for=user class="form-label">Usuario</label>
        <input type="text" class="form-control" id=user name=user>
    </div>
    <div class="col-md-6">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="col-md-6">
        <label for="confirmPassword" class="form-label">Confirmar contraseña</label>
        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
    </div>
    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" name="terms" value="accepted">
            <label class="form-check-label" for="gridCheck" value="accepted">
                Acepto los terminos.
            </label>
        </div>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-outline-primary">Registrarse</button>
    </div>
</form>