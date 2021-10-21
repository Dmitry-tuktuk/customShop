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

