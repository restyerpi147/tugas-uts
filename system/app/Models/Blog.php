<?php 

namespace App\Models;

use App\Models\ClientBlog;
use App\Models\User;
use App\Models\Kategori;
/**
 * 
 */
class Blog extends Model
{
	
	protected $table = 'blog';
	
	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}

	function kategori(){
		return $this->belongsTo(Kategori::class, 'id_kategori');
	}

	function komentar(){
    	return $this->hasMany(ClientBlog::class, 'id_blog');
    }

}