<div class="container">
<?php
    if(isset($this->args[0])){
        switch($this->args[0]){
            case ('e01'):
                echo 
                '<div class="alert alert-danger text-center">
                    Usuario o Clave Erronea
                </div>';
                break;
            case ('e02'):
                echo 
                '<div class="alert alert-danger text-center">
                    Usuario Sin Autorizacion - Inicie Sesión
                </div>';
                break;
            case ('s01'):
                echo 
                '<div class="alert alert-info text-center">
                    Cerró Sesión
                </div>';
                break;
        }
    }

?>
    <!--<div class="container">
        <div class="row">
            <form action="/index/login" method="post">
                <div class="col-sm-6">
                    <label for="email" class="label">Correo Electronico</label>
                    <input type="text" name="email" id="email" required>
                </div>
                <div class="col-sm-6">
                    <label for="password" class="label">Contraseña</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="cols-sm-6">
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </div>
            </form>
        </div>
    </div>-->
    <div class = "container mt-4 col-lg-4">
            <div class = "card col-sm-10">
                <div class="card-body">
                    <form class="form-sign" action="/index/login" method="POST">  
                        <div class="form-group text-center">
                            <h3>Login</h3>
                            <img src="https://lostramites.com.co/wp-content/uploads/Logo-de-SENA-sin-fondo-naranja-300x300.png" alt="70" width="170"/>
                            <label>Ingreso Al Sistema</label>
                        </div>
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div> 
</div>