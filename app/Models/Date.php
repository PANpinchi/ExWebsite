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
		'start1','end1','website1','instruction1',
		'start2','end2','website2','instruction2',
		'start3','end3','website3','instruction3',
		'start4','end4','website4','instruction4',
		'start5','end5','website5','instruction5',
		'start6','end6','website6','instruction6',
		'start7','end7','website7','instruction7',
		'start8','end8','website8','instruction8',
		'start9','end9','website9','instruction9',
		'start10','end10','website10','instruction10',
		'start11','end11','website11','instruction11',
		'start12','end12','website12','instruction12',
		'start13','end13','website13','instruction13',
		'start14','end14','website14','instruction14',
		'start15','end15','website15','instruction15',
		'start16','end16','website16','instruction16',
		'start17','end17','website17','instruction17',
		'start18','end18','website18','instruction18',
		'start19','end19','website19','instruction19'
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
