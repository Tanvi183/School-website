<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubPanelBox extends Model
{
    use HasFactory;
    protected $table = 'sub_panel_boxes';
    protected $fillable = ['name','url','serial_num','fk_panel_id','target','status'];
}
