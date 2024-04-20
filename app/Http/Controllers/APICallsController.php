<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class APICallsController extends Controller
{
    public function allUsers(Request $request, $id=null) {
        if ($request->method() == "GET") {
            $user = User::all();
            return $user;
        }
    }

    public function allUsersWithParams(Request $request, $id=null) {
        if ($request->method() == "GET") {
            $user = $id ? User::find($id) : User::all();
            return $user;
        }
    }

    public function addCertificate(Request $request) {

        $addCert = new Certificate;
        $addCert->user_id = $request->user_id;
        $addCert->year = $request->year;
        $addCert->company = $request->company;
        $addCert->date_aquired = $request->date_aquired;
        $result = $addCert->save();
        if($result){
            return ['result' => 'Data has been saved'];
        }else{
            return ['result' => 'Data failed to saved'];
        }
       
        
    }

    public function updateCertificate(Request $request) {

        $addCert = Certificate::find($request->id);
        $addCert->user_id = $request->user_id;
        $addCert->year = $request->year;
        $addCert->company = $request->company;
        $addCert->date_aquired = $request->date_aquired;
        $result = $addCert->save();
        if($result){
            return ['result' => 'Certificate update has been saved'];
        }else{
            return ['result' => 'Certificate update has failed to saved'];
        }
       
        
    }

    public function searchCompany($company){
        return Certificate::where("company", "like", "%" . $company . "%")->get();
    }

    public function deleteCompany($id){
        $deleteCert = Certificate::find($id);
        $result = $deleteCert->delete();
        if($result){
            return ['result' => 'Company has been deleted'];
        }else{ 
            return ['result' => 'Company delete operation failed '];
        }
    }
}
