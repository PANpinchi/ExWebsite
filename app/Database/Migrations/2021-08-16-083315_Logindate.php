<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Logindate extends Migration
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
			'start1'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end1'			=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
		]);
		$this->forge->addKey('id',true);
		$this->forge->createTable('logindate');
	}

	public function down()
	{
		$this->forge->dropTable('logindate');
	}
}
