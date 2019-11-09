<footer class="footer">
        <div class="container">
          <div class="row footer-row">
            <div class="col-sm-5">
              <div class="footer-r">
                <img class="footer-img" src="{{asset('web/assets/imgs/logo.png')}}">
                <br>
                <a href="{{route('order')}}"><button type="button" class="btn btn intro-btn-order footer-btn">اطلب الآن</button></a>
              </div>
            </div>
            <div class="col-sm-7">
              <div class="footer-l">
                <div class="footer-left-row">
                  <span class="footer-left-row-hdr"><img class="footer-icon" src="{{asset('web/assets/imgs/phone.png')}}"> الخط الساخن</span>
                  <br>
                  <span class="footer-left-row-txt">{{  isset($briefs->phone) ? $briefs->phone: ''  }}</span>
                </div>
                <div class="footer-left-row">
                  <span class="footer-left-row-hdr"><img class="footer-icon" src="{{asset('web/assets/imgs/mail.png')}}"> البريد الالكترونى
                  </span>
                  <br>
                  <span class="footer-left-row-txt">{{  isset($briefs->email) ?  $briefs->email : ''  }}</span>
                </div>
                <div class="footer-left-row">
                  <a class="footer-l-suggest-a" data-toggle="modal" data-target="#suggestionModal">
                    <span class="footer-left-row-hdr"><img class="footer-icon" src="{{asset('web/assets/imgs/support.png')}}"> للشكاوي
                      والمقترحات</span><br>
                      <span class="footer-left-row-txt">{{  isset($briefs->phone2) ? $briefs->phone2: ''  }}</span>
                  </a>
                </div>
              </div>
            </div>
            <!-- Modal suggest-->
            <div class="modal fade" id="suggestionModal" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <form class="form" action="{{route('complaint')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalCenterTitle"> <b>اكتب اقتراحا او شكوى</b></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <!-- green -->
                      {{-- <div class="alert alert-col alert-success" id="alert" role="alert">
                        تم تقديم رأيك بنجاح
                        <br>
                      </div> --}}
                      <!-- RED -->
                      <!-- <div class="alert alert-col alert-danger" id="alert" role="alert">
                            حاول مرة اخرى !
                            <br>
                          </div>  -->
                      <br>
                      <span class="order-box-txt">
                        اكتب اقتراحك او الشكوى وساعد على تحسين خدمات صلحلي.
                      </span>
                      <br>
                      <div class="form-row-order">
                        <br><br>
                        @if( session('client_name') == null)
                        <div class="form-group">
                          <div class="input-group col-lg-12">
                            <label class="lable" for="name">الاســم كامـــــل<span
                                class="red-star"><sup>*</sup></span></label>
                            <div class="input-group reg-input-form">
                              <input type="text"  class="form-control form-control-w" name="name"
                                oninvalid="this.setCustomValidity('ادخل الاسم')" oninput="this.setCustomValidity('')"
                                tabindex=1 required>
                            </div>
                          </div>
                        </div>
                        
                        <div class="form-group col-lg-12">
                          <label class="lable" for="age"> رقم المحمــــول<span class="red-star"><sup>*</sup></span></label>
                          <div class="input-group reg-input-form">
                              <input tabindex="3" class="form-control form-control-w" type="text" minlength="11" name="phone"
                              maxlength="11" oninvalid="this.setCustomValidity('رقم المحمول  مطلوب')"
                              oninput="this.setCustomValidity('')" required />
                          </div>
                        </div>
                        @endif
                        <div class="form-group col-lg-12 ">
                          <label class="lable" for="prob"> اكتب ما تريـــد <span
                              class="red-star"><sup>*</sup></span></label>
                          <div class="input-group reg-input-form">
                            <textarea id="probx" class="form-control form-control-w f" name="text"
                              oninvalid="this.setCustomValidity('  اكتب اقتراحك او الشكوى لتقديمها للادارة')"
                              oninput="this.setCustomValidity('')" tabindex=3 style="padding-right: 100px;" rows="2"
                              required></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn suggestionModal-cancel-btn" data-dismiss="modal">الغاء</button>
                      <button type="submit" class="btn suggestionModal-send-btn"> ارسل</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <footer class="footer-sm">
        <div class="container">
          <div class="row">
            <div class="col-5">
              <div class="footer-sm-r">
                 @if( isset($briefs['facebook']) )
                <a href="{{$briefs['facebook'] }}"><img class="footer-icon" src="{{asset('web/assets/imgs/facebook.png')}}"></a>
                @endif
                @if( isset($briefs['instagram']) )
                <a href="{{$briefs['instagram']}}"><img class="footer-icon" src="{{asset('web/assets/imgs/instagram.png')}}"></a>
                @endif
              </div>
            </div>
            <div class="col-7">
              <span class="footer-sm-l">
                جميع الحقوق محفوظة
              </span>
            </div>
          </div>
        </div>
        <button type="button" id="scrollToTop" class="btn btn-to-top">&uarr;</button>
      </footer>