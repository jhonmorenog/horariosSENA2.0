var entra;
$(document).ready(function () {

    $("#entrar").click(function () {

        capturarInforFormulario(1);
        if(entra){
            window.open("web/horarios.php", "_self");
        }
       
   });

});

function ajax(datos, ruta) {
  
        $.post(ruta,
        {datos},
                function (data, status) {
                   
                   if(!data){
                       
                        error("Hay un problema con el usuario o la contraseña.");
                   }else{
                       
                       entra=data;
                   }
                });

}
function capturarInforFormulario(nf) {
   var arr = new Array();
   
   $("#form1").find(function() {

        $(":input").each(function () {
          
            arr.push($(this).val().trim()); 
        });
        //limpio el arreglo de espacios vacíos.
       arr = arr.filter(Boolean);
       ajax(arr, "controlador/login.php");

   
});


}

