$.getJSON("../php/shop.php",
    function (response) {
        if(response.success){
            var categoryList = $('#productCategory');


            $("#welcome").text("Welcome, "+response.name);
            categoryList.append(
                "<option disabled selected>Выберите категорию</option>"
            );
            response.categoryName.forEach(function (item, i, response) {
                categoryList.append(
                    "<option value=" + item.id + ">" + item.category_name + "</option>"
                )
            })
        }else {
            window.location.replace("../html/login.html");
        }
    });
