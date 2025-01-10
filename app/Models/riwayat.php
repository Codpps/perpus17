<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'judul_buku',
        'nomor_buku',
        'penerbit',
    ];

    /**
     * Relation to the User model.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
