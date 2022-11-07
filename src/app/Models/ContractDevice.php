<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContractDevice extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function contractLine()
    {
        return $this->belongsTo(ContractLine::class, 'contract_line_id');
    }

    public function monthlyPaymentHistories()
    {
        return $this->hasMany(MonthlyPaymentHistory::class, 'contract_line_id');
    }
}