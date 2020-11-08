<?php
include APP.'/src/templates/header.tpl.php'; //nos saldrà definido el header

?>
<section class="d-flex justify-content-center">
    <div class="col-md-7 d-flex flex-column justify-content-center">
        <h2 style="font-family: 'Comfortaa', Sans Serif;">Benvingud@</h2>
        <br></br>
        <p style="font-family: 'Roboto', Sans Serif;">
            Amb Task Manager podràs organitzar-te la feïna. Crea les teves tasques i posa un temps determinat per 
            dur-les a terme. A cada tasca podràs posar les passes que necessitis seguir per completar la tasca sencera,
            de manera que t'ajudi a conseguir l'execució mitjançant petits objectius.
        </p>
        <p style="font-family: 'Roboto', Sans Serif;">Per utilitzar Task Manager només hauràs de registrar-te, un cop registrat ja podrás començar a organitzar-te!</p>
        <div class="d-flex col-md-9 justify-content-between">
            <form class="col-sm-4" action="/src/controllers/registercontroller.php" method="POST">
            <h3>Registra't</h3>
                <div class="form-group">
                    <label for="username">User name</label>
                    <input type="text" class="form-control" name="newuser" placeholder="Introdueïx l'usuari">             
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="newpwd" placeholder="Contrasenya">
                </div>
                <input type="submit" class="btn btn-primary" value="Registra'm">
            </form>
            <form class="col-sm-4" action="/src/controllers/logincontroller.php" method="POST">
            <h3>Inicia sessió</h3>
                <div class="form-group">
                    <label for="username">User name</label>
                    <input type="text" class="form-control" name="username" placeholder="Introdueïx l'usuari">             
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Contrasenya">
                </div>
                <input type="submit" class="btn btn-primary" value="Inicia sessió">
        </form>
            
        </div>
        
    </div>


</section>

    
<?php
include 'src/templates/footer.tpl.php';
