<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubBidang extends Model
{
    use HasFactory;

    public $table = 'sub_bidangs';

    public $fillable = [
        'title',
        'number',
        'description',
        'status',
    ];

    public function bidangs()
    {
        return $this->hasManyThrough(Bidang::class, BidangSubBidangs::class, 'sub_bidang_id', 'id', 'id', 'bidang_id');
    }
    public function subsubBidangs()
    {
        return $this->hasManyThrough(SubSubBidang::class, SubBidangSubSubBidangs::class, 'sub_bidang_id', 'id', 'id', 'sub_sub_bidang_id');
    }
}
