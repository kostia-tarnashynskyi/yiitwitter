<?php

class m140708_055814_new_user_table extends CDbMigration
{
	/*	
	public function up()
	{
	}

	public function down()
	{
		echo "m140708_055814_new_user_table does not support migration down.\n";
		return false;
	}

	*/

	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable( 
			'users', 
			[
				'user_id'=>'int(20) UNSIGNED NOT NULL',
				'screen_name'=>'varchar(50) NOT NULL',
				'name'=>'varchar(50) NOT NULL',
				'location'=>'varchar(255) DEFAULT NULL',
				'description'=>'varchar(255) DEFAULT NULL',
				'lang'=>'char(2) DEFAULT NULL',
				'followers_count'=>'int(5) UNSIGNED DEFAULT 0',
				'friends_count'=>'int(5) UNSIGNED DEFAULT 0',
				'statuses_count'=>'int(5) UNSIGNED DEFAULT 0',
				'last_public_date'=>'date DEFAULT NULL',
				'fail_try_friend'=>'int(2) UNSIGNED DEFAULT 0',
				'update_date'=>'timestamp DEFAULT CURRENT_TIMESTAMP',
				'PRIMARY KEY (user_id)'
			],  
			'ENGINE=InnoDB DEFAULT CHARSET=utf8'
		);
	}

	public function safeDown()
	{
		// echo "m140708_055814_new_user_table does not support migration down.\n";
		// return false;

		$this->dropTable('users');
	}
	
}