<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\SoftDeletes;

class Form extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName',
        'middleName',
        'lastName',
        'email',
        'phone',
        'startingDate',
        'endingDate',
        'disability',
        'sex',
        'fee',
        'positionofnow',
        'positionyouworked',
        'UniversityHiringEra',
        'servicPeriodAtUniversity',
        'servicPeriodAtAnotherPlace',
        'serviceBeforeDiplo',
        'serviceAfterDiplo',
        'resultOfrecentPerform',
        'DisciplineFlaw',
        'MoreRoles',
        'position_id',
        // 'edu_level_id',
        // 'education_type_id',
        'job_category_id',
        'level_id',
        // 'h_r_id',
        'choice2_id',
        'jobcat2_id',
        // 'secondhr_id',
        'level',
        // 'tag_slug',
        // 'firstdergee'
        'registeredBy',
        'ethinicity',
        'birth_date',
        'jobcat',






    ];

    protected $with = ['education', 'experiences'];
    public function h_r_s()
    {
        return $this->belongsTo(HR::class, 'h_r_id', 'id');
    }
    public function secondhr()
    {
        return $this->belongsTo(Secondhr::class, 'secondhr_id', 'id');
    }


    public function experiences()
    {
        return $this->hasMany(experience::class, 'form_id', 'id');
    }
    public function education()
    {
        return $this->hasMany(Education::class, 'form_id', 'id');
    }
    public function position()
    {
        return $this->hasOne(Position::class, 'id', 'position_id');
    }
    // public function edu_level()
    // {
    //     return $this->hasOne(EduLevel::class, 'id', 'edu_level_id');
    // }
    // public function education_type()
    // {
    //     return $this->hasOne(EducationType::class, 'id', 'education_type_id');
    // }
    public function job_category()
    {
        return $this->hasOne(JobCategory::class, 'id', 'job_category_id');
    }
    public function jobcat2()
    {
        return $this->hasOne(jobcat2::class, 'id', 'jobcat2_id');
    }
    public function level()
    {
        return $this->hasOne(Level::class, 'id', 'level_id');
    }
    public function choice2()
    {
        return $this->hasOne(choice2::class, 'id', 'choice2_id');
    }

    public function getFullNameAttribute()
    {
        return "{$this->firstName} {$this->middleName} {$this->lastName}";
    }
}
