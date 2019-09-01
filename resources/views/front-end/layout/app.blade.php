<!DOCTYPE html>
<html>
<head>
    <title> @yield('page_title') </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('web/assets/imgs/logo.ico')}}" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('web/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/css/rtl.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/css/style.css')}}">

     @stack('css')
</head>

<body>
   
        <!--  header  -->
        @include('front-end.layout.header')
        <!-- end-header  -->
    @if( session('client_name') != null)
      <!-- Modal edit Account-->
        <div class="modal fade" id="editAccounr" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <form class="form" id="update_client_form" action="{{route('update')}}" method="POST">
                    @csrf
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"> <b>تعديل الحساب</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                
                    <br>
                    <div class="form-row-order">
                        <div class="form-group">
                        <div class="input-group col-lg-12">
                            <label class="lable" for="name">الاســم كامـــــل<span class="red-star"><sup>*</sup></span></label>
                            <div class="input-group reg-input-form">
                            <input type="text" tabindex=1 id="name" class="form-control form-control-w" name="name"
                                oninvalid="this.setCustomValidity('ادخل الاسم')" oninput="this.setCustomValidity('')" tabindex=1
                                required>
                            </div>
                        </div>
                        </div>
                        <div class="form-group col-lg-12">
                        <label class="lable" for="mail">البريد الالكترونى<span class="red-star"><sup>*</sup></span></label>
                        <div class="input-group reg-input-form">
                            <div class="input-group">
                            <input type="email" tabindex=2 id="email" class="form-control form-control-w" name="email"
                                oninvalid="this.setCustomValidity('ادخل البريد الالكترونى')" oninput="this.setCustomValidity('')"
                                tabindex=4 required>
                            </div>
                        </div>
                        </div>
                        <div class="form-group col-lg-12">
                        <label class="lable" for="age"> رقم المحمــــول<span class="red-star"><sup>*</sup></span></label>
                        <div class="input-group reg-input-form">
                            <input type="text" id="phone" onfocus="(this.type='number')" onblur="(this.type='text')" maxlength="11" name="phone"
                            oninvalid="this.setCustomValidity('ادخل رقم المحمول')" oninput="this.setCustomValidity('')"
                            class="form-control form-control-w" tabindex=3 required>
                        </div>
                        </div>
                        <div class="form-group col-lg-12">
                        <label class="lable" for="gov">المحافظــــــــــة<span class="red-star"><sup>*</sup></span></label>
                        <div class="input-group reg-input-form ">
                            <select id="gov" tabindex=4 class="form-control form-control-w" name="city_id"
                            oninvalid="this.setCustomValidity('اختر محافظة')" oninput="this.setCustomValidity('')"
                            class="form-control form-control-w" tabindex=3 required>
                            @foreach ($cities as $city)
                                <option value="{{$city->id}}"> {{$city->city_name}} </option>
                            @endforeach
                            
                           
                            </select>
                        </div>
                        </div>
                       
                        <div class="form-group col-lg-12">
                                <label class="lable" for="password">كلمة المرور الجديــدة <span class="red-star"><sup>*</sup></span></label>
                                <div class="input-group reg-input-form" style="padding-right: 135px;">
                                    <input type="password" id="password" minlength="8" name="password"
                                    oninvalid="this.setCustomValidity('ادخل كلمة مرور تزيد عن 8 احرف')"
                                    oninput="this.setCustomValidity('')" class="form-control form-control-w" tabindex=5 >
                                </div>
                         </div>
                        <div class="form-group col-lg-12">
                                <label class="lable" for="confirm_password">اعد ادخال كلمة المرور<span
                                    class="red-star"><sup>*</sup></span></label>
                                <div class="input-group reg-input-form" style="padding-right: 135px;">
                                    <input type="password" id="confirm_password" minlength="8" oninput="this.setCustomValidity('')" name="password_confirmation"
                                    class="form-control form-control-w" tabindex=5 >
                                </div>
                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn suggestionModal-cancel-btn" data-dismiss="modal">الغاء</button>
                    
                    <button type="submit" class="btn suggestionModal-send-btn"> حفظ</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    @endif
        @yield('content')
                   
        @include('front-end.layout.footer')
   @if( session('client_name') != null)
    <script>
            var invalidClassName = 'invalid'
            var inputs = document.querySelectorAll('input, select, textarea')
            inputs.forEach(function (input) {
              // Add a css class on submit when the input is invalid.
              input.addEventListener('invalid', function () {
                input.classList.add(invalidClassName)
              })
              // Remove the class when the input becomes valid.
              // 'input' will fire each time the user types
              input.addEventListener('input', function () {
                if (input.validity.valid) {
                  input.classList.remove(invalidClassName)
                }
              })
            })
            var password = document.getElementById("password")
              , confirm_password = document.getElementById("confirm_password");
        
            function validatePassword() {
              if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("كلمة السر غير متطابقة");
              } else {
                confirm_password.setCustomValidity('');
              }
            }
        
            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;
    </script>
        <script>
            function getDataUpdate() {
                 var ajax = new XMLHttpRequest();
                 var method = "GET";
                 var url = "update";
                console.log();
                console.log(url);
                  var asynchronons = true;
                  ajax.open(method, url, asynchronons);
                  ajax.send();
                  ajax.onreadystatechange = function () {
                      if (this.readyState == 4 && this.status == 200) {
                          var v = JSON.parse(this.responseText);
                          console.log(v);
                       
                          $("#name").val(v['name']);
                          $("#email").val(v['email']);
                          $("#gov").val(v['city_id']);
                          $("#phone").val(v['phone']);


                      }
                  }
           
            }
            
            
        </script>
        @endif
        <script src="{{asset('web/assets/js/jquery.js')}}"></script>
          <script src="{{asset('web/assets/js/bootstrap.min.js')}}"></script>
          <script src="{{asset('web/assets/js/script.js')}}"></script>
        @stack('scripts')
</body>
</html>