userID.style.display ='none';
function registerUser(){

    if (!ValidFields()) {
        Swal.fire(
            'Error!',
            `There's an empty field or a field with bad information`,
            'error'
          )
    }
    else{
        let user = txtUserName.value;
        let telefono = txtPhone.value;
        let name = txtName.value;
        let lastName = txtLastName.value;
        let email = txtEmail.value;
        let password = txtPassword.value;
       if(CamposVacios()){
           let peticion = new XMLHttpRequest();
           peticion.open('POST','../db/addUser.php');
           let params = 'username='+ user + '&password='+password+'&phonenumber='+telefono+'&name='+name+'&lastname='+lastName+'&email='+email;
           peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
           peticion.send(params);
           Swal.fire(
            'Excellent!',
            'It has been successfully registered',
            'success'
           ).then(() => {
       location.href = "../views/address.view.php"
    })
          
       }else {
        Swal.fire(
            'Error!',
            `There's an empty field or a field with bad information`,
            'error'
          )
       }
    }
 
}

function CamposVacios(){
    if(txtUserName.value==""|txtPhone.value==""|txtName.value==""|txtLastName.value==""|txtEmail.value==""|txtPassword.value=="") return false;
    return true;
}

function validarCaptura(){
    if(isNaN(nameUser.value) && isNaN(lName.value)){
        return true;
	}
	return false
}

function inputVacio(){
    if(nameUser.value==""|emailUser.value==""|tel.value==""|lName.value=="") return false;
    return true;
}

function updateUser(){
    if (validarCaptura() && inputVacio()) {
        let userName = nameUser.value,
        lastName = lName.value,
        idUser = userID.value,
        emUser = emailUser.value,
        telUser = tel.value;

        let peticion = new XMLHttpRequest();
        peticion.open('POST','../db/updateUser.php');
        let param = 'Id='+idUser+'&userName='+userName+'&lastName='+lastName+'&email='+emUser+'&phone='+telUser;
        peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        peticion.send(param);
        Swal.fire(
            'Excellent!',
            'Successful update',
            'success'
           ).then(() => {
       location.href = "../views/profile.view.php"
    })
    }else{
        Swal.fire(
            'Error!',
            `There's an empty field or a field with bad information`,
            'error'
          )
    }
}

// var element = document.getElementById(id);
//     var cStyle = getComputedStyle(element);
//     var visibility = cStyle.getPropertyValue("visibility");  
//     element.style.visibility = visibility === "visible" ? "hidden" : "visible";

function ValidFields(){
    for (let index = 1; index < 6; index++) {
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