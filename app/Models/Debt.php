<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    use HasFactory;
    public function debtmen()
    {
        return $this->belongsTo(Debtmen::class);
        
    }
    protected $fillable = ['date', 'received', 'given', 'comment', 'debtmen_id'];

}