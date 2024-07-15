<!doctype html>
<html class="no-js" lang="zxx">

<?php require_once("./modules/head.php") ?>

<body>

    <!-- Body main wrapper start -->
    <div class="body-wrapper">

        <!-- HEADER AREA START (header-5) -->
        <?php require_once("./modules/header-2.php") ?>
        <!-- HEADER AREA END -->

        <!-- Utilize Cart Menu Start -->
        <?php require_once("./modules/cart-menu.php") ?>
        <!-- Utilize Cart Menu End -->

        <!-- Utilize Mobile Menu Start -->
        <?php require_once("./modules/mobile-menu.php") ?>
        <!-- Utilize Mobile Menu End -->

        <div class="ltn__utilize-overlay"></div>

        <!-- BREADCRUMB AREA START -->
        <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="img/bg/9.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                            <div class="section-title-area ltn__section-title-2">
                                <h6 class="section-subtitle ltn__secondary-color-4">// Welcome to our company</h6>
                                <h1 class="section-title white-color">Account</h1>
                            </div>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="index.phplogin.php">Home</a></li>
                                    <li class="ltn__secondary-color-4">Register</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- LOGIN AREA START (Register) -->
        <div class="ltn__login-area pb-110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area text-center">
                            <h1 class="section-title">Registra <br>Tu Cuenta</h1>
                            <p>Crea una cuenta para disfrutar de todas nuestras funcionalidades y servicios. <br>
                                Gestiona tus pedidos, revisa tu historial de compras y más.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="account-login-inner">
                            <form action="#" class="ltn__form-box contact-form-box">
                                <input type="text" name="firstname" placeholder="Nombre">
                                <input type="text" name="lastname" placeholder="Apellido">
                                <input type="text" name="email" placeholder="Correo Electrónico*">
                                <input type="password" name="password" placeholder="Contraseña*">
                                <input type="password" name="confirmpassword" placeholder="Confirmar Contraseña*">
                                <label class="checkbox-inline">
                                    <input type="checkbox" value="">
                                    Consiento que KingPlus procese mis datos personales para enviar material de marketing personalizado de acuerdo con el formulario de consentimiento y la política de privacidad.
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" value="">
                                    Al hacer clic en "crear cuenta", acepto la política de privacidad.
                                </label>
                                <div class="btn-wrapper">
                                    <button class="theme-btn-1 btn reverse-color btn-block" type="submit">CREAR CUENTA</button>
                                </div>
                            </form>
                            <div class="by-agree text-center">
                                <p>Al crear una cuenta, aceptas nuestros:</p>
                                <p><a href="#">TÉRMINOS Y CONDICIONES &nbsp; &nbsp; | &nbsp; &nbsp; POLÍTICA DE PRIVACIDAD</a></p>
                                <div class="go-to-btn mt-50">
                                    <a href="login.php">¿YA TIENES UNA CUENTA?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- LOGIN AREA END -->

        <!-- FEATURE AREA START ( Feature - 3) -->
        <?php require_once("./modules/feature-area.php") ?>
        <!-- FEATURE AREA END -->

        <!-- FOOTER AREA START -->
        <?php require_once("./modules/footer.php") ?>
        <!-- FOOTER AREA END -->

    </div>
    <!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>

</body>

</html>