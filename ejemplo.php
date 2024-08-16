<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <title>AnyeFumes</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <style>
      .carousel-item {
        height: 100vh;
      }
      .carousel-item img {
        object-fit: cover;
        height: 100%;
        width: 100%;
      }
  </style>
  <body>
    <header class="container-fluid bg-dark d-flex justify-content-center">
      <p class="text-light mb-0 fs-6">Contactanos 442-706-8376</p>
    </header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand">
          Bienvenido
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="indexx.php">AnyFumes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Productos
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="hombre.php">Hombre</a></li>
                <li><a class="dropdown-item" href="mujer.php">Mujer</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="index.php">Todos</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Cuenta
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="login.php">Log-in</a></li>
                    <li><a class="dropdown-item" href="signup.php">Sign-up</a></li>
                    <li><hr class="dropdown-divider" /></li>
                  </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-cart"></i><span id="cart-count" class="badge bg-danger rounded-pill">0</span>
                </a>
                <ul class="dropdown-menu" id="cart-items">
                  <li><a class="dropdown-item">Carrito vacío</a></li>
                </ul>
              </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="https://hips.hearstapps.com/hmg-prod/images/mejores-perfumes-hombre-incienso-65b3925a1ea14.jpg?crop=0.8888101146165663xw:1xh;center,top&resize=1200:*"
            style="height: 700px"
            class="d-block w-100 img-fluid"
            alt="imagen1"
          />
        </div>
        <div class="carousel-item">
          <img
            src="https://media.glamour.mx/photos/62b9eb31b055c9216ad62282/16:9/w_2560%2Cc_limit/mejores_dupes_de_perfumes.JPG"
            style="height: 700px"
            class="d-block w-100 img-fluid"
            alt="imagen2"
          />
        </div>
        <div class="carousel-item">
          <img
            src="https://editorialtelevisa.brightspotcdn.com/dims4/default/3ea1f66/2147483647/strip/false/crop/1195x672+3+0/resize/1200x675!/quality/90/?url=https%3A%2F%2Fk2-prod-editorial-televisa.s3.us-east-1.amazonaws.com%2Fbrightspot%2Fee%2F48%2Fc81f1b2e4285af7647a9e30975a6%2Fperfumes-que-huelen-a-vainilla.jpg"
            style="height: 700px"
            class="d-block w-100 img-fluid"
            alt="imagen3"
          />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExample"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExample"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>

    <!-- Productos -->
    <div class="container my-5">
      <h2 class="text-center mb-5 mt-4">Nuestros Productos</h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img
              src="https://www.perfumeriabasic.com/cdn/shop/files/EROSFLEME_2.png?v=1684791538&width=1445"
              class="card-img-top"
              alt="Producto 1"
            />
            <div class="card-body">
              <h5 class="card-title">Versace Eros Flame</h5>
              <p class="card-text">
                Eros Flame es una fragancia fuerte, apasionada y decidida, para
                quien vive sus emociones con ardor.
              </p>
              <button class="btn btn-outline-dark d-flex justify-content-center add-to-cart" data-product="Versace Eros Flame">Agregar al carrito</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img
              src="https://img1.picmix.com/output/stamp/normal/6/1/4/5/2285416_2ab2d.png"
              class="card-img-top"
              alt="Producto 2"
            />
            <div class="card-body">
              <h5 class="card-title">Dior Sauvage</h5>
              <p class="card-text">
                Su estela se traduce en notas de mandarina, haba tonka y madera
                de sándalo.
              </p>
              <button class="btn btn-outline-dark d-flex justify-content-center add-to-cart" data-product="Dior Sauvage">Agregar al carrito</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img
              src="https://peacearchdutyfree.com/media/catalog/product/cache/eda70f405f0e744d807f92913507b2ef/5/0/504715-1.png"
              class="card-img-top"
              alt="Producto 3"
            />
            <div class="card-body">
              <h5 class="card-title">Versace Eros</h5>
              <p class="card-text">
                La marca de lujo italiana Versace presenta su nueva fragancia
                masculina.
              </p>
              <button class="btn btn-outline-dark d-flex justify-content-center add-to-cart" data-product="Versace Eros">Agregar al carrito</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="text-center text-lg-start bg-light text-muted">
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"></section>
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>AnyFumes
              </h6>
              <p>
                Here you can use rows and columns to organize your footer
                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                elit.
              </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">Products</h6>
              <p>
                <a href="#!" class="text-reset">Angular</a>
              </p>
              <p>
                <a href="#!" class="text-reset">React</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Vue</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Laravel</a>
              </p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">Useful links</h6>
              <p>
                <a href="#!" class="text-reset">Pricing</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Settings</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Orders</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Help</a>
              </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
              <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                info@example.com
              </p>
              <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
              <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
            </div>
          </div>
        </div>
      </section>
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05)">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz4fnFO9gybBYu1W1W7EJgbKp6svsC5bzp6nVvAP6TVz4MlQANfIHlWinger"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-BmNc73z4exrRtF8z1RhVVB0u60i0jv4qeeY3j6B2QVTO/10UKjwW9abCm91FLLV1"
      crossorigin="anonymous"
    ></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
  let cartCount = 0;
  const cartItems = document.getElementById("cart-items");
  const cartCountElement = document.getElementById("cart-count");

  document.querySelectorAll(".add-to-cart").forEach(function (button) {
    button.addEventListener("click", function () {
      const product = this.getAttribute("data-product");
      cartCount++;
      cartCountElement.textContent = cartCount;

      const newCartItem = document.createElement("li");
      newCartItem.innerHTML = '<a class="dropdown-item">' + product + '</a>';
      cartItems.appendChild(newCartItem);
    });
  });

  // Prevent default action for dropdown items
  document.querySelectorAll('.nav-item.dropdown > a').forEach(function(dropdown) {
    dropdown.addEventListener('click', function(event) {
      event.preventDefault();
      // Trigger the dropdown manually
      let dropdownMenu = new bootstrap.Dropdown(this);
      dropdownMenu.toggle();
    });
  });
});

    </script>
  </body>
</html>
