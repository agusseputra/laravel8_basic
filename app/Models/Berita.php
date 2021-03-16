<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    //hanya digunakan jika nama table tidak sesuai dengan model
    // protected $table = 'beritawisata';
    // protected $primaryKey = 'id'; 
    //mendeskripsikan beberapa field yang memperoleh aksis update data
    protected $fillable=[
        'user_id','title','description','cover'
    ];
    
}
