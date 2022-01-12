<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;

    public $table = 'bidangs';

    public $fillable = [
        'title',
        'number',
        'description',
        'status',
    ];

    public function subBidangs()
    {
        return $this->hasManyThrough(SubBidang::class, BidangSubBidangs::class, 'bidang_id', 'id', 'id', 'sub_bidang_id');
    }
}
