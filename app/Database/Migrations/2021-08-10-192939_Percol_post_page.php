<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Percol_post_page extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'		=> [
					'type'			=> 'INT',
					'constraint'	=> 5,
					'unsigned'		=> TRUE,
					'auto_increment'=> TRUE],
			'title'		=> [
					'type'			=> 'VARCHAR',
					'constraint'	=> 100,
					'null'			=> true],
			'subtitle'	=> [
					'type'			=> 'VARCHAR',
					'constraint'	=> 100,
					'null'			=> true],
			'content'	=> [
					'type'			=> 'VARCHAR',
					'constraint'	=> 200,
					'null'			=> true],
			'start'	=>[
					'type'			=> 'VARCHAR',
					'constraint'	=> 10,
					'null'			=> true],
			'end'	=>[
					'type'			=> 'VARCHAR',
					'constraint'	=> 10,
					'null'			=> true],
			'file'	=>[
					'type'			=> 'VARCHAR',
					'constraint'	=> 100,
					'null'			=> true],
			'file_name'	=>[
					'type'			=> 'VARCHAR',
					'constraint'	=> 100,
					'null'			=> true]
	]);
	$this->forge->addKey('id', TRUE);
	$this->forge->createTable('percol_post_page');
	}

	public function down()
	{
		$this->forge->dropTable('percol_post_page');
	}
}
