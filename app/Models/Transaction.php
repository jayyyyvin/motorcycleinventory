<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Transaction extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'brand',
        'model',
        'year',
        'color',
        'price',
        'quantity',
        'transaction_type',
        'transaction_date',
        
        
    ];
}