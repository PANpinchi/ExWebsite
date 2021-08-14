<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Starcollege extends Migration
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
	]);
	$this->forge->addKey('id',true);
	$this->forge->createTable('starcollege');
	}

	public function down()
	{
		$this->forge->dropTable('starcollege');
	}
}
