@extends('back-end.layout.app')

@section('title')
    تعديل بيانات الموقع
@endsection

@section('content')

    @component('back-end.layout.header')
        @slot('nav_title')
            تعديل بيانات الموقع
        @endslot
    @endcomponent
   
    <div class="row" style="  padding-right: 10%;">
            

            <div class="col-md-6">
                {{-- <div class="panel panel-default"> --}}
                   
                    <div class="panel-body">
                        <form class="form-horizontal ls_form ls_form_horizontal" action="{{route('briefs.update' , ['id' => 1])}}" method="POST">
                            @csrf
                            {{ method_field('put') }}
                           
                            @php $input = "title"; @endphp
                            <div class="form-group">
                                <label class="col-lg-2 control-label">اسم الموقع</label>

                                <div class="col-lg-10">
                                    <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
                                      class="form-control" required>
                                      @error($input)
                                      <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                            </div>    
                            @php $input = "email"; @endphp
                            <div class="form-group">
                                <label class="col-lg-2 control-label">البريد</label>

                                <div class="col-lg-10">
                                    <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
                                      class="form-control">
                                      @error($input)
                                      <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                            </div>    
                            @php $input = "address"; @endphp
                            <div class="form-group">
                                <label class="col-lg-2 control-label">عنوان</label>

                                <div class="col-lg-10">
                                    <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
                                      class="form-control">
                                      @error($input)
                                      <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                            </div>    
                            @php $input = "description"; @endphp
                            <div class="form-group">
                                <label class="col-lg-2 control-label">الوصف</label>

                                <div class="col-lg-10">
                                    <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
                                      class="form-control">
                                      @error($input)
                                      <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                            </div>    
                            @php $input = "phone"; @endphp
                            <div class="form-group">
                                <label class="col-lg-2 control-label">الهاتف</label>

                                <div class="col-lg-10">
                                    <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
                                      class="form-control">
                                      @error($input)
                                      <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                            </div>
                            @php $input = "phone2"; @endphp
                            <div class="form-group">
                                <label class="col-lg-2 control-label">الهاتف2</label>

                                <div class="col-lg-10">
                                    <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
                                      class="form-control">
                                      @error($input)
                                      <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                            </div>     
                            @php $input = "facebook"; @endphp
                            <div class="form-group">
                                <label class="col-lg-2 control-label">facebook account</label>

                                <div class="col-lg-10">
                                    <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
                                      class="form-control">
                                      @error($input)
                                      <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                            </div>    
                            @php $input = "twitter"; @endphp
                            <div class="form-group">
                                <label class="col-lg-2 control-label">twitter account</label>

                                <div class="col-lg-10">
                                    <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
                                      class="form-control">
                                      @error($input)
                                      <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                            </div>    
                            @php $input = "instagram"; @endphp
                            <div class="form-group">
                                <label class="col-lg-2 control-label">instagram account</label>

                                <div class="col-lg-10">
                                    <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
                                      class="form-control">
                                      @error($input)
                                      <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                            </div>    
                                                  
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button  class="btn btn-primary" type="submit">تحديث</button>
                                </div>
                            </div>
                        </form>
                    </div>
                {{-- </div> --}}
            </div>
    </div>
   
    {{-- @component('back-end.shared.edit' , ['pageTitle' => $pageTitle , 'pageDes' => $pageDes])
        <form action="{{ route($routeName.'.update' , ['id' => $row]) }}" method="POST">
            {{ method_field('put') }}
            @include('back-end.'.$folderName.'.form')
            <button type="submit" class="btn btn-primary pull-right">Update {{ $moduleName }}</button>
            <div class="clearfix"></div>
        </form>
    @endcomponent --}}


    {{-- @push('js')
     <!--Masked Library Script Start-->
     <script src="{{asset('panel/assets/js/jquery.maskedinput.min.js')}}"></script>
     <script src="{{asset('panel/assets/js/jquery.autosize.js')}}"></script>
     <!--Masked Library Script End-->
 
     <!--validationEngine Library Script Start-->
     <script src="{{asset('panel/assets/js/validationEngine/languages/jquery.validationEngine-en.js')}}"></script>
     <script src="{{asset('panel/assets/js/validationEngine/jquery.validationEngine.js')}}"></script>
     <!--validationEngine Library Script End-->
 
     <!--bootstrap validation Library Script Start-->
     <script src="{{asset('panel/assets/js/bootstrapvalidator/bootstrapValidator.js')}}"></script>
     <!--bootstrap validation Library Script End-->
 
     <!--Demo form validation  Script Start-->
     <script src="{{asset('panel/assets/js/pages/formValidation.js')}}"></script>
     <!--Demo form validation  Script End-->
    @endpush
  
   @push('css')
   <link rel="stylesheet" href="assets/css/rtl-css/plugins/fileinput-rtl.css">
   @endpush
    --}}

@endsection
