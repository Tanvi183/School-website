<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanelBox extends Model
{
    use HasFactory;
    protected $table = 'panel_boxes';
    protected $fillable = ['name','url','image','serial_num','status'];

    public function subPanel(){
        return $this->hasMany(SubPanelBox::class,'fk_panel_id','id');
    }
}
