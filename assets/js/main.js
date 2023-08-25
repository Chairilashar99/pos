
$(function(){
   $('.datepicker').datepicker({
      format: 'yyyy-mm-dd'
  });
});

function addtoCart(item_id, item_name, price) {
   if (checkDuplicateItem(item_id) != -1) {
      Swal.fire({
         icon: 'error',
         title: 'Oops...',
         text: 'Item sudah ada didalam keranjang'
      });
   }
   else {
      var html = `<tr id="row_` + item_id + `" item_id="` + item_id + `" class="row_item_list">
                     <input type="hidden" name="item_id[]" value="` + item_id + `" />
                     <input type="hidden" name="item_name[]" value="` + item_name + `" />
                     <input type="hidden" name="price[]" value="` + price + `" />

                     <td>`+ item_name + `</td>
                     <td style="text-align: center;">Rp`+ price + `</td>
                     <td style="text-align: center;"><input type="number" name="qty[]" onChange="addQty(this, `+ item_id + `, ` + price + `)" class="form-control" value="1" /></td>
                     <td style="text-align: right;">Rp<span class="item_price" id="price_`+ item_id + `">` + price + `</span></td>
                  </tr>`;
      $('#wrap-itemlist').append(html);
      $('#btn_cart').prop("disabled", false);
      calcTotal();
   }
}

function checkDuplicateItem(item_id) {
   var flag = -1;
   $(".row_item_list").each(function (i) {
      var itemId = parseInt($(this).attr('item_id'));
      if (itemId == item_id) {
         flag = itemId;
      }
   });

   return flag;
}

function addQty(obj, item_id, price) {
   var qty = parseFloat($(obj).val());
   var subtotal = parseFloat(price) * qty;
   $('#price_' + item_id).text(subtotal);
   calcTotal();
}

function calcTotal() {
   var total = 0;
   $(".item_price").each(function (i) {
      total += parseFloat($(this).text());
   });
   $('#grandtotal').text(total);
}

