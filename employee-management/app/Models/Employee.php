<?php

namespace App\Models;

use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable=['Name', 'surname', 'is hired'];
}
