<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;

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
