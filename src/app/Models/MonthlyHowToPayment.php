<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MonthlyHowToPayment extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function contractLine()
    {
        return $this->belongsTo(ContractLine::class, 'contract_line_id');
    }
}