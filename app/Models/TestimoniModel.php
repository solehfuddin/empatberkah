<?php 
namespace App\Models;
use CodeIgniter\Model;

class TestimoniModel extends Model {
    protected $table = 'tbl_testimoni';
    protected $primaryKey = 'id_testimoni';
    protected $allowedFields = ['id_testimoni', 'name', 'perusahaan', 'jabatan', 'image', 'testimoni'];
}