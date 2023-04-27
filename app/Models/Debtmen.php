<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debtmen extends Model
{
    use HasFactory;
    public function debts()
    {
        return $this->hasMany(Debt::class);
    }
    protected $fillable = ['name'];
}
