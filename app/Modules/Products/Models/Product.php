<?php 

namespace Modules\Products\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Categories\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'price',
        'stock',
        'description',
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];
}