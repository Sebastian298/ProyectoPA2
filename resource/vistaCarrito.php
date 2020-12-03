<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/cart2.css">
</head>
<body>
    <main>
        <div class="basket" id="items">
          <div class="basket-labels">
            <ul>
              <li class="item item-heading">Item</li>
              <li class="price">Price</li>
              <li class="quantity">Quantity</li>
              <li class="subtotal">Subtotal</li>
            </ul>
          </div>
        </div>
        <aside>
          <div class="summary">
            <div class="summary-total-items"><span class="total-items"  id="totalItems"></span></div>
            <div class="summary-subtotal">
              <div class="subtotal-title">Subtotal</div>
              <div class="subtotal-value final-value" id="basket-subtotal"></div>
              <div class="summary-promo hide">
                <div class="promo-title">Promotion</div>
                <div class="promo-value final-value" id="basket-promo"></div>
              </div>
            </div>
            <div class="summary-delivery">
              <select name="delivery-collection" class="summary-delivery-selection">
                  <option value="0" selected="selected">Select a payment method</option>
                 <option value="1">OXXO</option>
                 <option value="2">Credit/Debit Card</option>
              </select>
            </div>
            <div class="summary-total">
              <div class="total-title">Total</div>
              <div class="total-value final-value" id="basket-total">130.00</div>
            </div>
            <div class="summary-checkout">
              <button class="checkout-cta">Payout</button>
            </div>
          </div>
        </aside>
      </main>
      <script src="../js/cart2.js"></script>
</body>
</html>