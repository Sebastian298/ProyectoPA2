function registerAddress(){
    if (!ValidFields()) {
        Swal.fire(
            'Error!',
            `There's an empty field or a field with bad information`,
            'error'
          )
    }
    else{
        let OutNumber = outdoorNumber.value,
        iNumber = interiorNumber.value,
        Street = street.value,
        Settlement = settlement.value,
        City = city.value,
        State = state.value,
        Zip = zip.value;
        
        if (CamposVacios()) {
            let peticion = new XMLHttpRequest();
           peticion.open('POST','../db/addAddress.php');
           let params = 'outNumber='+ OutNumber+'&interiorNumber='+iNumber+ '&street='+Street+'&settlement='+Settlement+'&city='+City+'&state='+State+'&zip='+Zip;
           peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
           peticion.send(params);
           Swal.fire(
            'Excellent!',
            'It has been successfully registered',
            'success'
           ).then(() => {
            location.href = "../login.php"
           })
        }else{
            Swal.fire(
                'Error!',
                `There's an empty field or a field with bad information`,
                'error'
              )
        }
    }
}

function CamposVacios(){
    if(outdoorNumber.value==""|street.value==""|settlement.value==""|city.value==""|state.value==""|zip.value=="") return false;
    return true;
}

function Later(){
    location.href = "../cerrarSesion.php"
}

function ValidFields(){
    for (let index = 1; index < 5; index++) {
        let concValid = 'valid' + index.toString();
        let element = document.getElementById(concValid);
        let cStyle = getComputedStyle(element);
        let display = cStyle.getPropertyValue("display");  
        switch (display) {
            case 'block':
                break;
            case 'none':
                return false;
        }
    }
    return true;
}