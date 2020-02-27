<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use DB;
use Datatables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function load_data()
    {

        $json        = file_get_contents("https://fantasy.premierleague.com/api/bootstrap-static/");
        $datas        = json_decode($json, true);
        $final_data    = $datas['elements'];
        
        foreach($final_data as $each){

           if(count($final_data) != 0){

                $data = array(
                    'fpl_id'          => $each['id'],
                    'first_name'      => $each['first_name'],
                    'second_name'     => $each['second_name'],
                    'form'            => $each['form'],
                    'total_score'     => $each['total_points'],
                    'influence'       => $each['influence'],
                    'creativity'      => $each['creativity'],
                    'ict_index'       => $each['ict_index']
                );
                $result = DB::table('elements')->insertGetId($data);
                $data = "success";
            }
            else{
                $data = "error";
            }
           // echo "<pre>", print_r($league_data), "<pre>";

        }
         print_r($data);
    }
    public function check_data()
    {
        
       $collect = collect(DB::table('elements')
        ->get());

           if(count($collect) == 0){
                $data = "error";
            }
            else{
                $data = "success";
            }
           // echo "<pre>", print_r($league_data), "<pre>";
         print_r($data);
    }

    public function destroy_data()
    {
        
       $collect = collect(DB::table('elements')
        ->get());

           if(count($collect) == 0){
                $data = "error";
            }
            else{
                $data = DB::table('elements')->delete();
            }
           // echo "<pre>", print_r($league_data), "<pre>";
         print_r($data);
    }

    public function grid_data()
    {
        $grid_data = DB::table('elements')->select(['fpl_id', 'first_name' ,'second_name']);
        // echo "<pre>", print_r($grid_data), "<pre>";
        return Datatables::of($grid_data)
        ->addColumn('action', function($data){
            $button = '<button type="button" name="view" id="'.$data->fpl_id.'" class="view btn btn-primary btn-sm">Review</button>';
            return $button;
        })
        ->rawColumns(['action'])
        ->make(true);

    }

    public function review_data(Request $request)
    {
        $id = $request->input('id');

        $collect = collect(DB::table('elements')
        ->where("fpl_id", $id)
        ->get()[0]);
        // echo "<pre>", print_r($collect), "<pre>";exit;
        if(count($collect) == 0){
                $collect = "error";
            }
         echo json_encode($collect);
    }
    
}
