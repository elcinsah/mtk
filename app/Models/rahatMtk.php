<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\plaza;

use Illuminate\Database\Eloquent\SoftDeletes;

class rahatMtk extends Model
{
    use HasFactory;

    use SoftDeletes;


    public function mtk()
    {
        return $this->hasOne(plaza::class, 'rahatMtk_id', 'id');

    }


}
