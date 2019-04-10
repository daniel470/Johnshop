<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function insert (Request $request)
    {
        $this->validate($request, [    
            'Fname' => 'required',
            'Lname' => 'required'
        ]);

        $FName = $request->input('Fname');
        $LName = $request->input('Lname');
        $ID1   = $request->input('ID#');
        $location =$request->input('location');
        $otherdetails =$request->input('otherdetails');

        $data= array("Fname"=>$FName,"Lname"=>$LName, "ID#"=>$ID1, "location"=>$location, "otherdetails"=>$otherdetails);

        DB::table('students')->insert($data);
    
        return redirect()->route('product.index1');
    }

    public function getData()
    {
        $data['data']= DB::table('students')->get();
        if(count($data) > 0)
        {
            return view('index2',$data);     
         }
         else{
             return view('index2');
         }
    }


}
