<?php

namespace Rochi88\Admin\Models\Sale;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Rochi88\Admin\Models\Common\Item;

class InvoiceItem extends Model
{
    use HasFactory;

    public function scopeGetAllByBusiness($query){
        return $query->where($this->table.'.business_id','=', business()->id)->get();
    }
    public function business(){
        return $this->belongsTo(Business::class);
    }

    public function item(){
        return $this->belongsTo(Item::class);
    }
}
