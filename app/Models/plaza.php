<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\flat;
use App\Models\rahatMtk;



class plaza extends Model
{
    use HasFactory;

    public function mtk()
    {
        return $this->belongsTo(rahatMtk::class, 'rahatMtk_id', 'id');
    }


}
