@php $page_title = "صلحلي - كله هيتصلح" ; @endphp
@section('page_title')
   {{$page_title}}
@endsection
@extends('front-end.layout.app')





@section('content')
<section class="order">
        <div class="box">
          <div class="container">
            <div class="order-top-box">
              <div class="row">
                <p class="order-box-hdr-txt"> انشاء حساب </p>
              </div>
              <div class="row">
                <span class="order-box-txt">
                  قم بإنشاء حسابك الخاص على صلحلي بكل سهولة عن طريق الايميل ورقم التليفون
                </span>
              </div>
            </div>
          
        <form class="form needs-validation" action="{{route('signup')}}" method="POST">
            @csrf
              <!-- RED -->
              {{-- <div class="alert alert-col alert-danger" id="" role="alert">
                هناك بالفعل حساب مع عنوان البريد الإلكتروني او رقم المحمول .انقر <a href="#" data-toggle="modal"
                  data-target="#forgetPass">هنا</a> لاستعادة كلمة السر والوصول إلى الحساب الخاص بك <br>
              </div> --}}
              <br>
              <div class="row order-row">
                <div class="col-lg-6">
                  <div class="form-row-order">
                    <div class="form-group">
                      <div class="input-group col-lg-12">
                        <label class="lable" for="name">الاســم كامـــــل<span class="red-star"><sup>*</sup></span></label>
                        <div class="input-group reg-input-form">
                          <input type="text" id="name" class="form-control form-control-w" name="name"
                            oninvalid="this.setCustomValidity('ادخل الاسم')" oninput="this.setCustomValidity('')" tabindex=1
                            required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                            <label class="lable" for="age"> رقم المحمــــول<span class="red-star"><sup>*</sup></span></label>
                            <div class="input-group reg-input-form">
                                <input type="text" id="phone"  minlength="11" maxlength="11" name="phone"
                                oninvalid="this.setCustomValidity('ادخل رقم محمول صحيح')" 
                                oninput="this.setCustomValidity('')" 

                                class="form-control form-control-w" tabindex=3 required>
                            </div>
                    </div>
                   
                    <div class="form-group col-lg-12">
                      <label class="lable" for="gov">المحافظــــــــــة<span class="red-star"><sup>*</sup></span></label>
                      <div class="input-group reg-input-form ">
                        <select id="gov" class="form-control form-control-w" name="city_id"
                          oninvalid="this.setCustomValidity('اختر محافظة')" oninput="this.setCustomValidity('')"
                          class="form-control form-control-w" tabindex=3 required>
                          <option disabled selected hidden> </option>
                          @foreach ($cities as $city)
                          <option value="{{$city->id}}"> {{$city->city_name}} </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-row-order">
                    <div class="form-group col-lg-12">
                      <label class="lable" for="mail">البريد الالكترونى<span class="red-star"><sup>*</sup></span></label>
                      <div class="input-group reg-input-form">
                        <div class="input-group">
                          <input type="email" id="mail" class="form-control form-control-w" name="email"
                            oninvalid="this.setCustomValidity('ادخل البريد الالكترونى')"
                            oninput="this.setCustomValidity('')" tabindex=4 required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="lable" for="password">كلمة المــــــرور <span
                          class="red-star"><sup>*</sup></span></label>
                      <div class="input-group reg-input-form">
                        <input type="password" id="password" minlength="8" name="password"
                          oninvalid="this.setCustomValidity('ادخل كلمة مرور تزيد عن 8 احرف')"
                          oninput="this.setCustomValidity('')" onforminput="this.setCustomValidity('')" onchange="this.setCustomValidity('')" class="form-control form-control-w" tabindex=5 required>
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="lable" for="confirm_password">اعد كلمة المرور<span
                          class="red-star"><sup>*</sup></span></label>
                      <div class="input-group reg-input-form">
                        <input type="password" id="confirm_password" minlength="8" name="password_confirmation"
                          class="form-control form-control-w" tabindex=5 required>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <br><br>
              <br>
                    <p style="font-size: 12px; text-align: center">
                      بتسجيل الدخول تكون قد قبلت <a class="terms-link" href="{{route('terms')}}"><b>شروط استخدام</b> </a>  الموقع
                    </p>
                    <br>
              <div class="form-group col-lg-12">
                <div class="input-group ">
                  <button type="submit" class="btn btn intro-btn-order footer-btn"> إنشاء حساب</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
      
        <script>var password = document.getElementById("password")
          , confirm_password = document.getElementById("confirm_password");
    
        function validatePassword() {
          if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("كلمة السر غير متطابقة");
          } else {
            confirm_password.setCustomValidity('');
          }
        }
    
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;</script>
@endsection

    
