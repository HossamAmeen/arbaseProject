<?php

namespace App\Http\Controllers\Backend;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Bref;
use App\Model\User;
use Hash;

class BrefController extends BackEndController
{
    public function __construct(Bref $model)
    {
        parent::__construct($model);
    }
    public function index()
    {
       
        return redirect()->route('brefs.edit' , ['id' => 1]);
    }
    public function login(Request $request)
    {
       
        if($request->isMethod('post'))
         {

             $user = User::where('name' , $request->name)->first();

            if(!empty($user)){
                  $user = $user->makeVisible('password');
                 
                  if(User::where('name' , $request->name)->exists() &&  Hash::check($request->password , $user->password) ) 
                  {
                    session( ['id' => $user->id] );                
                    session( ['user_image' => $user->image] );
                    session( ['login' => 1] );       
                    
                    return redirect()->route('pref.edit' , ['id' => 1]);
                  } 
                  else{
                    $request->session()->flash('password'  , 'passwordd is incorrect');
         
                  }
            }
            else
            {
                $request->session()->flash('username'  , 'username is not found');
            }
            return back()->withInput();
        }

        if(session('login')){
            return redirect()->route('pref.edit' , ['id' => 1]);
        }

        $title = "login";
        
        return view('back-end.home' , compact('title'));

    }
   
    public function lognout(Request $request)
    {
        $request->session()->forget(['login']);
        return redirect()->route('adminPanel/login');
    } 
    public function lock(Request $request)
    {
      
      $username = User::find(session('id'));
      if($username)
      $username = $username->name;
      else
      return redirect()->route('adminPanel/login');
      $request->session()->forget(['login']);
         return view('admin.lock' , compact('username'));
    }
    // public function edit($id)
    // {
    //     $row = $this->model->FindOrFail(1);
    //     $folderName = $this->getClassNameFromModel();
    //     $routeName = $folderName;
    //     // return $row;
    //     return view('back-end.' . $folderName . '.edit', compact(
    //         'row',
    //         'routeName'
    //     ));
        
  
    // }

    
    public function update(Request $request, $id)
    {
     
       $pref = Bref::find($id);
       if(!empty($pref)){
           $pref->fill($request->all());
           $pref->save();
       }

       $request->session()->flash('status', 'updated successfully');
       return back()->withInput();
    }
  

}
