<?php

namespace App\Http\Controllers;

use App\Models\SystemContact;
use App\Http\Requests\StoreSystemContactRequest;
use App\Http\Requests\UpdateSystemContactRequest;
use Illuminate\Http\Request;

class SystemContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = SystemContact::get();

        return view('admin.contact.index',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSystemContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSystemContactRequest $request)
    {
        $data =$request->all();

        $contact = SystemContact::query()->create($data);

        if ($contact) {
            return  redirect()->route('contacts.index')->with('success', 'تم إنشاء بنجاح');
        }
        else {
            return back()->with('failed', 'حدث خطأ !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SystemContact  $systemContact
     * @return \Illuminate\Http\Response
     */
    public function show(SystemContact $systemContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SystemContact  $systemContact
     * @return \Illuminate\Http\Response
     */
    public function edit(SystemContact $systemContact)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSystemContactRequest  $request
     * @param  \App\Models\SystemContact  $systemContact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SystemContact $systemContact)
    {
        // dd($request->id);
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'value' => 'required',
        ]);
     $contact=   SystemContact::findOrFail($request->id);
        $contact->update($request->all());
                  return redirect()->route('contacts.index')->with('success', 'تم التعديل على بيانات  بنجاح');

    }
        
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SystemContact  $systemContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $contact = SystemContact::findOrFail($request->id);
        $contact->delete();
        return response()->json(true, 200);
    }
}
