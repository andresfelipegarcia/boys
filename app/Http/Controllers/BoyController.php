<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests;

use App\Boy;

use App\Observation;

use Exception;

use Illuminate\Support\Facades\Input;

class BoyController extends Controller
{

    private $path = 'boy';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Boy::all();

        return view($this->path.'.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->path.'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Registro usuario
        try
        {
            $boy = new boy();
            $boy->name = $request->name;
            $boy->image = $request->image;
            $boy->age = $request->age;
            $boy->save();
            return redirect()->route('boys.index');
        }
        catch(Exception $e)
        {
            return "Fatal error - ".$e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = DB::table('boys')
        ->join('observations','boys.id','=','observations.boy')
        ->select('observations.id','observations.description', 'observations.image', 'observations.date','observations.boy')
        ->where('observations.boy', '=', $id)
        ->get();
        
        //echo "boy";
        return view($this->path.'.show',compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    


    public function search()
    {   
        $date1 = Input::get('date1');
        $date2 = Input::get('date2');

        $data = DB::table('observations')
        ->whereBetween('observations.date',array($date1,$date2))->get();
        //echo serialize($data);
        //$name='a';
        return view($this->path.'.search',compact('data'));
    }
}
