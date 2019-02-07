
$(".product-remove").on("click",function (e) {
    var prod_data = $(this).data("product-id");
    $.ajax({
        type: "POST",
        url: "includes/add_to_cart.php?remove_from_cart="+prod_data
    }).done(function(response){
        //console.log(response);
        window.location.href = "shop.php";
    }).fail(function(response){

    })
});

