<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;
    protected $table = "items";
    protected $fillable = ["name","count"];

    public function getAllItems(){
        return items::all();
    }

}
