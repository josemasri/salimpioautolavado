<div class="wrapper-donor ">
    <div class="sub-wrapper ">
        <form id="customerData">
            <div id="personal-data-container" class="personal-data-container text-left">
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="donacion-tab-title">Datos personales</p>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label>Nombres</label>
                        <input type="text" class="form-control required" name="name" id="donor-name" fieldType="string" required-message="Nombre requerido" error-message="Ingrese un nombre válido">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label>Apellido paterno</label>
                        <input type="text" class="form-control required" name="last_name" id="donor-last-name" fieldType="string" required-message="Ingresa tu apellido paterno" error-message="Ingrese un apellido válido">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label>Apellido materno</label>
                        <input type="text" class="form-control" name="mother_last_name" id="donor-mother-last-name" fieldType="string"  error-message="Ingrese un apellido válido">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" class="form-control required" name="phone" id="donor-phone" required-message="Teléfono requerido" error-message="Ingrese un teléfono válido">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control required" name="email" id="donor-email" fieldType="email"  required-message="Ingresa tu email" error-message="Ingrese un email válido">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="wrapper-pago-button">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <button type="button" class="btn btn-primary next-step donar-button-next">Continuar</button>
            </div>
    </div>
</div>