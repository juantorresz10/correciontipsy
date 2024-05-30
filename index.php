<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Portal Academico - TIPSY</title>
        <link rel="icon" href="./img/tipsylogo.jpg" type="tipsylogo/jpg">
        <link rel="stylesheet" href="./css/estilo.css" />
    </head>
    <body>
        <main>
            <div class="box">
                <div class="inner-box">
                    <div class="forms-wrap">
                        <form method="post" action="./core/login.php" autocomplete="off" class="sign-in-form">
                            <div class="logo">
                                <img src="assets/images/tipsylogo.jpg" alt="tipsylogo" />
                                <h4>tipsy</h4>
                            </div>

                            <div class="heading">
                                <h2>Bienvenido</h2>
                                <h6>No te has registrado?</h6>
                                <a href="#" class="toggle">Registrarte</a>
                            </div>

                            <div class="actual-form">
                                <div class="input--wrap">
                                    <label>E-mail</label>
                                    <input
                                        type="text"
                                        minlength="4"
                                        class="input-field"
                                        id="username"
                                        autocomplete="off"
                                        name="username"
                                        required
                                        />
                                </div>  

                                <div class="input--wrap">
                                    <label>Contraseña</label>

                                    <input
                                        type="password"
                                        minlength="4"
                                        class="input-field"
                                        id="passwordInput"
                                        autocomplete="off"
                                        name="password"
                                        required
                                        />
                                </div>

                                <button type="submit" class="sign--btn">Go</button>



                                <p class="text">
                                    Olvidaste tu contraseña?
                                    <a href="#">Obtener ayuda</a> inicia sesión
                                </p>
                            </div>
                        </form>

                        <form action="index.html" autocomplete="off" class="sign-up-form">
                            <div class="logo">
                                <img src="assets/images/tipsylogo.jpg" alt="easyclass" />
                                <h4>Tipsy</h4>
                            </div>

                            <div class="heading">
                                <h2> Crea tu cuenta</h2>
                                <h6>¿Ya tienes una cuenta?</h6>
                                <a href="#" class="toggle">iniciar sesión</a>
                            </div>

                            <div class="actual-form">
                                <div class="input-wrap">
                                    <input
                                        type="text"
                                        minlength="4"
                                        class="input-field"
                                        autocomplete="off"
                                        required
                                        />
                                    <label>Name</label>
                                </div>

                                <div class="input-wrap">
                                    <input
                                        type="email"
                                        class="input-field"
                                        autocomplete="off"
                                        required
                                        />
                                    <label>E-mail</label>
                                </div>

                                <div class="input-wrap">
                                    <input
                                        type="password"
                                        minlength="4"
                                        class="input-field"
                                        autocomplete="off"
                                        required
                                        />
                                    <label>Contraseña</label>
                                </div>

                                <input type="submit" value="Sign Up" class="sign-btn" />

                                <p class="text">
                                    Al registrarme, acepto las
                                    <a href="#">Términos de servicios</a> and
                                    <a href="#">política de privacidad</a>
                                </p>
                            </div>
                        </form>
                    </div>

                    <div class="carousel">
                        <div class="images-wrapper">
                            <img src="assets/images/tipsylogo.jpg"class="image img-1 show" alt="" />
                            <img src="assets/images/image2.png" class="image img-2" alt="" />
                            <img src="assets/images/image3.png" class="image img-3" alt="" />
                        </div>

                        <div class="text-slider">
                            <div class="text-wrap">
                                <div class="text-group">
                                    <h2>Diviertete en tus Clases</h2>
                                    <h2> Aprende interactivamente</h2>
                                    <h2> Engrandece tu conocimiento</h2>
                                </div>
                            </div>

                            <div class="bullets">
                                <span class="active" data-value="1"></span>
                                <span data-value="2"></span>
                                <span data-value="3"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <script src="js/app.js"></script>

    </body>
</html> 