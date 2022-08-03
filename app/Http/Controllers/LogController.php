<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\log_condition;



class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // メンバー変数の設定
    private $number = 3;

    public function index()
    {
        //
       $num = $this->number;
        $data = [
            'records' => log_condition::simplepaginate($num),
            'display' => 'search',
            'number' =>  $num,
            'all' => log_condition::count()
        ];
        return view('search',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('log_register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, log_condition::$rules);
        $num = $this->number;
        $b = new log_condition();
        $b->fill($request->except('_token'))->save();
        $data = [
            'display' => 'store',
            'records' => log_condition::simplepaginate($num)
        ];
        return view('search',$data);
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
        return view('delete', [
            'b' => log_condition::findOrFail($id)
          ]);
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
        return view('edit', [
            'b' => log_condition::findOrFail($id)
          ]);
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
        $num = $this->number;
        $b = log_condition::find($id);
        $b->fill($request->except('_token', '_method'))->save();
        $data = [
            'records' => log_condition::simplepaginate($num),
            'id' => $id,
            'display' => 'edit',
    
        ];
        return view('search',$data);

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
        $num = $this->number;
        $b = log_condition::findOrFail($id);
        $b->delete();
        $data = [
            'records' => log_condition::simplepaginate($num),
            'id' => $id,
            'display' => 'delete',
        ];
        return view('search',$data);
    }
    
    public function t_search (Request $request)
    {   
        $num = $this->number;
        $keyword = $request->input('keyword');
        $data = [
          'records' => log_condition::where('thickness','LIKE', "%{$keyword}%")->simplepaginate($num),
          'display' => 't-search'
      ];

        return view('search',$data);
    }

}
