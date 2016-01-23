/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.

 */
function ValidaSoloNumeros(matricula){
        var tester =/^[0-9]*$/;
        return tester.test(matricula);
}
function ValidaSoloLetras(nombre){
        var tester =/^[a-zA-Z]*$/;
        return tester.test(nombre);
}
function ValidaSoloLetras(apaterno){
        var tester =/^[a-zA-Z]*$/;
        return tester.test(apaterno);
}
function ValidaSoloLetras(amaterno){
        var tester =/^[a-zA-Z]*$/;
        return tester.test(amaterno);
}
function ValidadTelefono(telefono){
        var vtelefono =/^\(\d{3}\)\s\d{7}$/;
        return vtelefono.test(telefono);
}
function ValidadTelefono(telefono2){
        var vtelefono =/^\(\d{3}\)\s\d{7}$/;
        return vtelefono.test(telefono2);
}
function Valida(){
    ////Hospitales
        var matricula = document.getElementById('matricula').value;
        var nombre = document.getElementById('nombre').value;
        var apaterno = document.getElementById('apaterno').value;
        var amaterno = document.getElementById('amaterno').value;
        var telefono = document.getElementById('telefono').value;
        var telefono2 = document.getElementById('telefono2').value;
        
        if(matricula==""){
                $('#matricula').focus();
                return false;
        }
        
        else{
                $('#matriculas').html('').slideUp(300);
        }
        if(ValidaSoloNumeros(matricula)==false){
                $('#matriculas').html('Debes ingresar números unicamente').slideDown(500); // baja el div 
                $('#matricula').focus(); // enfoca al boton con el id
                return false;
        }
        else{
                $('#matriculas').html('').slideUp(300); //sube el div
        } 
        
        if(nombre==""){
                $('#nombre').focus();
                return false;
        }
        
        else{
                $('#nombres').html('').slideUp(300);
        }
        if(ValidaSoloLetras(nombre)==false){
                $('#nombres').html('Debes ingresar texto unicamente').slideDown(500); // baja el div 
                $('#nombre').focus(); // enfoca al boton con el id
                return false;
        }
        else{
                $('#nombres').html('').slideUp(300); //sube el div
        }  
         if(apaterno==""){
                $('#apaterno').focus();
                return false;
        }
        
        else{
                $('#apaternos').html('').slideUp(300);
        }
        if(ValidaSoloLetras(apaterno)==false){
                $('#apaternos').html('Debes ingresar texto unicamente').slideDown(500); // baja el div 
                $('#apaterno').focus(); // enfoca al boton con el id
                return false;
        }
        else{
                $('#apaternos').html('').slideUp(300); //sube el div
        } 
        if(amaterno==""){
                $('#amaterno').focus();
                return false;
        }
        
        else{
                $('#amaternos').html('').slideUp(300);
        }
        if(ValidaSoloLetras(amaterno)==false){
                $('#amaternos').html('Debes ingresar texto unicamente').slideDown(500); // baja el div 
                $('#amaterno').focus(); // enfoca al boton con el id
                return false;
        }
        else{
                $('#amaternos').html('').slideUp(300); //sube el div
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
        
}/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


