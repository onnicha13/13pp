<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadImg extends Model
{
    use HasFactory;
    protected $table = 'tbl_image';
    public $timestamps = true;
}
