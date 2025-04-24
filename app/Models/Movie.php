<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'judul', 'sinopsis', 'category_id', 'tahun', 'pemain', 'foto_sampul'];

    public $incrementing = false;
    protected $keyType = 'string';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public static function createMovie($data, $fileName)
{
    return self::create([
        'id' => $data['id'],
        'judul' => $data['judul'],
        'category_id' => $data['category_id'],
        'sinopsis' => $data['sinopsis'],
        'tahun' => $data['tahun'],
        'pemain' => $data['pemain'],
        'foto_sampul' => $fileName,
    ]);
}

public function updateMovie($data, $fileName = null)
{
    $this->update([
        'judul' => $data['judul'],
        'category_id' => $data['category_id'],
        'sinopsis' => $data['sinopsis'],
        'tahun' => $data['tahun'],
        'pemain' => $data['pemain'],
        'foto_sampul' => $fileName ?? $this->foto_sampul,
    ]);
}

}
