<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request as Requester;
use App\Http\Requests;
use Datatables;
use DB;
use Request;
use Session;
use Illuminate\Support\Facades\Hash;
use App\User;

class BusController extends Controller
{
    //
    public function viewbusbooking($companyid)
    {
      $bus_booking = DB::table('bus_booking_details')
                ->join('users', 'users.id', '=', 'bus_booking_details.user_id')
                ->join('route', 'route.id', '=', 'bus_booking_details.rout_id')
                ->where('bus_booking_details.company_id','=',$companyid)
                ->get();
      return view('bus.view-bus-booking',['bus_booking' => $bus_booking]);
    }
    public function viewbusroutes($companyid)
    {
      $bus_route = DB::table('route')
                ->where('company_id','=',$companyid)
                ->get();

      $bus_type = DB::table('bus_type')
                ->where('company_id','=',$companyid)
                ->get();
      return view('bus.add-routes',['bus_route' => $bus_route,
                                    'bus_type' => $bus_type]);
    }
    public function addbususer()
    {
      $inputs = Request::all();
      $user_fullname = $inputs['user_fullname'];
      $user_contact = $inputs['user_contact'];
      $user_email = $inputs['user_email'];
      $user_company = $inputs['user_company'];
      $user_gender = $inputs['user_gender'];

      //print_r($data);die;
      User::create([
            'name' => $user_fullname,
            'email' => $user_email,
            'password' => Hash::make('pass1234'),
            'mobile' => $user_contact,
            'gender' => $user_gender,
            'status' => "Active",
            'usertype' => "normal",
            'companyid' => $user_company,
            'user_category' => "bus"
        ]);
         return redirect('/adminbushome');
    }
    public function addbuscompany()
    {

       $inputs = Request::all();
       $company_name = $inputs['company_name'];
       $address = $inputs['address'];
       $contact = $inputs['contact'];
       $token=time();

        //saving values
        $isSaved=DB::table('bus_company')->insert(
		     array(
		            'company_name'     =>   $company_name,
		            'contact'   =>   $contact,
		            'address'   =>   $address,
		            'company_id'   =>   $token

		            )
		     );
       if($isSaved)
       {
             $data=array('success'=>0,
                      'message'=>'Data Saved Successfully');
        }
        else
        {
              $data=array('success'=>1,
                       'message'=>'Error Saving Data');

         }
         return  $data;

    }
}
