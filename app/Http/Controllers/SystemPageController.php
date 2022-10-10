<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePagesRequest;
use App\Http\Requests\UpdatePagesRequest;
use App\Models\SystemPage;
use Illuminate\Http\Request;

class SystemPageController extends Controller
{
   
    public function index()
    {
        $pages = SystemPage::all();
    return view('admin.pages.index',compact('pages'));
    }

   
    public function create()
    {
        return  view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePagesRequest $request)
    {
        $data =$request->validated();

        $pages = SystemPage::query()->create($data);

        if ($pages) {
            return  redirect()->route('pages.index')->with('success', 'تم إنشاءالصفحة بنجاح');
        }
        else {
            return back()->with('failed', 'حدث خطأ !');
        }
    }

    public function show(SystemPage $pages)
    {
        //
    }

 
    public function edit(SystemPage $page)
    {
        return view('admin.pages.edit' ,compact('page'));
    }

    public function update(UpdatePagesRequest $request, SystemPage $page)
    {
        $data = $request->all();
        $page = SystemPage::query()->findOrFail($page->id)->update($data);
        if ($page) {
            return redirect()->route('pages.index')->with('success', 'تم التعديل على بيانات الصفحة بنجاح');
        } else {
            return back()->with('error', 'حدث خطأ !');
        }
    }

  
    public function destroy(Request $request)
    {
        $page = SystemPage::findOrFail($request->id);
        $page->delete();
        return response()->json(true, 200);
    }
}
