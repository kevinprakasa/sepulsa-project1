<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function upsert(Request $request, $id = null){
      if (is_null($id)){
        $user = new User;
      }else{
        $user = User::find($id);
      }
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->id_company = $request->id_company;
        if ($request->type === 'internal'){
          $user->type = 'internal';
        }else{
          $user->type = 'external';
        }
        $user->save();
        return redirect()->route('user-add');
    }
    public function delete($id){
      $user = User::find($id);
      $user->delete();
      return redirect()->route('user-add');
    }
}
