
$(document).ready(function () {
   $('#submitForm').click(function () {
       var product=$('#selectCard').val(),
           quantity=$( "input:radio[name='inputQuantity']:checked" ).val(),
           address=$('#inputAddress').val(),
           email=$('#inputEmail3').val();
       console.log(product);
       console.log(quantity);
       console.log(address);
       console.log(email);
       $.ajax({
           type:'post',
           url:'shop.php',
           data:{product:product,
               quantity:quantity,
               address:address,
               email: email},
           dataType:'json',
           success:function (response) {

               if(response.success){
                   $.each(response.result, function(index, value){
                       //$('textarea.form-control').text("INDEX: " + index + " VALUE: " + value);
                       $('textarea.form-control').val($('textarea.form-control').val() + " INDEX: " + index + " VALUE: " + value);
                       debugger;
                   });
               }

           }

       });


   });

});
