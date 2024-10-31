<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lastname',
        'surname',
        'phone',
    ];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

}
