<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Penilaian extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tb_penilaian';
    protected $primaryKey = 'id_penilaian';
    protected $fillable = ['nilai'];


}