shRouters();
shSwitch();
shAccess();
shCables();


function shRouters(){
    let data;
    let idCat = 1;
    let param = 'IdCat='+idCat;
    let peticion = new XMLHttpRequest();
    peticion.open('POST','../db/getProducts.php');
    peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    peticion.send(param);
    peticion.onload = function(){
        data = JSON.parse(peticion.responseText);
        for (let index = 0; index < data.length; index++) {
            cardsRouter.innerHTML+=`   <div class="card">
            <img class="card-img-top" src="${data[index].Imagen}"></img>
            <div class="card-body">
              <h5 class="card-title">${data[index].Nombre}</h5>
              <p class="card-text">${data[index].Descripcion}</p>
              <p class="card-text">Price: $${data[index].Precio}</p>
              <button type="button" class="btn btn-outline-primary">Add to Cart</button>
            </div>
          </div> `;
        }
    }
}

function shSwitch(){
    let data;
    let idCat = 2;
    let param = 'IdCat='+idCat;
    let peticion = new XMLHttpRequest();
    peticion.open('POST','../db/getProducts.php');
    peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    peticion.send(param);
    peticion.onload = function(){
        data = JSON.parse(peticion.responseText);
        for (let index = 0; index < data.length; index++) {
            cardsSwitch.innerHTML+=`<div class="card">
            <img class="card-img-top" src="${data[index].Imagen}"></img>
            <div class="card-body">
            <h5 class="card-title">${data[index].Nombre}</h5>
            <p class="card-text">${data[index].Descripcion}</p>
            <p class="card-text">Price: $${data[index].Precio}</p>
            <button type="button" class="btn btn-outline-info">Add to Cart</button>
            </div>
          </div>`;
        }
    }
}

function shAccess(){
    let data;
    let idCat =3;
    let param = 'IdCat='+idCat;
    let peticion = new XMLHttpRequest();
    peticion.open('POST','../db/getProducts.php');
    peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    peticion.send(param);
    peticion.onload = function(){
        data = JSON.parse(peticion.responseText);
        for (let index = 0; index < data.length; index++) {
            cardsAccess.innerHTML+=`<div class="card">
            <img class="card-img-top" src="${data[index].Imagen}"></img>
            <div class="card-body">
            <h5 class="card-title">${data[index].Nombre}</h5>
            <p class="card-text">${data[index].Descripcion}</p>
            <p class="card-text">Price: $${data[index].Precio}</p>
            <button type="button" class="btn btn-outline-success">Add to Cart</button>
            </div>
          </div>`;
        }
    }
}

function shCables(){
    let data;
    let idCat =4;
    let param = 'IdCat='+idCat;
    let peticion = new XMLHttpRequest();
    peticion.open('POST','../db/getProducts.php');
    peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    peticion.send(param);
    peticion.onload = function(){
        data = JSON.parse(peticion.responseText);
        for (let index = 0; index < data.length; index++) {
            cardsCables.innerHTML+=`<div class="card">
            <img class="card-img-top" src="${data[index].Imagen}"></img>
            <div class="card-body">
            <h5 class="card-title">${data[index].Nombre}</h5>
            <p class="card-text">${data[index].Descripcion}</p>
            <p class="card-text">Price: $${data[index].Precio}</p>
            <button type="button" class="btn btn-outline-dark">Add to Cart</button>
            </div>
          </div>`;
        }
    }
}