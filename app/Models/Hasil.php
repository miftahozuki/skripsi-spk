<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tb_hasil';
    protected $primaryKey = 'id_hasil';
    protected $fillable = ['karyawan_id', 'himpunan_id', 'nilai'];
}
