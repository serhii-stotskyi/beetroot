$(document).ready(function () {
    $('#formSubmit').click(function () {
     var userName = $('#userName').val();
     $.ajax({type:'post',
             url:'form.php',
         data: {userName: userName},
         dataType: 'json',
         success: function (response) {
             var $userInfo = $('#userInfo');
             if (response.fileExist) {
                 $('#avatar').attr({src: "img/" + response.avatar});
                 $userInfo.contents().last().remove();
                 $userInfo.append(response.userInfo);
             } else {
                 $('#avatar').attr({src: "img/" + response.avatar});
                 $userInfo.contents().last().remove();
                 $userInfo.text(response.userInfo);
             }

         }
     });


    })

});