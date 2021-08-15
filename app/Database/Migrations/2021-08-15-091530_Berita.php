<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Berita extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 12,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'image'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'title'       => [
				'type'       => 'VARCHAR',
				'constraint' => 1200,
			],
			'content' => [
				'type' => 'TEXT',
				'null' => true,
			],
			'keyword'       => [
				'type'       => 'VARCHAR',
				'constraint' => 1200,
			],
			'description'       => [
				'type'       => 'VARCHAR',
				'constraint' => 1200,
			],
			'created_at'       => [
				'type' => 'datetime',
				'null' => true
			],
			'updated_at'       => [
				'type' => 'datetime',
				'null' => true
			],
			'deleted_at'       => [
				'type' => 'datetime',
				'null' => true
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('news');
	}

	public function down()
	{
		$this->forge->dropTable('news', true);
	}
}
