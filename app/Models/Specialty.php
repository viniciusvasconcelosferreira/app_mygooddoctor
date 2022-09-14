<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialty extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'specialties';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
    ];

    public function doctors()
    {
        return $this->belongsTo(Doctor::class);
    }
}
