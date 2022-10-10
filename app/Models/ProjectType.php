<?php

namespace App\Models;

use App\Models\admin\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    use HasFactory;

    protected $guraded = [];
<<<<<<< Updated upstream
    protected $fillable =['title','status'];
      public function projects(){
        return $this->hasMany(Project::class );
    }

    public function projectResource(){
      return $this->hasMany(ProjectBpChannelResource::class );
  }
=======

      public function projects(){
        return $this->hasMany(Project::class);
    }
>>>>>>> Stashed changes
}
