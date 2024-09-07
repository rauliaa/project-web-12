<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $table = 'resep'; // Nama tabel yang digunakan
    protected $fillable = ['title', 'ingredients', 'instructions']; // Kolom yang dapat diisi
}
