<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyBranch extends Authenticatable
{
    use HasFactory , SoftDeletes;

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
