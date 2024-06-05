<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Himpunan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tb_himpunan';
    protected $primaryKey = 'id_himpunan';
    protected $fillable = ['nama_himpunan', 'kriteria_id', 'jenis_kurva', 'nilai_a', 'nilai_b', 'nilai_c', 'nilai_d'];

    
}
