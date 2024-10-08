<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = ["contato_id", "vencimento", "pagamento"];

    public function contato(){
        return $this->belongsTo("App\Models\Contato");
    }

    public function produtos(){
        return $this->belongsToMany("App\Models\Produto", "pedido__produtos")
                    ->withPivot("valorUnitario", "quantidade");
    }

    public function totalPedido(){
        $total = 0;
        foreach($this->produtos as $produto)
            $total += ($produto->pivot->quantidade * $produto->pivot->valorUnitario);
        return $total;
    }

    public function mediaQuantidades(){
        $quantTotal = 0;
        $quantProdutos = 0;
        foreach($this->produtos as $produto){
            $quantTotal += $produto->pivot->quantidade;
            $quantProdutos++;
        }
        $mediaQuant = $quantTotal / $quantProdutos;
        return $mediaQuant;

    }

    public function totalQuantidades(){
        $quant = 0;
        foreach($this->produtos as $produto)
            $quant += $produto->pivot->quantidade;
        return $quant;
    }
}
