<?php

namespace App\Models;

use CodeIgniter\Model;

class Starcollege extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'starcollege';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		'start1','end1','website1','instruction1',
		'start2','end2','website2','instruction2',
		'start3','end3','website3','instruction3',
		'start4','end4','website4','instruction4',
		'start5','end5','website5','instruction5',
		'start6','end6','website6','instruction6',
		'start7','end7','website7','instruction7'
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
