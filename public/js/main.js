// Cart
$('body').on('click','.add-to-cart-link', function(e){
  e.preventDefault();
  let id = $(this).data('id');
  let gty = $('.quantity input').val() ? $('.quantity input').val() : 1 ;
  let mod = $('.available select').val();

  $.ajax({
    url:'/cart/add',
    data:{id:id, gty:gty,mod:mod},
    type:'GET',
    success: function (res){
      showCart(res);
    },
    error: function (){
      alert("Ошибонька");
    }
  })
});

function showCart(cart){
 console.log(cart);
}
// Cart end
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