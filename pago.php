<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar Carrito</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Pagar Carrito</h1>
        <div id="cart-summary" class="mt-4">
            <p>El carrito está vacío.</p>
        </div>
        <div class="mt-4">
            <h2>Seleccionar Método de Pago</h2>
            <form id="payment-form">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentMethod" id="creditCard" value="creditCard" checked>
                    <label class="form-check-label" for="creditCard">
                        Tarjeta de Crédito/Débito
                    </label>
                </div>
                <div id="creditCardInfo" class="payment-info">
                    <div class="mb-3">
                        <label for="cardNumber" class="form-label">Número de Tarjeta</label>
                        <input type="text" class="form-control" id="cardNumber" required>
                    </div>
                    <div class="mb-3">
                        <label for="cardExpiry" class="form-label">Fecha de Expiración</label>
                        <input type="text" class="form-control" id="cardExpiry" placeholder="MM/AA" required>
                    </div>
                    <div class="mb-3">
                        <label for="cardCVC" class="form-label">CVC</label>
                        <input type="text" class="form-control" id="cardCVC" required>
                    </div>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentMethod" id="paypal" value="paypal">
                    <label class="form-check-label" for="paypal">
                        PayPal
                    </label>
                </div>
                <div id="paypalInfo" class="payment-info d-none">
                    <div class="mb-3">
                        <label for="paypalEmail" class="form-label">Correo Electrónico de PayPal</label>
                        <input type="text" class="form-control" id="paypalEmail">
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-success">Pagar</button>
                   <a style="margin-left: 200px; margin-top: 20px;"href="indexx.php">Volver</a>
                </div> 
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cartSummary = document.getElementById('cart-summary');
            const paymentForm = document.getElementById('payment-form');
            const creditCardInfo = document.getElementById('creditCardInfo');
            const paypalInfo = document.getElementById('paypalInfo');
            const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            const totalPrice = cartItems.reduce((sum, item) => sum + item.price, 0);

            if (cartItems.length === 0) {
                cartSummary.innerHTML = '<p>El carrito está vacío.</p>';
            } else {
                cartSummary.innerHTML = '<ul class="list-group"></ul>';
                const listGroup = cartSummary.querySelector('.list-group');
                cartItems.forEach(item => {
                    const li = document.createElement('li');
                    li.className = 'list-group-item';
                    li.textContent = `${item.product} - $${item.price}mxn`;
                    listGroup.appendChild(li);
                });

                const liTotal = document.createElement('li');
                liTotal.className = 'list-group-item active';
                liTotal.innerHTML = `<strong>Total: $${totalPrice}mxn</strong>`;
                listGroup.appendChild(liTotal);
            }

            paymentForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;
                
                if (paymentMethod === 'creditCard') {
                    const cardNumber = document.getElementById('cardNumber').value;
                    const cardExpiry = document.getElementById('cardExpiry').value;
                    const cardCVC = document.getElementById('cardCVC').value;
                    
                    alert(`Pago realizado con tarjeta de crédito: ${cardNumber}`);
                } else if (paymentMethod === 'paypal') {
                    const paypalEmail = document.getElementById('paypalEmail').value;
                    
                    alert(`Pago realizado con PayPal: ${paypalEmail}`);
                }

                localStorage.removeItem('cartItems');
                window.location.href = 'indexx.php';
            });

            document.querySelectorAll('input[name="paymentMethod"]').forEach(input => {
                input.addEventListener('change', function() {
                    if (this.value === 'creditCard') {
                        creditCardInfo.classList.remove('d-none');
                        paypalInfo.classList.add('d-none');
                    } else if (this.value === 'paypal') {
                        creditCardInfo.classList.add('d-none');
                        paypalInfo.classList.remove('d-none');
                    }
                });
            });
        });
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
