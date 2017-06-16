<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User_list extends Model
{
	 protected $table = 'tbl_users';
	 
   protected $fillable = [
  'over_18',
  'under_18',
  'first_name',
  'last_name',
  'have_pet',
  'pet_name',
  'line_1',
  'line_2',
  'city',
  'state',
  'zip_code',
  'country',
  'email_address',
  'phone_number',
  'is_subscribed',
    ];
}
