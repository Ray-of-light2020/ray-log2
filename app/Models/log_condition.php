<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log_condition extends Model
{
    use HasFactory;
    
    protected $table = 'log_conditions';

    protected $fillable = [ 'id','size', 'thickness', 'shooting_method', 'ci', 'sfd' ,'irradiation_time','d_u','d_l','film','deverop_time','deverop_temp','remarks','created_at','updated_at'];

    public static $rules = [
        'size'=>'required|numeric', 
        'thickness'=>'required|numeric', 
        'shooting_method'=>'required', 
        'ci'=>'required|numeric',
        'sfd'=>'required|numeric',
        'irradiation_time'=>'required|numeric',
        'd_u'=>'',
        'd_l'=>'',
        'film'=>'required',
        'deverop_time'=>'',
        'deverop_temp'=>'',
        'remarks'=>'',
        'created_at'=>'',
        'updated_at'=>'',
    ];
}
