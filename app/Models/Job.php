<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class);
    }
    public function userHasApplied(Authenticate|User|int $user): bool
    {
        return $this->where('id', $this->id)->whereHas('jobApplications', fn($query) => $query->where('user_id', '=', $user->id ?? $user))->exists();
    }
    public static array $experience = ['entry', 'intermediate', 'senior'];
    public static array $category = ['IT', 'Finance', 'Sales', 'Marketing'];
}
