<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangSubBidangs extends Model
{
    use HasFactory;

    public $table = 'bidang_sub_bidangs';

    public $fillable = [
        'bidang_id',
        'sub_bidang_id',
    ];

    public function bidang()
    {
        return $this->hasOne(Bidang::class, 'bidang_id', 'id');
    }

    public function subBidang()
    {
        return $this->hasOne(SubBidang::class, 'sub_bidang_id', 'id');
    }
}
