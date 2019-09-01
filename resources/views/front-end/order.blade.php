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
                <p class="order-box-hdr-txt">اطلب خدمات صلحلي</p>
              </div>
              <div class="row">
                <span class="order-box-txt">
                  دلوقت تقدر تطلب صنايعى من مكانك .. سباكة - نجارة - كهرباء - تكيف - دش
                </span>
              </div>
            </div>
    
            <div class="row order-row">
              <div class="col-lg-6">
                <form class="form" action="{{route('order')}}" method="POST">
                    @csrf
                  <div class="form-row-order">
                    <div class="form-group">
                      <div class="input-group col-lg-12">
                        <label class="lable" for="category">الخدمـــــة<span class="red-star"><sup>*</sup></span></label>
                        <div class="input-group order-input-form">
                          <select id="category" class="form-control form-control-w" name="category_id"
                            oninvalid="this.setCustomValidity('اخترالحدمة')" oninput="this.setCustomValidity('')"
                            class="form-control form-control-w" tabindex=1 required>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}"> {{$category->name}}</option>
                           @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="lable" for="add">العنــــوان <span class="red-star"><sup>*</sup></span></label>
                      <div class="input-group order-input-form">
                        <input type="text" id="add" class="form-control form-control-w" name="address"
                          oninvalid="this.setCustomValidity('ادخل العنوان بالتفصيل')" oninput="this.setCustomValidity('')"
                          tabindex=2 required>
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="lable" for="date">التاريــــــخ <span class="red-star"><sup>*</sup></span></label>
                      <div class="input-group order-input-form">
                        <input onfocus="(this.type='date')" id="time-from" onblur="(this.type='text')" name="date"
                          class="form-control form-control-w" required>
                      </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6 col-time-from">
                      <label class="lable" for="time-from">الموعد من <span class="red-star"><sup>*</sup></span></label>
                      <div class="input-group  order-input-form">
                        <input onfocus="(this.type='time')" id="time-from" onblur="(this.type='text')" name="start_time"
                          class="form-control form-control-w form-control-w-time" required>
                      </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6 col-time-to">
                      <label class="lable" for="time-to">الموعد حتى<span class="red-star"><sup>*</sup></span></label>
                      <div class="input-group order-input-form">
                        <input id=" time-to" onfocus="(this.type='time')" onblur="(this.type='text')" name="end_time"
                          class="form-control form-control-w form-control-w-time" required>
                      </div>
                    </div>
                    <br><br>
                    <div class="form-group col-lg-12 col-time-to">
                      <label class="lable" for="prob">المشكلــة</label>
                      <div class="input-group order-input-form">
                        <textarea id="probx" name="problem" class="form-control form-control-w f" rows="2" required></textarea>
                      </div>
                    </div>
                    <br><br><br><br><br><br>
                    <div class="form-group col-lg-12">
                      <div class="input-group ">
                        <button type="submit" class="btn btn intro-btn-order footer-btn" style="margin-left: unset;">اطلب
                          الآن</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-lg-6">
                <div class="form-row-order">
                  <img class="order-l-img" src="{{asset('web/assets/imgs/logo.png')}}">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
       
        
@endsection

    

@push('scripts')
   
@endpush