<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubBidangSubSubBidangs extends Model
{
    use HasFactory;

    public $table = 'sub_bidang_sub_sub_bidangs';

    public $fillable = [
        'sub_bidang_id',
        'sub_sub_bidang_id',
    ];

    public function subBidang()
    {
        return $this->hasOne(SubBidang::class, 'sub_bidang_id', 'id');
    }

    public function subsubBidang()
    {
        return $this->hasOne(SubSubBidang::class, 'sub_sub_bidang_id', 'id');
    }

}
