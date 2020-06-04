<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MemberDetails extends Model
{
    use SoftDeletes;
    protected $table = 'member_details';
    protected $fillable =[
        'divition_id',
        'f_name',
        'l_name',
        'dob',
        'summery'
        
    ];
    public function divition()
    {
        return $this->belongsTo(Divition::class);
    }
}
