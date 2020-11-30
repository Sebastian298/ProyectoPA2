function registerUser(){
    let user = txtUserName.value;
    let telefono = txtPhone.value;
    let name = txtName.value;
    let lastName = txtLastName.value;
    let email = txtEmail.value;
    let password = txtPassword.value;
    alert(user,telefono,name,lastName,email,password);
    if(password==txtConfirmPassword.value){
        let peticion = new XMLHttpRequest();
        peticion.open('POST','../db/addUser.php');
        let params = 'user='+ user + '&password='+password+'&phone='+telefono+'&name='+name+'&lastName='+lastName+'&email='+email;
        peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        peticion.send(params);
    }
}