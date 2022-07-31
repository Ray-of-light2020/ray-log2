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
    public function index()
    {
        //
        $data = [
            'records' => log_condition::all()
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
        $b = new log_condition();
        $b->fill($request->except('_token'))->save();
        return view('log_register');
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
        $b = log_condition::find($id);
        $b->fill($request->except('_token', '_method'))->save();
        $data = [
            'records' => log_condition::all(),
   
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
        $b = log_condition::findOrFail($id);
        $b->delete();
        $data = [
          'records' => log_condition::all(),
          'id' => $id
      ];
        return view('search',$data);
    }
}