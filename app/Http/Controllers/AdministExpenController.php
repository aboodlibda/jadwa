<?php

namespace App\Http\Controllers;

use App\Models\AdministExpen;
use App\Http\Requests\StoreAdministExpenRequest;
use App\Http\Requests\UpdateAdministExpenRequest;
use Illuminate\Http\Request;

class AdministExpenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminstExp = AdministExpen::get();
        return view('admin.AdminstratorExp.index',compact('adminstExp'));
    }

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
     * @param  \App\Http\Requests\StoreAdministExpenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdministExpenRequest $request)
    {
        $data =$request->only(['item','value']);

        $adminst = AdministExpen::query()->create($data);

        if ($adminst) {
            return  redirect()->route('adminstExp.index')->with('success', 'تم إنشاء بنجاح');
        }
        else {
            return back()->with('failed', 'حدث خطأ !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdministExpen  $administExpen
     * @return \Illuminate\Http\Response
     */
    public function show(AdministExpen $administExpen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdministExpen  $administExpen
     * @return \Illuminate\Http\Response
     */
    public function edit(AdministExpen $administExpen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdministExpenRequest  $request
     * @param  \App\Models\AdministExpen  $administExpen
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdministExpenRequest $request, AdministExpen $administExpen)
    {
        $request->validate([
            'item' => 'required',
            'value' => 'required',
        ]);
     $administExpen =   AdministExpen::findOrFail($request->id);
        $administExpen->update($request->all());
                  return redirect()->route('adminstExp.index')->with('success', 'تم التعديل على بيانات  بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdministExpen  $administExpen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $administExpen = AdministExpen::findOrFail($request->id);
        $administExpen->delete();
        return response()->json(true, 200);
    }
}
