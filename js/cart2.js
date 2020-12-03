/* Set values + misc */
var promoCode;
var promoPrice;
var fadeTime = 300;


/* Assign actions */
$('.quantity input').change(function() {
  updateQuantity(this);
});

$('.remove button').click(function() {
  removeItem(this);
});

$(document).ready(function() {
  updateSumItems();
});

$('.promo-code-cta').click(function() {

  promoCode = $('#promo-code').val();

  if (promoCode == '10off' || promoCode == '10OFF') {
    //If promoPrice has no value, set it as 10 for the 10OFF promocode
    if (!promoPrice) {
      promoPrice = 10;
    } else if (promoCode) {
      promoPrice = promoPrice * 1;
    }
  } else if (promoCode != '') {
    alert("Invalid Promo Code");
    promoPrice = 0;
  }
  //If there is a promoPrice that has been set (it means there is a valid promoCode input) show promo
  if (promoPrice) {
    $('.summary-promo').removeClass('hide');
    $('.promo-value').text(promoPrice.toFixed(2));
    recalculateCart(true);
  }
});

/* Recalculate cart */
function recalculateCart(onlyTotal) {
  var subtotal = 0;

  /* Sum up row totals */
  $('.basket-product').each(function() {
    subtotal += parseFloat($(this).children('.subtotal').text());
  });

  /* Calculate totals */
  var total = subtotal;

  /*If switch for update only total, update only total display*/
  if (onlyTotal) {
    /* Update total display */
    $('.total-value').fadeOut(fadeTime, function() {
      $('#basket-total').html(total.toFixed(2));
      $('.total-value').fadeIn(fadeTime);
    });
  } else {
    /* Update summary display. */
    $('.final-value').fadeOut(fadeTime, function() {
      $('#basket-subtotal').html(subtotal.toFixed(2));
      $('#basket-total').html(total.toFixed(2));
      if (total == 0) {
        $('.checkout-cta').fadeOut(fadeTime);
      } else {
        $('.checkout-cta').fadeIn(fadeTime);
      }
      $('.final-value').fadeIn(fadeTime);
    });
  }
}

/* Update quantity */
function updateQuantity(quantityInput) {
  /* Calculate line price */
  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.children('.price').text());
  var quantity = $(quantityInput).val();
  var linePrice = price * quantity;

  /* Update line price display and recalc cart totals */
  productRow.children('.subtotal').each(function() {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });

  productRow.find('.item-quantity').text(quantity);
  updateSumItems();
}

function updateSumItems() {
  var sumItems = 0;
  $('.quantity input').each(function() {
    sumItems += parseInt($(this).val());
  });
  $('.total-items').text(sumItems);
}

/* Remove item from cart */
function removeItem(removeButton) {
  /* Remove row from DOM and recalc cart total */
  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
    updateSumItems();
  });
}

function getCarrito(){
  let contador = 0;
  let peticion = new XMLHttpRequest();
    peticion.open('GET','../db/getCarrito.php');
    peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    peticion.send();
    peticion.onload = function() {
      data = JSON.parse(peticion.responseText);
      for (let index = 0; index < data.length; index++) {
        items.innerHTML+=`
        <div class="basket-product">
            <div class="item">
              <div class="product-image">
                <img src="${data[index].Imagen}" alt="Placholder Image 2" class="product-frame">
              </div>
              <div class="product-details">
                <h1><strong><span class="item-quantity">${data[index].Cantidad}</span>  </strong>${data[index].Nombre}</h1>
                <p><strong>${data[index].Descripcion}</strong></p>
                <p>Product Code: ${data[index].ProductoID}</p>
              </div>
            </div>
            <div class="price">${data[index].Precio}</div>
            <div class="quantity">
              <input type="number" value="${data[index].Cantidad}" min="1" class="quantity-field">
            </div>
            <div class="subtotal" id="Subtotal${contador+1}">${data[index].Cantidad * data[index].Precio}</div>
            <div class="remove">
              <button class="remove">Remove</button>
            </div>
          </div>`;
          contador++;
      }
      totalItems.innerHTML +=`${contador} Products in your cart`;
      recalculateCart();
    }
}

function calSubtotal(){

}

getCarrito();