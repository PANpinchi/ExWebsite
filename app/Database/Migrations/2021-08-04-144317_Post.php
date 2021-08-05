<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
	
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => true
			],
	
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => '200',
				'null' => true
			],
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('email');
	}

	public function down()
	{
		$this->forge->dropTable('post');
	}
}
