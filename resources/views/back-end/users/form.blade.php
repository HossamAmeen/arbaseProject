
 @php $input = "user_name"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label">اسم المستخدم</label>
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
         <input type="email" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
           class="form-control" required>
           @error($input)
           <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
           </span>
           @enderror
     </div>
 </div>    
 @php $input = "full_name"; @endphp
 <div class="form-group">
      <label class="col-lg-2 control-label">الاسم بالكامل</label>
      <div class="col-lg-10">
          <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
            class="form-control">
            @error($input)
            <span class="invalid-feedback" role="alert" required>
                     <strong>{{ $message }}</strong>
            </span>
            @enderror
      </div>
  </div>    
  @php $input = "password"; @endphp
  <div class="form-group">
      <label class="col-lg-2 control-label">كلمة السر</label>
       <div class="col-lg-10">
         <input type="password" name="{{ $input }}"
            class="form-control" >
            @error($input)
            <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
            </span>
            @enderror
      </div>
  </div>    
 @php $input = "password_confirmation"; @endphp
 <div class="form-group">
     <label class="col-lg-2 control-label"> تاكيد كلمة السر</label>
    <div class="col-lg-10">
         <input type="password" name="{{ $input }}" 
           class="form-control" >
           @error($input)
           <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
           </span>
           @enderror
     </div>
 </div>    
@php $input = "role"; @endphp  
<div class="form-group">
        <label class="col-md-2 col-sm-2 col-xs-12 control-label">الصلاحيه</label>

        <div class="col-md-5 col-sm-5 col-xs-12 ls-group-input">
            <div class="radio">
                <label class="radio">
                    <input type="radio" name="{{ $input }}" id="optionsRadios1" value="1" 
                    @if ( isset($row))
                    @if($row->role == 1 ) checked @endif
                    @else
                        checked
                    @endif > 
                    مسؤول
                </label>
            </div>
            <div class="radio">
                <label class="radio">
                    <input type="radio" name="{{ $input }}" id="optionsRadios2" value="0"  
                    @if ( isset($row))
                    @if($row->role == 0 ) checked @endif
                    @endif
                    > 
                   موظف
                </label>
            </div>
        </div>
        @error($input)
        <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
        </span>
        @enderror
</div>                      
@php $input = "image"; @endphp          
<div class="form-group">
        <label class="col-md-2 control-label">الصورة</label>
        <div class="col-md-10 ls-group-input">
            <input name="{{ $input }}" id="file-3" type="file"  >
        </div>
        @error($input)
        <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
        </span>
        @enderror
</div>  

