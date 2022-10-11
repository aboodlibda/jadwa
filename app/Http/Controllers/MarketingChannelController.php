<?php

namespace App\Http\Controllers;

use App\Models\ProjectBpChannelResource;
use App\Models\ProjectType;
use Illuminate\Http\Request;

class MarketingChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $protype = ProjectType::all();

    //     $markchanl =ProjectBpChannelResource::where('type','marketing_channel')->get();
    //     return view('admin.MarktingChannel.index',compact('markchanl','protype'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =   $request->validate([
            'title' => 'required',
            'project_type_id' => 'required',
            'type'=>'required',
         
        ]);

        $markchanl = ProjectBpChannelResource::query()->create($data);

        if ($markchanl) {
            return  redirect()->route('marktchanl.index')->with('success', 'تم إنشاءالصفحة بنجاح');
        }
        else {
            return back()->with('failed', 'حدث خطأ !');
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
        $request->validate([
            'title' => 'required',
            'project_type_id' => 'required',
         
        ]);
     $markchanl=   ProjectBpChannelResource::findOrFail($request->id);
        $markchanl->update($request->all());
                  return redirect()->route('marktchanl.index')->with('success', 'تم التعديل على بيانات  بنجاح');
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
}
