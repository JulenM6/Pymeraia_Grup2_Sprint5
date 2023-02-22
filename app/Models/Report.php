<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Report extends Model
{
    use HasFactory;
    protected $table = 'reports';
    protected $fillable = [
        'name',
        'user_id',
        'date',
        'hidden'
    ];

    public function results(): BelongsToMany
    {
        return $this->belongsToMany(\mysql_xdevapi\Result::class)->withTimestamps();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
