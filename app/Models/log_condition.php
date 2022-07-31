<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log_condition extends Model
{
    use HasFactory;
    
    protected $table = 'log_conditions';

    protected $fillable = [ 'id','size', 'thickness', 'shooting_method', 'ci', 'sfd' ,'irradiation_time','d_u','d_l','film','deverop_time','deverop_temp','remarks','created_at','updated_at'];
}
