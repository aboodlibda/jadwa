<?php

namespace App\Http\Controllers;

use App\Models\admin\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\ProjectType;
use App\Models\SystemServices;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::query()->latest()->paginate(2);

        return view('admin.projects.index',compact('projects'));
    }
    // public function get_projects()
    // {
    //     $project = Project::select('*');

    //     return DataTables::of($project)
    //         ->addIndexcolumn()
    //         ->addColumn('action', function ($row) {
    //             $btn = '';
    //             // $btn = $btn . '&nbsp; <a data-bs-toggle="modal" data-bs-target="#kt_modal_1" title="تأكيد البريد" style="cursor: pointer"  data-id="{{ $user->id }}" class="text-primary"><i
    //             // class="mdi mdi-email-send font-size-18"></i></a>';
    //             $btn = $btn . '&nbsp;<a href="' . route('projects.edit', $row->id) . '" title="تعديل" class="text-success"><i
    //                                                 class="mdi mdi-pencil font-size-18"></i></a>';
    //             $btn = $btn . '&nbsp;<a data-bs-toggle="modal" data-bs-target="#kt_modal_2" title="حذف" style="cursor: pointer"  data-id="{{ $user->id }}"  class="text-danger"><i
    //                                                 class="mdi mdi-delete font-size-18"></i></a>';
    //             return $btn;
    //         })
    //         ->rawColumns(['action'])

    //         ->make(true);
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=User::where('type','client')->get();
        $protype = ProjectType::all();

        return view('admin.projects.create',compact('user' , 'protype'));
    }

   
    public function store(StoreProjectRequest $request)
    {

        $user_id = auth()->user()->id;
        $data =$request->validated();
        $data['created_by'] = $user_id;

        if($request->file('logo')){
            $file= $request->file('logo');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('public/logo'), $filename);
            $data['logo']= $filename;
        }
      
          $project = Project::create($data);
               $project->save();
           return redirect()->route('projects.index');
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
    //    $dates= $project->development_duration+$project->start_date; 
  
    $date = new DateTime($project->start_date);
    $newDate=$date->modify('+'.$project->development_duration.'month'); // or you can use '-90 day' for deduct

   $dateStartOper = $newDate->format('Y/m/d');
   $year= $newDate->format('Y');

//    dd($newDate);
   $numofday = $newDate->modify('-'.'365'.'day');

   $numofday = $numofday->format('d');
  
   $numofmonth = $newDate->modify('-'.'365'.'month');

   $numofmonth = $numofmonth->format('m');
// dd(  $numofmonth);
        $services = SystemServices::where('status','active')->get();
  
       return view('admin.projects.show',compact('project','services','dateStartOper','year','numofday','numofmonth'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $projectType= ProjectType::all();
        $user=User::where('type','client')->get();

        return view('admin.projects.edit', compact('project','projectType','user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\admin\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $data = $request->all();
        $project = Project::query()->findOrFail($project->id);

        if($request->hasFile('logo')){
            $file= $request->file('logo');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('public/logo'), $filename);
            $data['logo']= $filename;
        }else{
            $data['logo'] = $project->logo;
        }
           $project->update($data);
            return redirect()->route('projects.index')->with('success', 'تم التعديل على بيانات المشروع بنجاح');

      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\Project  $project
     * @return \Illuminate\Http\Response Request $request
     */
    public function destroy(Request $request)
    {
        $project = Project::findOrFail($request->id);
        $project->delete();
        return response()->json(true, 200);
    }

}

