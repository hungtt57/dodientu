@extends('frontend.layout.master')
@section('content')
<div class="wrapper-breadcrums">
    <div class="container">
        <div class="row">
            <div class="col-sm-24">
                <div class="breadcrumbs">
                    <ul>
                        <li class="home"> <a href="{{asset('/')}}" title="Go to Home Page"><span >Trang chủ</span></a> <span class="separator">/ </span>
                        </li>
                        <li class="cms_page"> <strong>Giỏ hàng của bạn</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.wrapper-breadcrums -->
<div class="em-wrapper-main">
    <div class="container container-main">
        <div class="em-inner-main">
            <div class="em-wrapper-area02"></div>
            <div class="em-main-container em-col1-layout">
                <div class="row">
                    <div class="em-col-main col-sm-24">
                        <div class="cart">
                            <div class="page-title title-buttons">
                                <h1>Giỏ hàng của bạn</h1>
                                <ul class="checkout-types">
                                    <li>
                                        <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout btn-checkout"><span><span>Proceed to Checkout</span></span>
                                        </button>
                                    </li>
                                </ul>
                            </div><!-- /.page-title -->
                            @if(count($content)!=0)
                            <form method="post">
                                <input name="form_key" type="hidden" value="inYgLvzSpOOWWVoP" />
                                <fieldset>

                                    <table id="shopping-cart-table" class="data-table cart-table">
                                        <thead>
                                            <tr class="em-block-title">
                                                <th><span class="nobr">Tên thuốc</span>
                                                </th>
                                                <th>&nbsp;</th>

                                                <th class="a-center" colspan="1"><span class="nobr">Đơn giá</span>
                                                </th>
                                                <th class="a-center">Số lượng</th>
                                                <th class="a-center last" colspan="1">Tổng tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            {!! csrf_field() !!}
                                            <?php $count = 0;?>
                                            @foreach($content as $item)
                                            
                                            <tr class="last even {{$item['rowid']}}">
                                                <td>
                                                    <div class="cart-product"><a title="Remove item" class="btn-remove btn-remove2 " value="{{$item['rowid']}}">Remove item</a>

                                                        <a href="#" title=" Mommy's little sunshine graphic tee " class="product-image"><img src="{{asset($item['options']['image'])}}" style="height:80px;" width="100"/>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h2 class="product-name"> <a href="product-detail.html"> {{$item['name']}} </a></h2>
                                                    
                                                </td>


                                                <td class="a-center"> <span class="cart-price"> <span class="price price_{{$item['rowid']}} ">{{$item['price']}}</span> </span>
                                                </td>
                                                <td class="a-center">
                                                    <div class="qty_cart">
                                                        <div class="qty-ctl">
                                                            <button title="Decrease Qty" onclick="qtyDown(<?php echo $count;?>); return false;" class="decrease">decrease</button>
                                                        </div>
                                                        <input id="cart[<?php echo $count;?>][qty]" class="qty" name="cart[<?php echo $count;?>][qty]" value="{{$item['qty']}}" size="4" title="Qty" class="input-text qty" maxlength="12" />
                                                        <div class="qty-ctl">
                                                            <button title="Increase Qty" onclick="qtyUp(<?php echo $count;?>); return false;" class="increase">increase</button>
                                                        </div>
                                                        <div title="Cập nhật sản phẩm" value="{{$item['rowid']}}" class="updatecart button btn-continue" style="
                                                        display: block;
                                                        clear: both;
                                                        margin-top: 55px;
                                                        cursor: pointer;
                                                        ">Cập nhật</div>
                                                    </div>
                                                </td>
                                                <td class="a-center last"> <span class="cart-price"> <span class="price  price_total{{$item['rowid']}}">{{$item["price"]*$item["qty"]}}</span> </span>
                                                </td>
                                            </tr>


                                            <?php $count++;?>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="7" class="a-right">
                                                    <a type="button" href="javascript:history.back()" title="Continue Shopping" class="button btn-continue"><span><span style="
    font-size: 16px;"> >>>Tiếp tục đặt hàng</span></span>
                                                    </a>

                                                </td>
                                            </tr>
                                        </tfoot>





                                    </form>

                                </table>
                            </fieldset>
                        </form><!-- /form -->
                        @else
                        <h1>Giỏ hàng trống</h1>
                        @endif
                        <div class="cart-collaterals row">



                            <div class="first col-md-16 col-sm-24">

                            </div><!-- /first -->
                            @if(Cart::count()!=0)
                            <div class="last totals col-md-8 col-sm-24" id="divthanhtoan">
                                <div class="em-box-cart">
                                    <h2>Thanh toán</h2>
                                    <div class="em-box">
                                        <table id="shopping-cart-totals-table">
                                            <col />
                                            <col style="width: 1%;" />
                                            <tfoot>
                                                <tr>
                                                    <td style="" class="a-right" colspan="1"> <strong>Tổng tiền</strong>
                                                    </td>
                                                    <td style="" class="a-right"> <strong><span class="price price_tongtien">{{Cart::total()}}</span></strong>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                           
                                        </table>
                                        <ul class="checkout-types">
                                            <li>
                                            <a href="{{asset('/thanhtoan')}}">
                                                <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout btn-checkout"><span><span>Đặt Hàng</span></span>
                                                </button>
                                                </a>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div><!-- /.em-box-cart -->
                            </div><!-- /.last -->
                            @endif


                        </div><!-- /.cart-collaterals -->

                    </div>
                </div>
            </div>
        </div><!-- /.em-main-container -->
    </div>
</div>
</div><!-- /.em-wrapper-main -->
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function() {

        $(".btn-remove").click(function(){
            var token = $("input[name='_token']").val();
            var rowid= $(this).attr('value');

            $.ajax({
                url: 'xoaspcart',
                type:'POST',
                data:{"_token":token,"rowid":rowid},
                dataType:'text',
                success:function(data){
                 
                    if(data==0){
                        $('#divthanhtoan').remove();
                        $('.'+ rowid).remove();
                    }else{
                      $('.'+ rowid).remove();
                        $('.price_tongtien').text(data);
                      alert('Xóa thành công!!!');
                    }
              }
          });

        });


        $(".updatecart").click(function(){
            
            var rowid = $(this).attr('value');

            var qty = $(this).parent().parent().find(".qty").val();

            var token = $("input[name='_token']").val();
            var str_price = 'price_'+rowid;

            var price = parseInt($('.'+str_price).text());
          
            $.ajax({
              url:'capnhatcart',
              type:'POST',
              data:{"_token":token,"rowid":rowid,"qty":qty},
            dataType:'text',
              success:function (data) {
              

                total_price= price*parseInt(qty);
                $('.price_total'+rowid).text(total_price); //cap nhat lai gia cho 1 sản phẩm
                $('.qty_header'+rowid).text(qty);
                $('.price_tongtien').text(data);
                  alert('Cập nhật giỏ hàng thành công');
            
          }

      });
        });
    });
</script>
<script type="text/javascript">
    function qtyDown(id) {

        var qty_el = document.getElementById('cart[' + id + '][qty]');
        var qty = qty_el.value;
        if (!isNaN(qty) && qty > 1) {
            qty_el.value--;
        }
        return false;
    }

    function qtyUp(id) {
        var qty_el = document.getElementById('cart[' + id + '][qty]');
        var qty = qty_el.value;
        if (!isNaN(qty)) {
            qty_el.value++;
        }
        return false;
    }
</script>
@endsection