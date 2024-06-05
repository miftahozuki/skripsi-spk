<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
 
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

    public function himpunan(): HasMany
    {
        return $this->hasMany(Himpunan::class, 'kriteria_id');
    }
}