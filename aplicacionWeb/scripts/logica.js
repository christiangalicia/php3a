$(document).ready(function(){
  $("#btnBuscar").click(function(){
      
    var busqueda = $("#buscador").val();
    busqueda = busqueda.replace((new RegExp(' ','igm')), "+");
    var respuesta;
    
    $.get("https://www.googleapis.com/books/v1/volumes?q="+busqueda,
            function(data, status){
                console.log(data)
                $("#resultado h3").html(data.items[0].volumeInfo.title);
                $("#resultado h4").html(data.items[0].volumeInfo.authors[0]);
                
                $("#resultado i").html("ISBN "+data.items[0].volumeInfo.industryIdentifiers[0].identifier);
                
                $("#resultado p").html(data.items[0].volumeInfo.description);
                $("#resultado img").attr("src",data.items[0].volumeInfo.imageLinks.thumbnail);
            });
  });
});

function sumar(a,b){
   c= document.getElementById("resultado").innerHTML;
    alert(c)
}

function ejemplo(){
   /* a=document.getElementsByTagName("a");
    for(var i=0; i<a.length;i++){
        console.log(a[i].innerHTML);
        a[i].innerHTML="HOLA";
        a[i].style.backgroundColor="red";
    }*/
    
     $("a").hide(6000); 
   
}

