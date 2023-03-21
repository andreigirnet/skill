@extends('admin.administrator.layout')
@section('adminPages')
    <div class="checkoutContainer">
        <div class="adminHomePageTitle">Checkout Page</div>
        <div class="checkoutWrap">
            <div class="checkoutLeftSide">
                <img class="checkoutImage" src="{{asset('images/checkout/checkout.png')}}" alt="">
            </div>
            <div class="checkoutRightSide">
                <div class="checkoutContent">
                    <div class="orderCheckoutDetailsTitle">Your Order Details:</div>
                    <div class="orderItems">
                        <div class="orderDetailLeft">Items:</div>
                        <div class="allItemsInCart">
                        @foreach($cartDetails->items as $item)
                        <div class="orderDetailRight">{{$item->title}}</div>
                            <div>-</div>
                        <div class="orderDetailRight">{{$item->quantity}}</div>
                        @endforeach
                        </div>
                    </div>
                    <div class="orderDetail">
                        <div class="orderDetailLeft">Total Items Qty:</div>
                        <div class="orderDetailRight">{{$cartDetails->quantities_sum}} items</div>
                    </div>
                    <div class="orderDetail">
                        <div class="orderDetailLeft">Price to Pay:</div>
                        <div class="orderDetailRight">{{$cartDetails->total}} €</div>
                    </div>
                </div>
                <form id="payment-form" action="{{route('checkout.store')}}" method="POST">
                    @csrf
                    <input type="hidden" name="cartTotal" value="{{$cartDetails->total}}">
                    <input type="hidden" name="cartQty" value="{{$cartDetails->quantities_sum}}">
                    <label for="address">Adress:</label>
                    <input type="text" id="address" name="address" required>
                    <div class="input-row">
                        <label for="county">County:</label>
                        <input type="text" id="county" name="county" required>
                        <label for="city">City:</label>
                        <input type="text" id="city" name="city" required>
                    </div>
                    <label for="country">Country:</label>
                    <input type="text" id="country" name="country" required>

                    <div id="payment-element">
                        <!-- Elements will create form elements here -->
                    </div>
                    <button id="complete-order" style="margin-top: 20px" class="adminButton">Pay</button>
                    <div id="card-errors">
                        <!-- Display error message to your customers here -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{asset('js/stripe.js')}}"></script>
@endsection
