/* Set values + misc */
var promoCode;
var promoPrice;
var fadeTime = 300;
/* Assign actions */
$('#number').change(function() {
  updateQuantity(this);
});

$('.remove button').click(function() {
  alert('click');
  removeItem(this);
});

$(document).ready(function() {
  updateSumItems();
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
  //se actualizara la lista de la session en php
  let cadena = productRow.children('.item').children('.product-details').children('#codeProduct').text();
  
  let idProduct = parseInt(cadena.substring(cadena.indexOf(':')+1));
  
  updateCarrito(idProduct,quantity);

}

function updateCarrito(idProduct,quantity){
  let params = 'IdProducto='+idProduct+'&Quantity='+quantity;
  let peticion = new XMLHttpRequest();
    peticion.open('POST','../db/updateCarrito.php');
    peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    peticion.send(params);
}

function updateSumItems() {
  var sumItems = 0;
  $('.quantity input').each(function() {
    sumItems += parseInt($(this).val());
  });
  $('#totalItems').text(sumItems + " Products in your bag");
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
  
  let cadena = productRow.children('.item').children('.product-details').children('#codeProduct').text();
  let idProduct = parseInt(cadena.substring(cadena.indexOf(':')+1));
  deleteCarrito(idProduct);
}

function deleteCarrito(id){
  let params = 'idProduct='+id;
  let peticion = new XMLHttpRequest();
    peticion.open('POST','../db/deleteCarrito.php');
    peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    peticion.send(params);
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
                <p id="codeProduct">Product Code: ${data[index].ProductoID}</p>
              </div>
            </div>
            <div class="price">${data[index].Precio}</div>
            <div class="quantity">
              <input type="number" value="${data[index].Cantidad}" min="1" class="quantity-field" onclick="callUpdate(this)">
            </div>
            <div class="subtotal" id="Subtotal${contador+1}">${data[index].Cantidad * data[index].Precio}</div>
            <div class="remove">
              <button class="remove" onclick="deletearCarrito(this)">Remove</button>
            </div>
          </div>`;
          contador++;
      }
      //totalItems.innerHTML +=`${contador} Products in your cart`;
      recalculateCart();
      updateSumItems();
    }
}

getCarrito();

function callUpdate(item){
  updateQuantity(item);
}

function deletearCarrito(button){
  removeItem(button)
}

function metodoPago(){
  let x = document.getElementById("paymentSelect").value;
  if (x==2){
    $("#metodoPago").show();
  }else{
    $("#metodoPago").hide();
  }
 
}

function peticionPagar(){
        let peticion = new XMLHttpRequest();
        peticion.open('POST','../db/addCompra.php');
        let param = 'metodoID='+paymentSelect.value;
        peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        peticion.send(param);
}
//Metodo para mandar la peticion de compras
function Pagar(){
  //En caso de que sea tarjeta verificamos que los campos no queden vacíos
  if(items.children.length > 1){
    if(paymentSelect.value==0){
      Swal.fire(
        'Error!',
        `You must select a payment method`,
        'error'
        ).then(()=>{
          return;
        })
    }else if(paymentSelect.value==1 | paymentSelect.value==2 ){
     
      peticionPagar();
      if (paymentSelect.value==1) {
        var bandera = true;
        var codigo=Math.random().toString();
        codigo = codigo.substring(2);
        codigo = 'your OXXO reference code is ' + codigo;
        
      }else{
        bandera = false;
        codigo = " ";
        if (!validarPago()) {
          Swal.fire(
            'Error!',
            `There's an empty field or a field with bad information`,
            'error'
            ).then(()=>{
              return;
            })
        }
          
      }
      Swal.fire(
        'Thank you!',
        'Your purchase has been registered ' + codigo,
        'success'
       ).then(() => {
         location.reload();
       })
    }
  }else{
    Swal.fire(
      'Error!',
      `Your cart is empty`,
      'error'
      ).then(()=>{
        return;
      })
  }
  
  
  
 
}

function cargarXML(){
  alert('Jaj')
}

function validarPago(){
  if(nCard.value=="" | cNumber.value==""| MM.value==0|AAAA.value==0|CVC.value=="") return false;
  return true;
}

function downloadData(contentType,data,filename){

  var link=document.createElement("A");
  link.setAttribute("href",encodeURI("data:"+contentType+","+data));
  link.setAttribute("style","display:none");
  link.setAttribute("download",filename);
  document.body.appendChild(link); 
  link.click();
  setTimeout(function(){
    document.body.removeChild(link);
  },1000);
}

function download(){

  if(items.children.length > 1){
    var data=fromToXml();
    downloadData("text/xml",data,"export.xml");
  }else{
    Swal.fire(
      'Error!',
      `Your cart is empty`,
      'error'
      ).then(()=>{
        return;
      })
  }
  
 }
 

function fromToXml(){
  
  var req = new XMLHttpRequest();
  req.open('GET', '../db/getCarrito.php', false); 
  req.send(null);
  if (req.status == 200){
    var xmldata=['<?xml version="1.0"?>'];
    xmldata.push("<cart>");
   data = JSON.parse(req.responseText);
   for (let index = 0; index < data.length; index++) {
     let item = '';
     item+=`<Product>`;
     item+=`<ID>${data[index].ProductoID}</ID>`;
     item+=`<Name>${data[index].Nombre}</Name>`;
     item+=`<Description>${data[index].Descripcion}</Description>`;
     item+=`<Price>${data[index].Precio}</Price>`;
     item+=`<Quantity>${data[index].Cantidad}</Quantity>`
     item+=`<Image>${data[index].Imagen}</Image>`;
     item+=`</Product>`;
     xmldata.push(item);
    }
    xmldata.push("</cart>");
    return xmldata.join("\n");
  }
}
