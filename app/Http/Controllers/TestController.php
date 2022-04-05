<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function numberone()
    { $numbers = array(11, 6, 31, 201, 99, 861, 1, 7, 14, 79);
        $max = $numbers[0];
        for($a = 0; $a < count($numbers); $a++){
            if($numbers[$a] > $max){
                $max = $numbers[$a];
            }
        }
        echo "The largest number is: $max";
    }
    
    public function numbertwo()
    {
        //create array pyramid php

        $numbers= 8;
        for($a = 1; $a <= 8; $a++){
            for ($k=1; $k<=$a; $k++) {
                echo "$k";
            }
            echo "<br>";
        }

    }

    public function numberthree(){
        $data = DB::table('datauser')->paginate(5);

        return view('paginates')->with('data', $data);
    }

    public function numberfour(){
        $data = DB::table('datauser')->select('city')->groupBy('city')->orderBy('city', 'ASC')->paginate(5);
        return view('groupcity')->with('data', $data);
    }
}
