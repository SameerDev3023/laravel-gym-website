@extends('gym-frontend.admin-main')
@section('navbar-side-section')
<h1 class="text-center"> Your Orders</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Member Ship</th>
      <th scope="col">Price</th>
      <th scope="col">starting Date</th>
    </tr>
  </thead>
  <tbody>
    @foreach($CustomersOrders as $orders)
    @if(is_null($orders))
      {{''}}
      @else
      <tr>
      <td>
      @if($orders['total_order_price']==12000)
      {{'12 Month Package'}}
      @elseif($orders['total_order_price']==8000)
      {{'6 Month Package'}}
      @else
      {{'3 Month Package '}}
      @endif 



      
      </td>
      <td>{{$orders['total_order_price']}}</td>
      <td>{{$orders['created_at']}}</td>
    </tr>
  
    @endif

@endforeach

   

   

    
 
  </tbody>
</table>
@endsection