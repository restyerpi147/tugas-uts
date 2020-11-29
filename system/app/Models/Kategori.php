<?php 

namespace App\Models;
use App\Models\Blog;
/**
 * 
 */
class Kategori extends Model
{
	
	protected $table = 'kategori';
	
	function blog(){
		return $this->hasMany(Blog::class, 'id_kategori'); 
	}
}