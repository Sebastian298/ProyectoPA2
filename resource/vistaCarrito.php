<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/cart2.css">
</head>
<style>
  #metodoPago{display:none;}
  #addMethod{display:none;}
</style>
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
              <select name="delivery-collection" class="summary-delivery-selection" id="paymentSelect" onchange="metodoPago()">
                  <option value="0">Select a payment method</option>
                 <option value="1">OXXO</option>
                 <option value="2">Credit/Debit Card</option>
              </select>
            </div>
            <div class="summary-delivery" id="metodoPago">
              <div class="subtotal-tittle"></div>
              <div class="subtotal-tittle"><input class="summary-delivery-selection" type="text"  id="nCard" placeholder="Name on card" onkeypress='return event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 97 &&  event.charCode <=122 || event.charCode==32'></div>
              <div class="subtotal-tittle"><input class="summary-delivery-selection" type="text" maxlength="16" id="cNumber" placeholder="Card number"></div>
              <div class="subtotal-tittle">
                <select name="delivery-collection" class="summary-delivery-selection" id="MM">
                  <option value="0">MM</option>
                 <option value="1">01</option>
                 <option value="2">02</option>
                 <option value="3">03</option>
                 <option value="4">04</option>
                 <option value="5">05</option>
                 <option value="6">06</option>
                 <option value="7">07</option>
                 <option value="8">08</option>
                 <option value="9">09</option>
                 <option value="10">10</option>
                 <option value="11">11</option>
                 <option value="12">12</option>
                </select>
              </div>
              <div class="subtotal-tittle">
                 <select name="delivery-collection" class="summary-delivery-selection" id="AAAA">
                  <option value="0">AAAA</option>
                    <option value="1">2020</option>
                    <option value="2">2021</option>
                    <option value="3">2022</option>
                    <option value="4">2023</option>
                    <option value="5">2024</option>
                </select>
              </div>
              <div class="subtotal-tittle"><input class="summary-delivery-selection" maxlength="3" type="text" id="CVC" placeholder="CVC"></div>
            </div>
            <div class="summary-total">
              <div class="total-title">Total</div>
              <div class="total-value final-value" id="basket-total">0.00</div>
            </div>
         
            <div class="summary-checkout">
              <button class="checkout-cta" id="payout" onclick="Pagar()">Payout</button>
            </div>
          </div>
         
        </aside>
      </main>

          
      
      <script src="../js/cart2.js"></script>
</body>
</html>