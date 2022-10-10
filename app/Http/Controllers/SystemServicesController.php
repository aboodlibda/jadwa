<?php

namespace App\Http\Controllers;

use App\Models\SystemServices;
use App\Http\Requests\StoreSystemServicesRequest;
use App\Http\Requests\UpdateSystemServicesRequest;
use Illuminate\Http\Request;

class SystemServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services= SystemServices::query()->latest()->paginate(4);
        return view('admin.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSystemServicesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSystemServicesRequest $request)
    {
        $data =$request->all();
        if($request->file('image')){
            $file= $request->file('image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('public/image'), $filename);
            $data['image']= $filename;
        }
        $pages = SystemServices::query()->create($data);

        if ($pages) {
            return  redirect()->route('services.index')->with('success', 'تم إنشاءالخدمة بنجاح');
        }
        else {
            return back()->with('failed', 'حدث خطأ !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SystemServices  $systemServices
     * @return \Illuminate\Http\Response
     */
    public function show(SystemServices $systemServices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SystemServices  $systemServices
     * @return \Illuminate\Http\Response
     */
    public function edit(SystemServices $service)
    {
        return view('admin.services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSystemServicesRequest  $request
     * @param  \App\Models\SystemServices  $systemServices
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSystemServicesRequest $request, SystemServices $service)
    {
        $data = $request->all();
        $service = SystemServices::query()->findOrFail($service->id);

        if($request->hasFile('image')){
            $file= $request->file('image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('public/image'), $filename);
            $data['image']= $filename;
        }else{
            $data['image'] = $service->image;
        }
           $service->update($data);
            return redirect()->route('services.index')->with('success', 'تم التعديل على بيانات الخدمة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SystemServices  $systemServices
     * @return \Illuminate\Http\Response
     */
    public function destroy(SystemServices $service)
    {
        $service = SystemServices::query()->findOrFail($service->id)->delete();
       
            return redirect()->route('services.index')->with('success', 'تم حذف الخدمة بنجاح');
    }
}
