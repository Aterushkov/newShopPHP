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

$('#cart .modal-body').on('click', '.del-item', function(){
  let id = $(this).data('id');
  $.ajax({
    url:'/cart/delete',
    data: {id:id},
    type:'GET',
    success: function (res){
      showCart(res);
    },
    error: function (){
      alert("Ошибонька. Не удалилось");
    }
  });
});

function showCart(cart){
 if($.trim(cart) =='<h3>Корзина пуста</h3>'){
   $('#cart .modal-footer a, #cart .modal-footer .btn-danger').css('display', 'none');
 }else {
   $('#cart .modal-footer a, #cart .modal-footer .btn-danger').css('display', 'inline-block');
 }
  $('#cart .modal-body').html(cart);
  $('#cart').modal();
  if($('.cart-sum').text()){
      $('simpleCart_total').html($('#cart .cart-sum').text());
  }else{
    $('simpleCart_total').text('Empty Cart');
  }
}
function getCart(){
  $.ajax({
    url:'/cart/show',
    type:'GET',
    success: function (res){
      showCart(res);
    },
    error: function (){
      alert("Ошибонька");
    }
  });
}
// Cart end
function clearCart(){
  $.ajax({
    url:'/cart/clear',
    type:'GET',
    success: function (res){
      showCart(res);
    },
    error: function (){
      alert("Ошибонька");
    }
  });
}
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