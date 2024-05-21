<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportantLinks extends Model
{
    use HasFactory;
    protected $table='important_links';
    protected $fillable=['name','link','icon_class','serial_num','status'];
}
