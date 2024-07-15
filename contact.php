<?php
require "../../functions/apicalls.php";
require "../../functions/apiserver.php";
$token = 'a0fc98488d395f6c2e6565d91c4747ee792';

$dos_niveles = array("articulo", "detalle-producto");
$ref_rel = "./";
if (in_array($_REQUEST["view"], $dos_niveles)) {
  $ref_rel = "../";
};
?>

<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>KingPlus | Game Shop</title>
  <meta name="robots" content="noindex, follow" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Place favicon.png in the root directory -->
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
  <!-- Font Icons css -->
  <link rel="stylesheet" href="css/font-icons.css" />
  <!-- plugins css -->
  <link rel="stylesheet" href="css/plugins.css" />
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- Responsive css -->
  <link rel="stylesheet" href="css/responsive.css" />
  <!-- Axios -->
  <script src="<?php echo $global_sitio_server; ?>/functions/axios.min.js"></script>
  <!-- Vue -->
  <script src="<?php echo $global_sitio_server; ?>/functions/vue.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="<?php echo $global_sitio_server; ?>/functions/sweetalert2.all.min.js"></script>
  <!-- jQuery -->
  <script>
    <?php echo 'const global_token = "' . $token . '";'; ?>
    <?php echo 'const global_public_repo = "' . $global_public_repo . '";'; ?>
    <?php echo 'var global_apiserver = "' . $global_apiserver . '";'; ?>
  </script>
</head>

<body>
  <!-- Add your site or application content here -->

  <!-- Body main wrapper start -->
  <div class="body-wrapper">

    <!-- HEADER AREA START (header-5) -->
    <?php require_once('./modules/header-2.php'); ?>
    <!-- HEADER AREA END -->

    <!-- Utilize Cart Menu Start -->
    <?php require_once('./modules/cart-menu.php'); ?>
    <!-- Utilize Cart Menu End -->

    <!-- Utilize Mobile Menu Start -->
    <?php require_once('./modules/mobile-menu.php'); ?>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="img/bg/9.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
              <div class="section-title-area ltn__section-title-2">
                <h6 class="section-subtitle ltn__secondary-color-4">
                  // Welcome to our company
                </h6>
                <h1 class="section-title white-color">Contáctenos</h1>
              </div>
              <div class="ltn__breadcrumb-list">
                <ul>
                  <li><a href="index.php">Inicio</a></li>
                  <li class="ltn__secondary-color-4">Contacto</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- CONTACT ADDRESS AREA START -->
    <div class="ltn__contact-address-area mb-90">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
              <div class="ltn__contact-address-icon">
                <img src="img/icons/10.png" alt="Icon Image" />
              </div>
              <h3>Correo electrónico</h3>
              <p>
                kingplus@gmail.com <br />
                damian.marcospool@gmail.com
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
              <div class="ltn__contact-address-icon">
                <img src="img/icons/11.png" alt="Icon Image" />
              </div>
              <h3>Número de teléfono</h3>
              <p>
                +52 998-116-0272 <br />
                +52 984-434-5252
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
              <div class="ltn__contact-address-icon">
                <img src="img/icons/12.png" alt="Icon Image" />
              </div>
              <h3>Dirreción</h3>
              <p>
                Av. Tulum <br />
                Cancún, Quintana Roo
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CONTACT ADDRESS AREA END -->

    <!-- CONTACT MESSAGE AREA START -->
    <div class="ltn__contact-message-area mb-120 mb--100">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ltn__form-box contact-form-box box-shadow white-bg">
              <h4 class="title-2">Solicitar Información</h4>
              <form id="contact-form" action="mail.php" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-item input-item-name ltn__custom-icon">
                      <input type="text" name="name" placeholder="Ingresa tu nombre" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-item input-item-email ltn__custom-icon">
                      <input type="email" name="email" placeholder="Ingresa tu correo electrónico" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-item">
                      <select class="nice-select">
                        <option>Seleccionar Categoría de Producto</option>
                        <option>Videojuegos</option>
                        <option>Consolas</option>
                        <option>Accesorios</option>
                        <option>PC Gaming</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-item input-item-phone ltn__custom-icon">
                      <input type="text" name="phone" placeholder="Ingresa tu número de teléfono" />
                    </div>
                  </div>
                </div>
                <div class="input-item input-item-textarea ltn__custom-icon">
                  <textarea name="message" placeholder="Ingresa tu mensaje"></textarea>
                </div>
                <p>
                  <label class="input-info-save mb-0"><input type="checkbox" name="agree" /> Guardar mi nombre y
                    correo electrónico en este navegador para la próxima vez que solicite información.</label>
                </p>
                <div class="btn-wrapper mt-0">
                  <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">
                    Ponerse en contacto
                  </button>
                </div>
                <p class="form-messege mb-0 mt-20"></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CONTACT MESSAGE AREA END -->

    <!-- GOOGLE MAP AREA START -->
    <div class="google-map mb-120">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84184.01600570237!2d-86.83502110049375!3d21.174552316580293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2b05aef653db%3A0xce32b73c625fcd8a!2sCanc%C3%BAn%2C%20Quintana%20Roo!5e0!3m2!1sen!2smx!4v1716864154551!5m2!1sen!2smx" width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- GOOGLE MAP AREA END -->

    <!-- FEATURE AREA START ( Feature - 3) -->
    <?php require_once('./modules/feature-area.php'); ?>
    <!-- FEATURE AREA END -->

    <!-- FOOTER AREA START -->
    <?php require_once('./modules/footer.php'); ?>
    <!-- FOOTER AREA END -->
  </div>
  <!-- Body main wrapper end -->

  <!-- All JS Plugins -->
  <script src="js/plugins.js"></script>
  <!-- Main JS -->
  <script src="js/main.js"></script>
  <!-- Tienda JS -->
  <script src="js/tienda.js"></script>
  <!-- Top Products JS -->
  <script src="js/top-products.js"></script>
  <!-- Carrito Number JS-->
  <script src="<?php echo $ref_rel; ?>js/cart-number.js"></script>
  <!-- Carrito Header JS -->
  <script src="<?php echo $ref_rel; ?>js/carrito-header.js"></script>
</body>

</html>