$('#currency').change(function(){
  window.location = 'currency/change?curr=' + $(this).val();
});

$('.available select').on('change', function(){
  let modId = $(this).val();
  let color = $(this).find('option').filter(':selected').data('title');
  let price = $(this).find('option').filter(':selected').data('price');
  let basePrice = $('#base-price').data('base');
  // console.log(modId, color, price);
  if(price){
    $('#base-price').text(symbolLeft + price + symbolRight);
  }else{
    $('#base-price').text(symbolLeft + basePrice + symbolRight);
  }
});