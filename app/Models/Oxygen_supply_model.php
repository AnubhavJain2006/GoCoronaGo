<?php namespace App\Models;

use CodeIgniter\Model;

class Oxygen_supply_model extends Model
{
    protected $table      = 'oxygen_supply';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';

    protected $allowedFields = ['name', 'address', 'whatsapp', 'phone', 'email', 'verification', 'oxygen_left', 'updated_at', 'created_at', 'reports', 'pincode','city'];

    protected $useTimestamps = true;
    protected $dateFormat = 'd-M-y : h-i-s a';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;

    public function find_oxygen_suppiers_in_city($city) {
        return $this->where('city', $city)->findAll();
    }

    public function find_oxygen_suppiers_with_pin($pin) {
        return $this->where('pincode', $pin)->findAll();
    }
}