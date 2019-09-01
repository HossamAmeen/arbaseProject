@php $page_title = "صلحلي - كله هيتصلح" ; @endphp
@section('page_title')
   {{$page_title}}
@endsection
@extends('front-end.layout.app')





@section('content')
    <section class="order">
        <div class="box">
          <div class="container">
    
            <div class="row ">
              <div class="col-lg-6">
                <div class="order-top-box">
                  <div class="row">
                    <p class="order-box-hdr-txt">تسجيل الدخول</p>
                  </div>
                  <div class="row">
                    <span class="order-box-txt">
                      {{-- سجل الدخول باستخدام الايميل او رقم الهاتف. --}}
                    </span>
                  </div>
                </div>
                <div class="form-row-order">
                  @if (session()->get('status') )
                  <!-- RED -->
                  <div class="alert alert-col alert-danger" id="alert" role="alert">
                 		<strong>{{session()->get('status')}}</strong>
							        <br>
                  </div>
                  @endif
                <form class="form needs-validation" action="{{route('userlogin')}}" method="POST">
                      @csrf
                    <div class="form-group col-lg-12">
                      <label class="lable" for="mail">البريد الالكترونى<span class="red-star"><sup>*</sup></span></label>
                      <div class="input-group reg-input-form">
                        <div class="input-group">
                          <input type="email" id="mail" class="form-control form-control-w" name="email"
                            oninvalid="this.setCustomValidity('ادخل البريد الالكترونى او رقم الهاتف')"
                            oninput="this.setCustomValidity('')" onblur="validateEmail();" tabindex=4 required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="lable" for="password">كلمة المــــــرور <span
                          class="red-star"><sup>*</sup></span></label>
                      <div class="input-group reg-input-form">
                        <input type="password" id="password" oninvalid="this.setCustomValidity('ادخل كلمة مرور')" name="password"
                          oninput="this.setCustomValidity('')" class="form-control form-control-w" tabindex=5 required>
                      </div>
                    </div>
                    <br>
                    <p style="font-size: 12px; text-align: center">
                      بتسجيل الدخول تكون قد قبلت <a class="terms-link" href="{{route('terms')}}"><b>شروط استخدام</b> </a>  الموقع
                    </p>
                    <br>
                    <div class="form-group col-lg-12">
                      <div class="input-group">
                        <button type="submit" class="btn btn intro-btn-order footer-btn">تسجيل الدخول</button>
                      </div>
                    </div>
                    <div class="form-group col-lg-6" style="margin-left: auto; margin-right: auto;width: fit-content;">
                      <div class="input-group">
                        {{-- <a class="forget-a" href="#" data-toggle="modal" data-target="#forgetPass">
                          <span>هل نسيت كلمة المرور ؟</span>
                        </a> --}}
                      </div>
                    </div>
                  </form>
                 
                </div>
              </div>
              <div class="col-lg-6 reg-box-left">
                <div class="order-top-box" style="padding-bottom: 50px">
                  <div class="row">
                    <p class="order-box-hdr-txt">انشاء حساب</p>
                  </div>
                  <div class="row">
                    <span class="order-box-txt">
                      قم بإنشاء حسابك الخاص بكل سهولة عن طريق الايميل
                    </span>
                  </div>
                </div>
                <div class="form-row-order">
                  <div class="form-group" style="margin-left: auto;margin-right: auto;display: table;">
                    <div class="input-group col-lg-12">
                      <a href="{{route('signup')}}">
                        <button class="btn btn intro-btn-order footer-btn"> إنشاء حساب</button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
       
        
@endsection

    
