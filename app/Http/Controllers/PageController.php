<?php

namespace App\Http\Controllers;
use App\Company;
use App\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function addCompanyForm(){
      return view('company/add-company-form');
    }
    public function editCompanyForm($id){
      $company = Company::find($id);
      return view('company/edit-company-form',['company'=>$company]);
    }
    public function showCompany($id){
      $company = Company::find($id);
      return view('company/show-company',['company'=>$company]);
    }
    public function addUserForm(){
      $companies = Company::all();
      return view('user/add-user-form',['companies'=>$companies]);
    }
    public function editUser($id){
      $user = User::find($id);
      $companies = Company::all();
      $company = $user->company;
      return view('user/edit-user-form',['user'=>$user,'company'=>$company,'companies'=>$companies]);
    }
    public function addAttendanceForm(){
      return view('attendance/add-attendance-form');
    }
}
