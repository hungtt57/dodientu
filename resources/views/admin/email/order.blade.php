
  <p>Xin chào:{{$order['tenkh']}}</p>
  <p>Số điện thoại: {{$order['sdtkh']}}</p>
  <p>Ngày giao hàng: {{$order['ngaynhankh']}}</p>

  <p>Đơn hàng của bạn là:</p>
     
         <table border="1">
            <tr>
               <th >Ảnh</th>
               <th >Tên</th>
              
               <th >Số lượng</th>
               <th>Đơn giá</th>
               <th >Tổng tiền</th>
            </tr>
            @foreach($orderdetail as $item)
            <tr>
               <td >
                 <img width="40px" height="40px" src="<?php echo $message->embed($item['anh']); ?>">
               </td>
               <td >
                  {{$item['tensp']}}
               </td>
              
               <td>
                  {{$item['soluong']}}
               </td>
               <td >
                {{number_format($item['giasp'],0,",",".")}}<span>đ</span>
               </td>
               <td >
                    {{number_format($item['tongtien'],0,",",".")}}<span>đ</span>
               </td>
            </tr>
            @endforeach
         </table>
              <div >
                                    <ul>
                                        <li>
                                            <em>Thanh toán:</em>
                                            <strong > {{number_format($order['tongtien'],0,",",".")}}<span>đ</span></strong>
                                        </li>
                                       
                                         
                                    </ul>
                                </div>
<div>Vui lòng liên hệ với chúng tôi nếu có gì thăc mắc
Số điện thoại:01673253963
  
</div>
