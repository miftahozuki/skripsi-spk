<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tb_karyawan';
    protected $primaryKey = 'id_karyawan';
    protected $fillable = ['nama'];

    public function kriteria() {
        return $this->belongsToMany(Kriteria::class, 'tb_penilaian', 'karyawan_id', 'kriteria_id')->withPivot(['nilai']);
    }

    public function himpunan() {
        return $this->belongsToMany(Himpunan::class, 'tb_hasil', 'karyawan_id', 'himpunan_id')->withPivot(['nilai']);
    }
}
