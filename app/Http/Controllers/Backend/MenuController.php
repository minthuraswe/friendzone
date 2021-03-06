<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Menu;
use Validator;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Menu::paginate(5);
        return view('menu.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           
        $validatedData = Validator::make($request->all(), [
            'name' => 'required',
        ])->validate();
       
        Menu::create([
            'menu_name' => request('name'),
        ]);
        return redirect('/menu')->with('message','Successfully Created!!');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        if($search != ""){
            $searchmenu = Menu::where('menu_name', 'like', '%'.$search.'%')->paginate();
            $search_count = count($searchmenu);
            return view('menu.search',compact('searchmenu','search','search_count'));
        }else{
            return view('menu.search')->with('error', 'The search text was not found. Sorry!!');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Menu::find($id);
        return view('menu.edit',compact('data'));
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
        $data = Menu::find($id);
        $data->menu_name = $request->name;

        $data->save();
        return redirect('/menu')->with('message', 'Successfully Updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::find($id)->delete();
        return redirect('/menu')->with('message', 'Successfully Deleted!!');
    }

    // private function validateRequest()
    // {
    //     return  request()->validate([
    //         'menuname' => 'required',
    //     ]);
    // }
}
