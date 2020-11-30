function registerUser(){
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
        'Excelente!',
        'Se a registrado correctamente',
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

function CamposVacios(){
    if(txtUserName.value==""|txtPhone.value==""|txtName.value==""|txtLastName.value==""|txtEmail.value==""|txtPassword.value=="") return false;
    return true;
}