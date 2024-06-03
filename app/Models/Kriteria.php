<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Kriteria extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tb_kriteria';
    protected $primaryKey = 'id_kriteria';
    protected $fillable = ['kriteria'];
}