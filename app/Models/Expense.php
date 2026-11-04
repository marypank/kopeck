<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'user_id',
        'caregory_id',
        'title',
        'description',
        'price',
        'pay_date'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'pay_date' => 'date',
            'price' => 'decimal:2',
        ];
    }
}
