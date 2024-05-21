<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrimaryInfo extends Model
{
    use HasFactory;
    protected $table='primary_infos';
    protected $fillable=['school_name','school_name_bn','address','address_bn','email','mobile_no',
    'mobile_no_one','school_code','school_mpo_code','school_eiin_code','fb_link','youtube_link',
    'short_description','short_description_bangla','long_description','long_description_bangla',
    'map_embed','top_banner_image','top_banner_image_url','logo','favicon'];
}
