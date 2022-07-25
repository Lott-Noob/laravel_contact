<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $fillable = ['name', 'adddress', 'email', 'website'];
    public function contacts( )
    {
        # code...

        return $this->hasMany(Contact::class);
    }

}
