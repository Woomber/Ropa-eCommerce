function validateCardNumber(number) {
    var regex = new RegExp("^[0-9]{16}$");
    if (!regex.test(number))
        return false;

    return luhnCheck(number);
}

function luhnCheck(val) {
    var sum = 0;
    for (var i = 0; i < val.length; i++) {
        var intVal = parseInt(val.substr(i, 1));
        if (i % 2 == 0) {
            intVal *= 2;
            if (intVal > 9) {
                intVal = 1 + (intVal % 10);
            }
        }
        sum += intVal;
    }
    return (sum % 10) == 0;
}

function validateForm1(){

    var form = document.forms[0];

    if (form["email"].value != form["confirmar"].value) {
        alert("Correos no iguales");
        return false;
    }

    var cc  = form["tarjeta1"].value + form["tarjeta2"].value
            + form["tarjeta3"].value + form["tarjeta4"].value;
    if(cc.length == 16){
        if (cc.substr(0, 1) == "4" || cc.substr(0, 1) == "5"){
            // visa o mastercard
        } else {
            alert("Tarjeta inválida");
            return false;
        } 
    } else if(cc.length == 15){
        if(cc.substr(0, 2) == "34" || cc.substr(0, 2) == "37"){
            //Amex
        } else {
            alert("Tarjeta inválida");
            return false;  
        }   
    } else {
        alert("Tarjeta inválida");
        return false;
    }

    var fechaEx = form["fechaEx"].value;
    var mm = parseInt(fechaEx.substr(0, 2));
    var yy = parseInt(fechaEx.substr(3, 2)); 
    
    var actual = new Date();
    var mma = actual.getMonth() + 1;
    var yya = actual.getFullYear() % 100;
    
    if(mm < 1 || mm > 12) {
        alert("Expiración inválida");
        return false;
    }
    if(yy < 0 || yy > 99){ 
        alert("Expiración inválida");
        return false;
    }

    if(yy < yya){
        alert("Tarjeta expirada");
        return false;
    }
    if(yy == yya && mm < mma) {
        alert("Tarjeta expirada");
        return false;
    }

    return true;
}
function validateForm2(){
    var form = document.forms[0];

    return true;
}
function validateForm3() {
    var form = document.forms[0];

    return true;
}