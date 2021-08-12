<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post_login extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => FALSE
			],

			'name' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => true
			],
	
			'account' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => true
			],
	
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => '200',
				'null' => true
			],

			'email' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => true
			],
		]);

		$this->forge->createTable('account');
	}

	public function down()
	{
		$this->forge->dropTable('account');
	}
}
