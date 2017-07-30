$.getJSON("../php/shop.php",
    function (response) {
        if(response.success){
            $("#welcome").text("Welcome, "+response.name);
        }else {
            window.location.replace("../html/login.html");
        }
    });