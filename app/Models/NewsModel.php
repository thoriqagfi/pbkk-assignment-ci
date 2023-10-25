<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
  protected $table = 'news';
  protected $primaryKey = 'id';

  protected $returnType = 'array';
  protected $useSoftDeletes = true;
  protected $useAutoIncrement = true;
  protected $allowedFields = ['title','content','status','author','slug','created_at','updated_at','deleted_at'];
}