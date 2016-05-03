function ajaxFunction(){
 var ajaxRequest;  // The variable that makes Ajax possible!

 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 } 
}

function addCart(id){

   var precio = $("#product-price-"+id).val();
   var data = {"id":id,"cantidad":1,"precio":precio};

   $.ajax({
      url: "http://localhost/Analisis2_Proyecto/web/app_dev.php/add-cart",
      type: "POST",
      data: data,
      success: function(data,status,xhr){
         alert("produto agregado");
         $("#cart").html(data);
      }
   });
}

function addCart2(id, precio) {

   var cantidad = $("#product-quantity").val();
   var data = {"id":id,"cantidad":cantidad,"precio":precio};
   
   $.ajax({
      url: "http://localhost/Analisis2_Proyecto/web/app_dev.php/add-cart",
      type: "POST",
      data: data,
      success: function(data,status,xhr){
         alert("produto agregado");
         $("#cart").html(data);
      }
   });  
}