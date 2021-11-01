/* Cart */
$('body').on('click', '.add-to-cart-link', function(e){
    e.preventDefault();
    var id = $(this).data('id'),
        qty = $('.cart-plus-minus input').val() ? $('.cart-plus-minus input').val() : 1,
        color = $('.pro-details-color select').val(),
        size = $('.pro-details-size select').val();
    $.ajax({
        url: '/cart/add',
        data: {id: id, qty: qty, color: color, size: size},
        type: 'GET',
        success: function(res){
            showCart(res);
        },
        error: function(){
            alert('Error. Reload page!');
        }
    });
});

$('#offcanvas-cart .body').on('click', '.del-item', function(){
    var id = $(this).data('id');
    $.ajax({
        url:'cart/delete',
        data: {id:id},
        type: 'GET',
        success: function (res){
            showCart(res);
        },
        error: function (){
            alert('Error');
        }
    });
});

function showCart(cart){
    if ($.trim(cart) == '<h3> Cart is empty....</h3>'){
        $('#offcanvas-cart .foot .buttons a').css('display', 'none');
    }
    $('#offcanvas-cart .inner .body').html(cart);
    $('#offcanvas-cart').modal();
    if ($('.cart-qty').text()){
        $('.header-action-num').html($('#offcanvas-cart .cart-qty').text());
    } else {
        $('.header-action-num').text('Empty cart');
    }
}

function getCart(){
    $.ajax({
        url: 'cart/show',
        type: 'GET',
        success: function(res){
            showCart(res);
        },
        error: function(){
            alert('Error. Reload page Cart!');
        }
    });
}

function clearCart(){
    $.ajax({
        url: 'cart/clear',
        type: 'GET',
        success: function(res){
            showCart(res);
        },
        error: function(){
            alert('Error clear cart, please reload page...');
        }
    });
}

/* End - cart */

$('#currency').change(function () {
    window.location = 'currency/change?curr=' + $(this).val();
})

$('.mods select').on('change', function() {
    var object = $(this).val(),
        modId = $(this).val(),
        color = $(this).find('option').filter(':selected').data('title'),
        price = $(this).find('option').filter(':selected').data('price');
        newPrice = $('#new-price').data('new-price');
        oldPrice = $('#old-price').data('old-price');
        basePrice = oldPrice - newPrice + price ;

    if (price){
        $('#new-price').text(symbolLeft + price + symbolRight);
        $('#old-price').text(symbolLeft + basePrice + symbolRight);

    } else {
        $('#new-price').text(symbolLeft + newPrice + symbolRight);
        $('#old-price').text(symbolLeft + oldPrice + symbolRight);
    }
});

