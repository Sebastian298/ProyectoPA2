<head>
  <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0">
  <link rel="stylesheet" href="https://img1.wsimg.com/ux/1.3.9-brand/css/uxcore.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>
<link rel="stylesheet" href="../css/cart.css">
<script src="../js/cart.js"></script>
</head>
<body class="ux-app">
<div class="container">
  <div class="cart">
    <div class="basket col-md-6 col-md-offset-1">
      <div class="product ux-card">
        <img src="https://img1.wsimg.com/fos/react/sprite.svg#domains" height="32" width="32" />
        <span class="title"><a href="/product/{id}">catstewardesses</a></span>
        <span class="price">
          $12.99
        </span>
        <span class="tier">.com</span>
        <span class="term">1 year</span>
        <span class="attr">Privacy: ON</span>
        <span class="renews">Renews at $14.99/yr</span>
        <button class="btn btn-canvas btn-xs remove" href="product/remove"><span class="uxicon uxicon-trash"></span>Remove</button>
      </div>
      <div class="product ux-card">
        <img src="https://img1.wsimg.com/fos/react/sprite.svg#website-builder" height="32" width="32" />
        <span class="title"><a href="/product/{id}">Website Builder</a></span>
        <span class="price">$12.00</span>
        <span class="tier">Personal</span>
        <span class="term">12 months</span>
        <span class="renews">Renews at $5.99/mo</span>
        <button class="btn btn-canvas btn-xs remove" href="product/remove"><span class="uxicon uxicon-trash"></span>Remove</button>
      </div>
      <div class="product ux-card">
        <img src="https://img1.wsimg.com/fos/react/sprite.svg#get-found" height="32" width="32" />
        <span class="title"><a href="/product/{id}">Get Found</a></span>
        <span class="price"><strike></strike>$143.88</span>
        <span class="tier">Essential</span>
        <span class="term">12 months</span>
        <span class="renews">Renews at $11.99/mo</span>
        <button class="btn btn-canvas btn-xs remove" href="product/remove"><span class="uxicon uxicon-trash"></span>Remove</button>
      </div>
    </div>
    <div class="summary col-md-4">
      <dl class="subtotal">
        <dt>Subtotal</dt>
        <dd>$14.99</dd>
        <dt><a href="/taxes">Estimated Taxes & Fees</a></dt>
        <dd>$3.42</dd>
      </dl>
      <dl class="total">
        <dt>Total</dt>
        <dd>$18.41</dd>
      </dl>
      <dl class="support">
        <dt><a href="/savings/">Total savings</a></dt>
        <dd>$150.00</dd>
        <dt><a href="/promocode/add">Have a promocode?</a></dt>
      </dl>
      <div class="payment">
        <a href="payment/add">Add</a>
        <h4 class="headline-primary">Payment</h3>
        <div class="ux-card">
          <a href="/payment/{id}"><img src="https://img1.wsimg.com/fos/react/sprite.svg#visa" height="32" width="50" /> John Doe</a>
        </div>
      </div>
      <div class="terms">
        <h4 class="headline-primary">Terms & Conditions</h3>
        <p class="review">Clicking on "I Agree" means you agree to GoDaddy's <a href="terms/show">Terms & Conditions</a>.</p>
        <p class="review"><strong>Products automatically</strong> renew until cancelled, and are billed to your payment method on file. Turn off auto-renew in your GoDaddy account.</p>
        <p class="agreed">I've read and agreed to the <a href="terms/show">Term & Conditions</a>.</p>
        <button type="button" class="btn btn-purchase review">I Agree</button>
      </div>
      <div class="complete">
        <button type="button" disabled="disabled" class="btn btn-purchase">Complete Purchase</button>
      </div>
    </div>
  </div>
</div>
<div id="controls">
  <label>Controls</label><br>
  <ul class="nav nav-stacked">
    <li><button id="undelete">Undelete All</button></li>
    <li><button id="changePrices">$0.99 .COM Domain</button></li>
  </ul>
</div>
</body>

