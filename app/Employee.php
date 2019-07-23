<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
    protected $table = 'employee';


    public function addNameToTestTable($name){
        DB::table('test')->insert(
            ['user_employee_name' => $name,'created_at' => now(),'updated_at' => now()]
        );

    }
}
