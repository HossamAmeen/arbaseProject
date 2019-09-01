@php $page_title = "صلحلي - كله هيتصلح" ; @endphp
@section('page_title')
   {{$page_title}}
@endsection
@extends('front-end.layout.app')





@section('content')
<section class="category-form category-top-row">
    <div class="container form-div">
      <div class="form-row" style="display: flex; align-items: center;">
        <div class="col-md-9 ">
          <div class="footer-left-row">
            <span class="footer-left-row-hdr">
              <h3><b>{{session('client_name')}}</b></h3>
            </span>
            <br>
            <span class="footer-left-row-txt">يمكنك طلب المزيد من خدمات صلحلي ومتابعة طلباتك السابقة.</span>
          </div>
        </div>
        <div class="col-md-3 category-cat-col">
          <br><br>
          <a href="{{route('order')}}"><button type="button" class="btn btn intro-btn-order footer-btn category-hdr-btn">اطلب
              الآن</button></a>
        </div>
      </div>
    </div>
</section>
<section class="order" style="margin-top: 0px;">
        <div class="box">
          <div class="container">
            <div class="row order-row">
              <div class="col-lg-12">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                      <tr>
                        <th width="20%">
                          <span class="tbl-data">رقم الطلب</span>
                        </th>
                        <th width="20%">
                          <span class="tbl-data">الخدمة</span>
                        </th>
                        <th width="20%">
                          <span class="tbl-data">التاريخ</span>
                        </th>
                        <th width="20%">
                          <span class="tbl-data">المبلغ</span>
                        </th>
                        <th width="20%">
                          <span class="tbl-data">حالة الطلب</span>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($services as $service)
                        
                  
                      <tr>
                        <td width="20%">
                          {{$service->id }}
                        </td>
                        <td width="20%">
                          <span class="tbl-data">{{  isset($service->category) ?  $service->category->name : ''  }}</span>
                        </td>
                        <td width="20%">
                          <span class="tbl-data">{{$service->date}}</span>
                        </td>
                        <td width="20%">
                          <span class="tbl-data"> {{$service->cost}} </span>
                        </td>
                        <td width="20%">
                          <span class="tbl-data">
                              @if ($service->status == 2)
                                  تم التنفيذ
                              @elseif($service->status == 1)
                                  تحت التنفيذ
                              @else
                                    لم يتم الرد حتي الان
                              @endif
                             
                            
                            </span>
                        </td>
                      </tr>
                    @endforeach  
                    </tbody>
                  </table>
                </div>
                <div style="float: left;">
                  <a class="footer-l-suggest-a-profile" data-toggle="modal" data-target="#suggestionModal">
                    <span class="footer-left-row-hdr-profile"><img class="footer-icon" src="{{asset('web/assets/imgs/support-b.png')}}">
                      للشكاوي
                      والمقترحات</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
       
        
@endsection

    

@push('scripts')
   
@endpush