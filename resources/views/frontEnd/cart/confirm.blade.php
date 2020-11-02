@extends('frontEnd.layouts.master')

@section('title', 'Xác nhận thanh toán')

@section('content')
    
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
<div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="breadcrumb_iner">
        <div class="breadcrumb_iner_item">
            <h2>Order Confirmation</h2>
            <p>Home <span>-</span> Order Confirmation</p>
        </div>
        </div>
    </div>
    </div>
</div>
</section>
<!-- breadcrumb start-->

<!--================ confirmation part start =================-->
<section class="confirmation_part padding_top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="confirmation_tittle">
            <h2 style="color: red;">Cảm ơn. Đơn hàng của bạn đã đặt thành công.</h2>
          </div>
        </div>
        <div class="col-lg-6 col-lx-4">
          <div class="single_confirmation_details">
            <h4>Thông tin đặt hàng</h4>
            <ul>
              <li>
                <p>Mã đơn hàng</p><span>: 60235</span>
              </li>
              <li>
                <p>Ngày</p><span>: Oct 03, 2017</span>
              </li>
              <li>
                <p>Tổng tiền</p><span>: USD 2210</span>
              </li>
              <li>
                <p>Cách thức thanh toán</p><span>: COD</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-lx-4">
          <div class="single_confirmation_details">
            <h4>Billing Address</h4>
            <ul>
              <li>
                <p>Tên</p><span>: 56/8</span>
              </li>
              <li>
                <p>Địa chỉ</p><span>: Los Angeles</span>
              </li>
              <li>
                <p>Số điện thoại</p><span>: United States</span>
              </li>
              <li>
                <p>Email</p><span>: 36952</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="order_details_iner">
            <h3>Order Details</h3>
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col" colspan="2">Product</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
                  <th>x02</th>
                  <th> <span>$720.00</span></th>
                </tr>
                <tr>
                  <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
                  <th>x02</th>
                  <th> <span>$720.00</span></th>
                </tr>
                <tr>
                  <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
                  <th>x02</th>
                  <th> <span>$720.00</span></th>
                </tr>
                <tr>
                  <th colspan="3">Subtotal</th>
                  <th> <span>$2160.00</span></th>
                </tr>
                <tr>
                  <th colspan="3">shipping</th>
                  <th><span>flat rate: $50.00</span></th>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th scope="col" colspan="3">Quantity</th>
                  <th scope="col">Total</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ confirmation part end =================-->

@endsection