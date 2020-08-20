function validarFormulario(){
	var verificar= "true";
    
    var nombres = document.getElementById("nombresyapellidos").value;
    var tipodocumento = document.getElementById("tipodocumento").value;
    var nrodocumento = document.getElementById('numerodocumento').value;
    var correo = document.getElementById("correo").value;

    $('#fecha_nac').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
    });
    
	var direccion = document.getElementById("direccion").value;
		
    
    if( nombres == null || nombres.length == "" ||  /^\s+$/.test(nombres) )
    {
        alert("Escriba sus nombres completos por favor.");
        verificar = "false";
    }
     if(tipodocumento == null || tipodocumento == 0){
        verificar = "false";
    }
     if(!(/^\d{8,15}$/.test(nrodocumento))){
        alert("Recordar que el numero de documento es valido entre 8 a 15 dígitos");
        verificar = "false";
    }
     if(!(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(correo)))
     {
        alert("Correo incorrecto, Escriba un correo electronico válido");
        verificar = "false";
    }
     if(!($('#fecha_nac').datepicker("setDate", new Date())))
    {
        alert("Ingrese Fecha de nacimiento valida");
        verificar = "false";
    }
     if(direccion == null || direccion.length == "" ||  /^\s+$/.test(direccion) )
    {
        alert("Escriba su direccion completo por favor.");
        verificar = "false";
    }
     if(verificar =="false"){
         return false;
     }    
        
}