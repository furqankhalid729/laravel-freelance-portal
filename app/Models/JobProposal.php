<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobProposal extends Model
{
    use HasFactory;

    protected $fillable = ['job_id','freelancer_id','client_id','amount','duration','revision','cover_letter','attachment','status','is_hired','is_short_listed','is_interview_take'];

    protected $casts = ['status'=>'integer','is_hired'=>'integer','is_short_listed'=>'integer','is_interview_take'=>'integer','is_view'=>'integer','is_rejected'=>'integer'];


    public function freelancer()
    {
        return $this->belongsTo(User::class,'freelancer_id','id');
    }

    public function job()
    {
        return $this->belongsTo(JobPost::class,'job_id','id');
    }
}
