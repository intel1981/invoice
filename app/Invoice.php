<?php

namespace App;

use App\Customer;
use App\InvoiceItem;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
    	'customer_id', 'title', 'date', 'due_date', 'discount', 'sub_total', 'total'
    ];

    protected $filter = [
    	'id','customer_id', 'title', 'date', 'due_date', 'discount', 'sub_total', 'total',
    	'created_at',
    	// filter relation also, eg: customer
    	'customer.id','customer.company', 'customer.email', 'customer.name', 'customer.phone',
    	'customer.address', 'customer.created_at'
    ];

    public static function initialize()
    {
    	return [
    		'customer_id' => 'Select',
    		'title' => 'Invoice for',
    		'date' => date('Y-m-d'),
    		'due_date' => null,
    		'discount' => 0,
    		'items' => [
    			InvoiceItem::initialize();
    		]
    	];
    }

    public function items()
    {
    	return $this->hasMany(InvoiceItem::class);
    }

    public function customer()
    {
    	return $this->belongTo(Customer::class);
    }
}
