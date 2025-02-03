<?php

namespace App\Models;

use App\Entities\Address;
use App\Models\Basic\AppModel;

class AddressModel extends AppModel
{
    protected $table            = 'addresses';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = Address::class;
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'address',
        'number',
        'district',
        'city',
        'state',
        'postal_code',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

     // Dates
     protected $useTimestamps = true;
     protected $dateFormat    = 'datetime';
     protected $createdField  = 'created_at';
     protected $updatedField  = 'updated_at';
     protected $deletedField  = 'deleted_at';
 
     // Callbacks
     protected $allowCallbacks = true;
     protected $beforeInsert   = ['escapeData'];
     protected $beforeUpdate   = ['escapeData'];
}
