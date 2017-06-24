<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Item extends Model
{
   public $fillable = ['nim','nama','judul','email','abstraksi'];




}