<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_list;
use DB;

class UserController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $guides = User_list::orderBy('created_at', 'desc')->paginate(5);
     
        return view('vendor.adminlte.user.index', compact('guides'));
    }

  //   public function create()
  //   {
  //       $isEdit = false;
  //       return view('admin.nutrition_guide.create', compact('isEdit'));
  //   }

  //   public function store(Request $request)
  //   {	
    	
		// $this->validate($request, [
  //           'title' => 'required',
  //           'arabic_title' => 'required'
  //       ]);

  //       $data = $request->all();
    	
  //       $program = NutritionGuide::create($data);
  //       return redirect()->route('nutritionsGuid')->with('success', 'Nutrition Guide created successfully');
  //   }

    // public function edit(NutritionGuide $guide)
    // {
    	
    //     $isEdit = true;
    //     return view('admin.nutrition_guide.edit', compact('guide', 'isEdit'));
    // }

    // public function update(NutritionGuide $guide, Request $request)
    // {
    //     // $this->validate($request, [
    //     //     'title' => 'required',
    //     //     'arabic_title' => 'required'
    //     // ]);

    //    $data = $request->all();
    //    $guide->update($data);
       
    //     return redirect()->back()->with('success', 'Nutrition Guide Updated successfully');
    // }

    
    public function delete(Request $request , $id)
    {
      
        $unit = User_list::find($id);
        
        if($unit->delete()){
          
           return back()->with('success', 'User Deleted Successfully');
        }else{
            //Return with failure message
      
            return back()->with('error', 'Error while deleting');
        }
            
    }
}
