<?php 
session_start();

// Verifica si el nombre de usuario está en la sesión
$user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : "Visitante";
?>
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
      .cart-counter {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 30px; 
      height: 30px; 
      background-color: #dc3545; 
      color: white;
      border-radius: 50%;
      font-weight: bold;
    }
    </style>
  <body>
    <header class="container-fluid bg-dark d-flex justify-content-center">
      <p class="text-light mb-0 fs-6">Contactanos 442-706-8376</p>
    </header>
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand">
          Bienvenido
          <?php echo htmlspecialchars($user_name); ?></a
        >
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
              <a class="nav-link active" aria-current="page" href="indexx.php"
                >AnyFumes</a
              >
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
                  <a class="dropdown-item" href="indexx.php">Todos</a>
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
                    <li>
                   
                      <a class="dropdown-item">
                        <?php echo htmlspecialchars($user_name); ?></a
                      >
                     
                    </li>
                    
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                    <a class="dropdown-item" href="cuenta.php">Mi cuenta</a>
                      <?php if(isset($_SESSION['user_name'])): ?>
                      <a class="dropdown-item" href="login.php">Log-out</a>
                      <?php endif; ?>
                    </li>
                  </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-cart"></i>
                </a>
                <ul class="dropdown-menu" id="cart-items">
                  <li><a class="dropdown-item">Carrito vacío</a></li>
                </ul>
              </li>
              <li class="nav-item d-inline-flex p-2" >
              <div class="cart-counter " id="cart-counter">0</div>
            </li>

          </ul>
          
              </li>
            </ul>
          </li>
        </div>
      </div>
    </nav>
   
    <!-- Productos -->
    <!-- Productos -->
    <!-- Productos -->
    <!-- Productos -->

    <div class="container my-5">
      <h2 class="text-center mb-5 mt-4">Nuestros Productos (Mujer)</h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img
              src="https://arome.mx/cdn/shop/files/perfume-mon-paris-para-mujer-de-yves-saint-laurent-edp-90ml-arome-mexico-3.png?v=1715705155"
              class="card-img-top"
              alt="Producto 5"
            />
            <div class="card-body">
              <h5 class="card-title">Yves Saint Laurent Mon Paris $4000mxn</h5>
              <p class="card-text">
                Una fragancia dulce y sensual que combina notas frutales y
                florales para una experiencia olfativa inolvidable.
              </p>
              <button class="btn btn-outline-dark d-flex justify-content-center add-to-cart" data-product="Yves Saint Laurent Mon Paris "data-price="4000">Agregar al carrito</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img
              src="https://www.sephora.com.mx/on/demandware.static/-/Sites-masterCatalog_Sephora/es_MX/dw4c02f367/images/hi-res/eau-de-parfum-gucci-gucci-gucci-guilty-for-her-eau-de-parfum-90ml3614227758162A.jpg"
              class="card-img-top"
              alt="Producto 6"
            />
            <div class="card-body">
              <h5 class="card-title">Gucci Guilty $5000mxn</h5>
              <p class="card-text">
                Una fragancia audaz y femenina, con notas de mandarina, pimienta
                rosa y lilas, perfecta para la mujer segura de sí misma.
              </p>
              <button class="btn btn-outline-dark d-flex justify-content-center add-to-cart" data-product="Gucci Guilty "data-price="5000">Agregar al carrito</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img
              src="https://ss701.liverpool.com.mx/xl/64332775.jpg"
              class="card-img-top"
              alt="Producto 10"
            />
            <div class="card-body">
              <h5 class="card-title">Marc Jacobs Daisy $2900mxn</h5>
              <p class="card-text">
                Una fragancia floral luminosa y fresca, con notas de fresa
                silvestre, pétalos de violeta y un toque de almizcle.
              </p>
              <button class="btn btn-outline-dark d-flex justify-content-center add-to-cart" data-product="Marc Jacobs Daisy "data-price="2900">Agregar al carrito</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img
              src="https://ss881.suburbia.com.mx/xl/2897136.jpg"
              class="card-img-top"
              alt="Producto 11"
            />
            <div class="card-body">
              <h5 class="card-title">Lancome La Vie Est Belle $3200mxn</h5>
              <p class="card-text">
                Una fragancia elegante y femenina con notas de iris, jazmín, y
                un toque de vainilla y praliné.
              </p>
              <button class="btn btn-outline-dark d-flex justify-content-center add-to-cart" data-product="Lancome La Vie Est Belle "data-price="3200">Agregar al carrito</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img
              src="https://ss701.liverpool.com.mx/xl/1110802877.jpg"
              class="card-img-top"
              alt="Producto 12"
            />
            <div class="card-body">
              <h5 class="card-title">Viktor & Rolf Flowerbomb $1200mxn</h5>
              <p class="card-text">
                Una fragancia explosiva y floral con notas de té, bergamota,
                jazmín y fresia, perfecta para cualquier ocasión especial.
              </p>
              <button class="btn btn-outline-dark d-flex justify-content-center add-to-cart" data-product="Viktor & Rolf Flowerbomb " data-price="1200">Agregar al carrito</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <!-- Footer -->
    <!-- Footer -->
   
    <footer class="container-fluid bg-dark text-light text-center py-3">
      <p class="mb-0">AnyFumes 2021</p>

      <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cartCounter = document.getElementById('cart-counter'); 
            const buttons = document.querySelectorAll('.add-to-cart');
            let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            let cartCount = cartItems.length;
            let totalPrice = cartItems.reduce((sum, item) => sum + item.price, 0);

            // Actualiza el contador y el carrito en la interfaz de usuario al cargar la página
            cartCounter.textContent = cartCount;
            updateCart();

            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    const product = this.getAttribute('data-product'); 
                    const price = parseFloat(this.getAttribute('data-price'));
                    addToCart(product, price); 
                });
            });

            function addToCart(product, price) {
                cartCount++; 
                cartCounter.textContent = cartCount;
                cartItems.push({ product, price });
                localStorage.setItem('cartItems', JSON.stringify(cartItems));
                totalPrice += price;
                updateCart();
                showNotification(`${product} ha sido agregado al carrito.`);
            }

            function updateCart() {
                const cartMenu = document.getElementById('cart-items');
                cartMenu.innerHTML = '';
                if (cartItems.length === 0) {
                    cartMenu.innerHTML = '<li><a class="dropdown-item">Carrito vacío</a></li>';
                } else {
                    cartItems.forEach(item => {
                        const li = document.createElement('li');
                        li.innerHTML = `<a class="dropdown-item">${item.product} - $${item.price}mxn</a>`;
                        cartMenu.appendChild(li);
                    });
                    const liTotal = document.createElement('li');
                    liTotal.innerHTML = `<a class="dropdown-item"><strong>Total: $${totalPrice}mxn</strong></a>`;
                    cartMenu.appendChild(liTotal);

                    const hr = document.createElement('hr');
                    hr.className = 'dropdown-divider';
                    cartMenu.appendChild(hr);

                    const clearButton = document.createElement('button');
                    clearButton.className = 'dropdown-item text-danger';
                    clearButton.textContent = 'Vaciar carrito';
                    clearButton.addEventListener('click', () => {
                        cartItems = [];
                        cartCount = 0;
                        totalPrice = 0;
                        updateCart();
                        cartCounter.textContent = cartCount;
                        localStorage.removeItem('cartItems');
                        showNotification('El carrito ha sido vaciado.');
                    });
                    cartMenu.appendChild(clearButton);

                    const payButton = document.createElement('button');
                    payButton.className = 'dropdown-item text-success';
                    payButton.textContent = 'Pagar carrito';
                    payButton.addEventListener('click', () => {
                      localStorage.setItem('cartItems', JSON.stringify(cartItems));
                      window.location.href = 'pago.php';
                    });
                    cartMenu.appendChild(payButton);
                }
                cartCounter.textContent = cartCount;
            }

            function showNotification(message) {
                const notification = document.getElementById('notification');
                notification.textContent = message;
                notification.style.display = 'block';
                setTimeout(() => {
                    notification.style.display = 'none';
                }, 3000); 
            }
        });
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    </body>
</html>
