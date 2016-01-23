/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.


function valida(){
    var marca = document.getElementById("marca").value;
    
    if(marca == ""){
        alert("Ingresa Marca");
        return false;
    }
}

 */
function ValidaSoloLetras(nombrehospital){
        var tester =/^[a-zA-Z]*$/;
        return tester.test(nombrehospital);
}
function ValidaSoloLetras(calle){
        var tester =/^[a-zA-Z]*$/;
        return tester.test(calle);
}
function ValidadTelefono(telefono){
        var vtelefono =/^\(\d{3}\)\s\d{7}$/;
        return vtelefono.test(telefono);
}
function ValidadTelefono(telefono2){
        var vtelefono =/^\(\d{3}\)\s\d{7}$/;
        return vtelefono.test(telefono);
}
function ValidadTelefono(fax){
        var vtelefono =/^\(\d{3}\)\s\d{7}$/;
        return vtelefono.test(fax);
}
function Valida(){
    ////Hospitales
        var nombrehospital = document.getElementById('nombrehospital').value;
        var calle = document.getElementById('calle').value;
        var numero = document.getElementById('numero').value;
        var colonia = document.getElementById('colonia').value;
        var telefono = document.getElementById('telefono').value;
        var telefono2 = document.getElementById('telefono2').value;
        var telefono2 = document.getElementById('telefono2').value;
        var fax = document.getElementById('fax').value;
        
        if(nombrehospital==""){
                $('#nombrehospital').focus();
                return false;
        }
        
        else{
                $('#nombrehospitales').html('').slideUp(300);
        }
        if(ValidaSoloLetras(nombrehospital)==false){
                $('#nombrehospitales').html('Debes ingresar texto unicamente').slideDown(500); // baja el div 
                $('#nombrehospital').focus(); // enfoca al boton con el id
                return false;
        }
        else{
                $('#nombrehospitales').html('').slideUp(300); //sube el div
        } 
        
        if(calle==""){
                $('#calle').focus();
                return false;
        }
        
        else{
                $('#calles').html('').slideUp(300);
        }
        if(ValidaSoloLetras(calle)==false){
                $('#calles').html('Debes ingresar texto unicamente').slideDown(500); // baja el div 
                $('#calle').focus(); // enfoca al boton con el id
                return false;
        }
        else{
                $('#calles').html('').slideUp(300); //sube el div
        } 
        if(telefono==""){
                $('#telefono').focus();
                return false;
        }
        else{
                $('#telefonos').html('').slideUp(300);
        }
        if(ValidadTelefono(telefono)==false){
                $('#telefonos').html('Debes ingresar este tipo de formato (664) 2341568').slideDown(500); // baja el div 
                $('#telefono').focus(); // enfoca al boton con el id
                return false;
        }
        else{
                $('#telefonos').html('').slideUp(300); //sube el div
        }     
        if(telefono2==""){
                $('#telefono').focus();
                return false;
        }
        else{
                $('#telefonos').html('').slideUp(300);
        }
        if(ValidadTelefono(telefono2)==false){
                $('#telefonos2').html('Debes ingresar este tipo de formato (664) 2341568').slideDown(500); // baja el div 
                $('#telefono2').focus(); // enfoca al boton con el id
                return false;
        }
        else{
                $('#telefonos2').html('').slideUp(300); //sube el div
        } 
         if(fax==""){
                $('#fax').focus();
                return false;
        }
        else{
                $('#faxes').html('').slideUp(300);
        }
        if(ValidadTelefono(fax)==false){
                $('#faxes').html('Debes ingresar este tipo de formato (664) 2341568').slideDown(500); // baja el div 
                $('#fax').focus(); // enfoca al boton con el id
                return false;
        }
        else{
                $('#faxes').html('').slideUp(300); //sube el div
        } 
}