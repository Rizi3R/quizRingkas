<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubBidang extends Model
{
    use HasFactory;

    public $table = 'sub_sub_bidangs';

    public $fillable = [
        'title',
        'number',
        'description',
        'status',
    ];

    public function subBidangs()
    {
        return $this->hasManyThrough(SubBidang::class, SubBidangSubSubBidangs::class, 'sub_sub_bidang_id', 'id', 'id', 'sub_bidang_id');
    }
}
