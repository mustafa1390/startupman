<?php

namespace App\Http\Controllers\Admin;

use App\Models\BusinesGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class BusinesGroupController extends Controller
{
        public function create()
    {
        return view('admin.busines_groups.create' );
    }
        public function create_sub()
    {
        $busines_groups  =    BusinesGroup::whereNull('parent_id')->get();
        return view('admin.busines_groups.create_sub', compact(['busines_groups'    ]) );
    }


      public function store(Request $request)
      {

        // dd($request);
           $request->validate([
              'name' => 'required',
          ]);
          $data = $request->all();
          $busenes_group = BusinesGroup::create($data);

        Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('admin.busines_groups.index');
        }


  public function update(Request $request , $id)
      {

        // dd($request);
           $request->validate([
              'name' => 'required',
          ]);
          $data = $request->all();

          $busenes_group = BusinesGroup::find($id);
          $busenes_group->update($data);

        Alert::success('با موفقیت ویرایش شد', 'اطلاعات جدید با موفقیت ویرایش شد');
        return redirect()->route('admin.busines_groups.index');
        }

           public function index()
    {
landing_model_v1('BusinesGroup');
        $busines_groups  =    BusinesGroup::orderby('id','desc')->get();
        $show_busines_group  =    BusinesGroup::whereNull('parent_id')->with('childrenRecursive')->get();

        // dd($busenes_groups);
        return view('admin.busines_groups.index' , compact(['busines_groups' , 'show_busines_group'  ]));
    }



    public function edit($id)
    {
        $busenes_group=BusinesGroup::find($id);


        $show_busines_group  =    BusinesGroup::where([ ['id',$id],
         ])->whereNull('parent_id')->with('childrenRecursive')->get();


        return view('admin.busines_groups.edit' , compact([   'busenes_group' , 'show_busines_group' ]) );
    }


}
