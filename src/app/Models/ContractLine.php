<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContractLine extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function contractor()
    {
        return $this->belongsTo(Contractor::class, 'contractor_id');
    }

    public function monthlyPaymentHistories()
    {
        return $this->hasMany(MonthlyPaymentHistory::class, 'contract_line_id');
    }

    public function monthlyHowToPayment()
    {
        return $this->hasOne(MonthlyHowToPayment::class, 'contract_line_id');
    }

}