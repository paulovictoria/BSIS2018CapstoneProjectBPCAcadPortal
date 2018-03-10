<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Classroom;
class ExcelController extends Controller
{
/**

     * Create a new controller instance.

     *

     * @return void

     */

    public function importExportView(){

        return view('import_export');

    }



    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function importFile(Request $request){

        if($request->hasFile('sample_file')){

            $path = $request->file('sample_file')->getRealPath();

            $data = \Excel::load($path)->get();



            if($data->count()){

                foreach ($data as $key => $value) {

                    $arr[] = [
                    	'Sid' =>$value->sid, 
                    	'LastName' =>$value->lastname,
                    	'FirstName'=>$value->firstname,
                    	'MidleName'=>$value->midlename
                    ];



                }
                    dd($arr);

                if(!empty($arr)){

                    DB::table('products')->insert($arr);
                      $classroom = new Classroom();
                    $classroom->students()->sync($request->students,false);
                    dd('Insert Recorded successfully.');

                }

            }

        }

        dd('Request data does not have any files to import.');      

    } 



    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function exportFile($type){

        $products = Product::get()->toArray();



        return \Excel::create('hdtuto_demo', function($excel) use ($products) {

            $excel->sheet('sheet name', function($sheet) use ($products)

            {

                $sheet->fromArray($products);

            });

        })->download($type);

    }      

}
