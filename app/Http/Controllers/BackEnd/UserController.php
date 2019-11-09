<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Image;
class UserController extends BackEndController
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function store(UserRequest $request){
      $requestArray = $request->all();
        if($request->hasFile('image'))
        {
            $fileName = $this->uploadImage($request , 1110 , 300 );
          if(isset($requestArray['image']) )
          $requestArray['image'] =  $fileName;
        }
       
        if(isset($requestArray['password']) )
        $requestArray['password'] =  Hash::make($requestArray['password']);
       
        $this->model->create($requestArray);
        session()->flash('action', 'تم الاضافه بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update($id , UserRequest $request){
          $requestArray = $request->all();
        if($request->hasFile('image'))
        {
            $fileName = $this->uploadImage($request , 1110 , 300 );
          if(isset($requestArray['image']) )
          $requestArray['image'] =  $fileName;
        }
       
        $row = $this->model->FindOrFail($id);
        
        if(isset($requestArray['password']) && $requestArray['password'] != ""){
            $requestArray['password'] =  Hash::make($requestArray['password']);
        }else{
            unset($requestArray['password']);
        }
        if(isset($requestArray['image']) )
        $requestArray['image'] =  $fileName;
        $row->update($requestArray);
        session()->flash('action', 'تم التحديث بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.edit' , ['id' => $row->id]);
    }

   
}
