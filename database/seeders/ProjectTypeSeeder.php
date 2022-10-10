<?php

namespace Database\Seeders;

use App\Models\ProjectType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< Updated upstream
        
=======
       
>>>>>>> Stashed changes
        ProjectType::query()->create([
            'title' => 'صناعي',
          
        ]);
        ProjectType::query()->create([
<<<<<<< Updated upstream
            'title' => 'تجاري',
=======
            'title' => 'تحاري',
>>>>>>> Stashed changes
          
        ]);
        ProjectType::query()->create([
            'title' => 'تعليمي',
          
        ]);
<<<<<<< Updated upstream
=======
   
>>>>>>> Stashed changes
    }
}
