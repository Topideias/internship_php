$(document).ready(function() {
   // $('#numero').popover({
      //  container: 'body',
     //   hide: '5'
   // })

    $("#buttom").click(function () {
        if($('#numero').val() == ""){
            alert("o Campo não contém dado");
        }
        else if($('#numero').val() < 0){
            alert("Valor mínimo é 0");
        }
        else{
            $("<li>"+$('#numero').val()+"<input type='hidden'  name='valor[]' value="+$('#numero').val()+" ></li>").appendTo( ".inner" );
            $('#numero').val('');
            $('#verificar').removeAttr('disabled');
        }

    })
       // $( "span" ).appendTo( "#foo" );
      //  console.log("teste");









});





