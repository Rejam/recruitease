<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vacancy extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'status',
        'start_date',
        'contract_type',
        'location',
        'employer_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'start_date' => 'date',
        'employer_id' => 'integer',
    ];

    public function applications(): HasMany
    {
        return $this->hasMany(Application::class);
    }

    public function employers(): BelongsToMany
    {
        return $this->belongsToMany(Employer::class);
    }

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}
