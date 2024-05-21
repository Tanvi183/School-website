<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $table = 'messages';
    protected $fillable=['name','name_bn','title','title_bn','designation','designation_bn','mobile_no_one',
                        'mobile_no_two','email','address','fax_number','employment','short_message',
                        'short_message_bn','long_message','long_message_bn','image','serial_num','status'];
}
