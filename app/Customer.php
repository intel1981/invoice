<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
    	'company', 'email', 'name', 'phone', 'address'
    ];

    protected $filter = [
    	'id','company', 'email', 'name', 'phone', 'address', 'created_at'
    ];

    public static function initialize()
    {
    	return [
    		'company' => '', 'email' => '', 'name' => '', 'phone' => '', 'address' => ''
    	];
    }

    //Un CUSTOMER genera (tiene) muchas INVOICES (facturas)
    public function invoices()
    {
    	return $this->hasMany(Invoice::class);
    }
}
