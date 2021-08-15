<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Starsenior extends Migration
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
			'website1'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'instruction1'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'start2'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end2'			=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'website2'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'instruction2'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'start3'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end3'			=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'website3'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'instruction3'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'start4'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end4'			=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'website4'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'instruction4'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'start5'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end5'			=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'website5'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'instruction5'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'start6'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end6'			=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'website6'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'instruction6'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'start7'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end7'			=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'website7'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'instruction7'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'start8'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end8'			=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'website8'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'instruction8'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'start9'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end9'			=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'website9'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'instruction9'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'start10'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end10'			=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'website10'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'instruction10'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'start11'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end11'			=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'website11'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'instruction11'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'start12'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end12'			=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'website12'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'instruction12'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'start13'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end13'			=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'website13'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'instruction13'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'start14'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end14'			=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'website14'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'instruction14'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'start15'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'end15'			=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'20',
				'null'			=> true
			],
			'website15'		=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
			'instruction15'	=>[
				'type'			=>'VARCHAR',
				'constraint'	=>'300',
				'null'			=> true
			],
		]);
		$this->forge->addKey('id',true);
		$this->forge->createTable('starsenior');
	}

	public function down()
	{
		$this->forge->dropTable('starsenior');
	}
}
