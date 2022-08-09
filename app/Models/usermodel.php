<?php 
namespace App\Models;
use CodeIgniter\Model;
class userModel extends Model
{
    protected $table = 'emp';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name','age'];
}
?>