<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'cover',
        'nama',
        'deskripsi',
        'no_buku',
        'pengarang',
        'isi',
        'penerbit',  // Make sure this is included
        'kategori'
    ];

    // Relationship: A book can have many borrowing history records

}
