<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Date extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'		=>[
				'type'			=> 'INT',
				'constraint'	=> 5,
				'unsgined'		=> true,
				'auto_increment'=> false
			],
			'start1'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end1'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'start2'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end2'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'start3'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end3'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'start4'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end4'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'start5'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end5'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'start6'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end6'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'start7'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end7'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'start8'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end8'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'start9'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end9'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'start10'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end10'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'start11'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end11'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'start12'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end12'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'start13'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end13'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'start14'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end14'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'start15'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end15'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'start16'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end16'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'start17'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end17'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'start18'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end18'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'start19'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end19'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
		]);
		$this->forge->addKey('id',true);
		$this->forge->createTable('date');
	}

	public function down()
	{
		$this->forge->dropTable('date');
	}
}
