<?php 
namespace App\Models;
use CodeIgniter\Model;

class ArticleModel extends Model {
    protected $table = 'tbl_article';
    protected $primaryKey = 'id_projek';
    protected $allowedFields = ['id_projek','kode_type','title', 'slug', 'description', 'full_description', 'image'];
}