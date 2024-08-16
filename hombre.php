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
                    <a class="dropdown-item" href="cuenta.php">Mi cuenta</a>
                    <li>
                      
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
        <h2 class="text-center mb-5 mt-4">Nuestros Productos (Hombre)</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://www.perfumeriabasic.com/cdn/shop/files/EROSFLEME_2.png?v=1684791538&width=1445"
                        class="card-img-top" alt="Producto 1" />
                    <div class="card-body">
                        <h5 class="card-title">Versace Eros Flame $2300mxn</h5>
                        <p class="card-text">
                            Eros Flame es una fragancia fuerte, apasionada y decidida, para
                            quien vive sus emociones con ardor.
                        </p>
                        <button class="btn btn-outline-dark d-flex justify-content-center add-to-cart"
                            data-product="Versace Eros Flame "data-price="2300">Agregar al carrito</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://img1.picmix.com/output/stamp/normal/6/1/4/5/2285416_2ab2d.png"
                        class="card-img-top" alt="Producto 2" />
                    <div class="card-body">
                        <h5 class="card-title">Dior Sauvage $3100mxn</h5>
                        <p class="card-text">
                            Su estela se traduce en notas de mandarina, haba tonka y madera
                            de sándalo.
                        </p>
                        
                        <button class="btn btn-outline-dark d-flex justify-content-center add-to-cart"
                            data-product="Dior Sauvage "data-price="3100">Agregar al carrito</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://peacearchdutyfree.com/media/catalog/product/cache/eda70f405f0e744d807f92913507b2ef/5/0/504715-1.png"
                        class="card-img-top" alt="Producto 3" />
                    <div class="card-body">
                        <h5 class="card-title">Versace Eros $2900mxn</h5>
                        <p class="card-text">
                            El aroma sensual fusiona notas amaderadas, orientales y frescas
                            para crear un potente perfume que evoca a Eros, el dios del
                            amor.
                        </p>
                        <button class="btn btn-outline-dark d-flex justify-content-center add-to-cart"
                            data-product="Versace Eros "data-price="2900">Agregar al carrito</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://arome.mx/cdn/shop/files/perfume-acqua-di-gio-para-hombre-de-giorgio-armani-edp-75ml-y-125ml-arome-mexico-3.png?v=1705346938"
                        class="card-img-top" alt="Producto 4" />
                    <div class="card-body">
                        <h5 class="card-title">Aqua di Gio $2900mxn</h5>
                        <p class="card-text">
                            Una fragancia fresca y acuática, ideal para el hombre moderno
                            que busca un aroma distintivo.
                        </p>
                        <button class="btn btn-outline-dark d-flex justify-content-center add-to-cart"
                            data-product="Aqua di Gio "data-price="2900">Agregar al carrito</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://www.chanel.com/images//t_one/t_fragrance//q_auto:good,f_auto,fl_lossy,dpr_1.1/w_1920/bleu-de-chanel-eau-de-parfum-spray-3-4fl-oz--packshot-default-107360-9539149398046.jpg"
                        class="card-img-top" alt="Producto 7" />
                    <div class="card-body">
                        <h5 class="card-title">Chanel Bleu de Chanel $2900mxn</h5>
                        <p class="card-text">
                            Una fragancia amaderada aromática que combina cítricos frescos y
                            notas de cedro, perfecta para el hombre sofisticado.
                        </p>
                        <button class="btn btn-outline-dark d-flex justify-content-center add-to-cart"
                            data-product="Chanel Bleu de Chanel "data-price="2900">Agregar al carrito</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://ss701.liverpool.com.mx/xl/1132561385.jpg" class="card-img-top" alt="Producto 8" />
                    <div class="card-body">
                        <h5 class="card-title">Prada Luna Rossa $1900mxn</h5>
                        <p class="card-text">
                            Una fragancia fresca y energizante con notas de lavanda, salvia
                            y ámbar, ideal para el hombre activo y dinámico.
                        </p>
                        <button class="btn btn-outline-dark d-flex justify-content-center add-to-cart"
                            data-product="Prada Luna Rossa " data-price="1900">Agregar al carrito</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://www.sephora.com.mx/on/demandware.static/-/Sites-masterCatalog_Sephora/es_MX/dwf9ddbcc4/images/hi-res/boletos/Karla%20Nieto/TOM%20FORD/888066024082_1.jpg"
                        class="card-img-top" alt="Producto 9" />
                    <div class="card-body">
                        <h5 class="card-title">Tom Ford Oud Wood $7000mxn</h5>
                        <p class="card-text">
                            Una fragancia rica y exótica con notas de madera de oud,
                            cardamomo y sándalo, ideal para aquellos que buscan un aroma
                            distintivo.
                        </p>
                        <button class="btn btn-outline-dark d-flex justify-content-center add-to-cart"
                            data-product="Tom Ford Oud Wood $7000mxn">Agregar al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
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
