<?php

namespace App\Models;

use CodeIgniter\Model;

class Date extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'date';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		'start1','end1',
		'start2','end2',
		'start3','end3',
		'start4','end4',
		'start5','end5',
		'start6','end6',
		'start7','end7',
		'start8','end8',
		'start9','end9',
		'start10','end10',
		'start11','end11',
		'start12','end12',
		'start13','end13',
		'start14','end14',
		'start15','end15',
		'start16','end16',
		'start17','end17',
		'start18','end18',
		'start19','end19'
	];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];
}
