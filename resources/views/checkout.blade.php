@extends('master')

@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>Check Out Product</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- check out section -->
    <div class="checkout-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-accordion-wrap">
                        <div class="accordion" id="accordionExample">
                            <div class="card single-accordion">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Billing Address
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="billing-address-form">
                                            <form action="/place" id="formBill" method="post">
                                                @csrf
                                                <p><input type="text" placeholder="Name" name="name" required /></p>
                                                <p><input type="email" placeholder="Email" name="email" required /></p>
                                                <p><input type="text" placeholder="Address" name="address" required />
                                                </p>
                                                <p><input type="tel" placeholder="Phone" name="tel" required /></p>
                                                <p>
                                                    <textarea name="say" id="bill" cols="30" rows="10" placeholder="Say Something"></textarea>
                                                </p>
                                                <button type="submit" style="display: none"></button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card single-accordion">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Shipping Address
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shipping-address-form">
                                            <p>Your shipping address form is here.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card single-accordion">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Card Details
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="card-details">
                                            <p>Your card details goes here.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="order-details-wrap">
                        <table class="order-details">
                            <thead>
                                <tr>
                                    <th>Your order Details</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody class="order-details-body">
                                <tr>
                                    <td>Product</td>
                                    <td>Total</td>
                                </tr>
                                @foreach ($cart as $c)
                                    @php
                                        $p = App\Models\Product::find($c['product_id']);
                                    @endphp
                                    <tr>
                                        <td>{{ $p['name'] }}</td>
                                        <td>JD {{ $p['price'] * $c['quantity'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tbody class="checkout-details">
                                <tr>
                                    <td>Subtotal</td>
                                    @php
                                        $sum = 0;
                                        foreach ($cart as $cc) {
                                            $sum += $cc['price'] * $cc['quantity'];
                                        }
                                    @endphp
                                    <td>JD {{ $sum }}</td>
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td>JD 50</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>JD {{ $sum + 50 }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a id="placeOrder" class="boxed-btn">Place Order</a>
                        <input type="text" name="total" hidden value="{{ $sum + 50 }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end check out section -->

    <!-- logo carousel -->
    <div class="logo-carousel-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner">
                        <div class="single-logo-item">
                            <img src="assets/img/Royal-Canin-Logo.svg.png" alt="" />
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/Whiskas-Logo.png" alt="" />
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/belcando-logo.png" alt="" />
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/Logo_HappyPet_Fahne.png" alt="" />
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/np.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end logo carousel -->
    <script>
        const placeOrder = document.getElementById('placeOrder');
        const billingAddressForm = document.getElementById('formBill');
        placeOrder.onclick = () => {
            billingAddressForm.submit()
        }
    </script>
@endsection
