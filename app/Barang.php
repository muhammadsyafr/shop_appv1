<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function kategori()
    {
        return $this->belongsToMany(Kategori::class);
    }
}
