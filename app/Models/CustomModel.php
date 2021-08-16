<?php 
namespace App\Models;
use CodeIgniter\Model;

class CustomModel extends Model {
    protected $table = 'tbl_custom';
    protected $primaryKey = 'id_custom';
    protected $allowedFields = ['id_custom', 'title', 'description', 'image', 'link', 'key'];
}