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

function ValidadTelefono(telefono){
        var vtelefono =/^\(\d{3}\)\s\d{7}$/;
        return vtelefono.test(telefono);
}
function ValidaSoloLetras(marca){
        var tester =/^[a-zA-Z]*$/;
        return tester.test(marca);
}
function ValidaSoloLetras(modelo){
        var tester =/^[a-zA-Z]*$/;
        return tester.test(modelo);
}
function ValidaSoloLetras(comentarios){
        var tester =/^[a-zA-Z]*$/;
        return tester.test(comentarios);
}
function ValidaSoloNumeros(ano){
        var tester =/^[0-9]*$/;
        return tester.test(ano);
}
function ValidaSoloNumeros(numeconomico){
        var tester =/^[0-9]*$/;
        return tester.test(numeconomico);
}
function Validar(){
        var marca = document.getElementById('marca').value;
        var modelo = document.getElementById('modelo').value;
        var ano = document.getElementById('ano').value;
        var numeconomico = document.getElementById('numeconomico').value;
        var telefono = document.getElementById('telefono').value;
        var telefono2 = document.getElementById('telefono2').value;
        var comentarios = document.getElementById('comentarios').value;
        if(marca==""){
                $('#marca').focus();
                return false;
        }
        
        else{
                $('#marcas').html('').slideUp(300);
        }

        if(marca==""){
                $('#marca').focus();
                return false;
        }
        
        else{
                $('#marcas').html('').slideUp(300);
        }
        ///
        if(ValidaSoloLetras(marca)==false){
                $('#marcas').html('Debes ingresar texto unicamente').slideDown(500); // baja el div 
                $('#marca').focus(); // enfoca al boton con el id
                return false;
        }
        else{
                $('#marcas').html('').slideUp(300); //sube el div
        } 
        
        /////
        if(modelo==""){
                $('#marca').focus();
                return false;
        }
        else{
                $('#modelos').html('').slideUp(300);
        }
        if(ValidaSoloLetras(modelo)==false){
                $('#modelos').html('Debes ingresar texto unicamente').slideDown(500); // baja el div 
                $('#modelo').focus(); // enfoca al boton con el id
                return false;
        }
        else{
                $('#modelos').html('').slideUp(300); //sube el div
        } 
        
        if(ano==false){
                $('#ano').focus();
                return false;
        }
        else{
                $('#anos').html('').slideUp(300);
        }
        ////////////
        if(ValidaSoloNumeros(ano)==false){
                $('#anos').html('Debes ingresar números unicamente').slideDown(500); // baja el div 
                $('#ano').focus(); // enfoca al boton con el id
                return false;
        }
        else{
                $('#anos').html('').slideUp(300); //sube el div
        } 
        //////////
        if(numeconomico==""){
                $('#numeconomico').focus();
                return false;
        }
        else{
                $('#numeconomicos').html('').slideUp(300);
        }
        //
         if(ValidaSoloNumeros(numeconomico)==false){
                $('#numeconomicos').html('Debes ingresar números unicamente').slideDown(500); // baja el div 
                $('#numeconomico').focus(); // enfoca al boton con el id
                return false;
        }
        else{
                $('#numeconomicos').html('').slideUp(300); //sube el div
        } 
        //
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
        if(comentarios==""){
                $('#comentarios').focus();
                return false;
        }
        else{
                $('#comentario').html('').slideUp(300);
        }
        if(ValidaSoloLetras(comentarios)==false){
                $('#comentario').html('Debes ingresar texto unicamente').slideDown(500); // baja el div 
                $('#comentarios').focus(); // enfoca al boton con el id
                return false;
        }
        else{
                $('#comentario').html('').slideUp(300); //sube el div
        } 
}