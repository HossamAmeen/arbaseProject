<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Image;
class UserController extends BackEndController
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function store(Request $request){
    //    return $request->all();
        $fileName = $this->uploadImage($request );
        $requestArray = $request->all();
        if(isset($requestArray['password']) )
        $requestArray['password'] =  Hash::make($requestArray['password']);
        if(isset($requestArray['image']) )
        $requestArray['image'] =  $fileName;
        $this->model->create($requestArray);
        session()->flash('action', 'تم الاضافه بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update($id , Request $request){
        $fileName = $this->uploadImage($request );
        $row = $this->model->FindOrFail($id);
        $requestArray = $request->all();
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
