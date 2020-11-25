
//Se ejecuta cada ves que se detecte un evento keyUp..... en el input password......
$(document).ready(function () {
    $('#txtPassword').keyup(function () {
        $('#strengthMessage').html(checkStrength($('#txtPassword').val()))
    })
    function checkStrength(password) {
        let strength = 0
        if (password.length < 6) {
            $('#strengthMessage').removeClass()
            $('#strengthMessage').addClass('Short')
            return 'Too short'
        }
        if (password.length > 7) strength += 1
        // Si la contraseña contiene caracteres tanto en minúsculas como en mayúsculas, aumenta el valor del password...
        if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
        //Si tiene números y caracteres, aumenta el valor del password...
        if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1
        // Si tiene un carácter especial, aumenta el valor del password....
        if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
        // Si tiene dos caracteres especiales, aumenta el valor del password....
        if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
        
        // Valor del password calculdo..... en base a su valor se desplegaran los mensajes....
        if (strength < 2) {
            $('#strengthMessage').removeClass()
            $('#strengthMessage').addClass('Weak')
            return 'Weak'
        } else if (strength == 2) {
            $('#strengthMessage').removeClass()
            $('#strengthMessage').addClass('Good')
            return 'Good'
        } else {
            $('#strengthMessage').removeClass()
            $('#strengthMessage').addClass('Strong')
            return 'Strong'
        }
    }
});

function registerUser(){
    txtPassword.value == txtConfirmPassword.value ? alert('Correcto') : alert('Incorrecto');
}