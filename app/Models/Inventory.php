<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static get()
 * @method static create(array $input)
 * @method static find($id)
 */
class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'quantity',
    ];
}
