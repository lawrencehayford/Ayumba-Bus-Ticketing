<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request as Requester;
use App\Http\Requests;
use Datatables;
use DB;
use Request;
use Session;

class AdminController extends Controller
{
    //


    public function welcome()
    {
      // Session::forget('services_type1');
      // Session::forget('services_type2');
      // Session::forget('cities');
      //getting all services of different types
      $services_type1 = DB::table('services')
                ->where('type','=','1')
                ->get();
      $services_type2 = DB::table('services')
                ->where('type','=','2')
                ->get();

      $cities = DB::table('cities')
                ->get();


      Session::put('services_type1', json_encode($services_type1));
      Session::put('services_type2', json_encode($services_type2));
      Session::put('cities', json_encode($cities));
      //print_r (json_decode(Session::get('services_type1')));die;
      return view('welcome');

    }

    public function gotobus()
    {
        $bus_company = DB::table('bus_company')
    	 		            ->get();
        $bus_user = DB::table('users')
                      ->join('bus_company', 'bus_company.company_id', '=', 'users.companyid')
                      ->where('user_category','=','bus')
                      ->get();
    	  return view('admin.bus.home',['bus_company' => $bus_company,
                                      'bus_user' => $bus_user]);
    }

    public function gototaxi()
    {
        return view('admin.taxi.home');
    }


}
