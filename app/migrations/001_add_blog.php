<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_blog extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 10,
				'unsigned' => TRUE,
				'auto_increment' => TRUE

			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '10',
			),
			'sal' => array(
				'type' => 'INT',
				'constraint' => '10',			
				),
			'time'=>array(
				'type' => 'TIMESTAMP',
				'null' => TRUE,
				)

		));
		$this->dbforge->add_key('id', TRUE);
   		$this->dbforge->create_table('emp');
        

			$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 10,
				'unsigned' => TRUE,
				'auto_increment' => TRUE

			),
			'fname' => array(
				'type' => 'VARCHAR',
				'constraint' => '10',
			),
			'mname' => array(
				'type' => 'VARCHAR',
				'constraint' => '10',
			),
			'lname' => array(
				'type' => 'VARCHAR',
				'constraint' => '10',
			),

			'sal' => array(
				'type' => 'INT',
				'constraint' => 10,
			),
			'mobileno'=>array(
				'type' => 'INT',
				'constraint' => 10,
				),
			'createAt'=>array(
				'type' => 'TIMESTAMP',
				'null' => TRUE,
				),
			'updateAt'=>array(
				'type' => 'TIMESTAMP',
				'null' => TRUE,
				),
			'deleteAt'=>array(
				'type' => 'TIMESTAMP',
				'null' => TRUE,
				),

		));
		$this->dbforge->add_key('id', TRUE);
   		$this->dbforge->create_table('user');

	}

	public function down()
	{
		$this->dbforge->drop_table('emp');
		$this->dbforge->drop_table('user');
	}
}