<?php

namespace App\Http\Controllers;
use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{   //Controller for CRUD Companies
    //method for update and insert Company
    public function upsert(Request $request, $id = null){
      if (is_null($id)){
        $company = new Company;
      }else{
        $company = Company::find($id);
      }
      $company->name = $request->name;
      $company->address = $request->address;
      $company->phone = $request->phone;
      $company->email = $request->email;
      $company->save();
      return redirect()->route('company-add');
    }
    public function delete($id){
      $company = Company::find($id);
      $company->delete();
      return redirect()->route('company-add');
    }

}
