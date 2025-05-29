

<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;



class Pesagem extends Model
{
    protected $table = 'pesagens';

    protected $fillable = [
        'cliente_id', 
        'data_pesagem',
        'observacoes',
    
    ];

    // Uma pesagem pode ter vários materiais (relacionamento muitos-para-muitos)
    public function materiais(): BelongsToMany
    {
        return $this->belongsToMany(Material::class, 'pesagem_material')
            ->withPivot('quantidade', 'peso')
            ->withTimestamps();
    }

    // Relacionamento com Cliente (opcional)
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}