<?php 
namespace App\Models;
use CodeIgniter\Model;

class ContactusModel extends Model {
    protected $table = 'tbl_contactus';
    protected $primaryKey = 'id_contactus';
    protected $allowedFields = ['name','email', 'message'];
}