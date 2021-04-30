<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerInsert extends Model
{
    use HasFactory;
    protected $table = 'customers';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		 'customer_fname','customer_lname', 'customer_contact_no','customer_country','customer_state','customer_driving_licence_no'
	];
}
