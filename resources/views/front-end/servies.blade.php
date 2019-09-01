@php $page_title = "صلحلي - كله هيتصلح" ; @endphp
@section('page_title')
   {{$page_title}}
@endsection
@extends('front-end.layout.app')





@section('content')
      <section class="category-form" >
        <div class="container form-div">
        <form class="form" action="{{route('search')}}">
          

            <div class="form-row">
              <div class="form-group col-lg-3">
                <div class="input-group">
                  <input type="text" id="filter-name" class="form-control" placeholder=" ابحث بالاسم ... " name="name" >
                </div>
              </div>
              <div class="form-group col-lg-3">
                <div class="input-group">
                  <select name="category_id" id="filter-services" class="form-control" >
                    <option value="null" disabled selected hidden>الخدمات</option>
                    @foreach ($categories as $category)
                     <option value="{{$category->id}}"> {{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group col-lg-3">
                <div class="input-group">
                  <select name="company_id" id="filter-company" class="form-control" >
                     <option value="null" disabled selected hidden>الشركات</option>
                    @foreach ($companies as $company)
                     <option value="{{$company->id}}"> {{$company->name}}</option>
                    @endforeach
                  </select>
    
                </div>
              </div>
              <div class="form-group col-lg-3">
                <div class="input-group ">
                  <button type="submit" class="btn  form-control-btn ">بحث</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </section>
      <section class="category-items">
        <div class="container">
          <div class="row">
            @foreach ($products as $product) 
             <div class="categort-item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                <div class="card">
                    <img src="{{asset('uploads/products/'.$product->image)}}" class="card-img-top" alt="...">
                  
                    <div class="card-body card-body-dark">
                    <span class="card-text card-text-dark-top">  {{  isset($product->company) ? $product->company->name: ''  }}</span>
                    <h5 class="card-title card-title-dark"><b>{{$product->name}}</b></h5>
                    <p class="card-text card-text-dark">
                        <span class="now-price">
                             @if($product->discount >0)
                                 {{ $product->price - ( $product->price  /100 * $product->discount) }} ج.م

                            
                        </span>
        
                        <span>&nbsp&nbsp&nbsp&nbsp<span class="off-price"> {{$product->price}} ج.م</span></span>
                        @else
                        
                        <span class="now-price"> {{$product->price}} ج.م</span>
                        @endif
                    </p>
                    </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
    
      </section>
        
@endsection


@push('scripts')
<script>

  @if(isset($name))
   $("#filter-name").val( 
     {!!
        
         json_encode("$name")
     !!} );
  @endif
  @if(isset($category_id))
   $("#filter-services").val(
     {!!
        
        json_encode("$category_id")
    !!} );
   @endif
  @if(isset($company_id))
   $("#filter-company").val(
      {!!
        
        json_encode("$category_id")
    !!} );
   @endif
</script>
@endpush