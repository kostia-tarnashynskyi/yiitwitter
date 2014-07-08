<?php

class m140708_055750_new_account_table extends CDbMigration
{
	/*
	public function up()
	{
	}

	public function down()
	{
		echo "m140708_055750_new_account_table does not support migration down.\n";
		return false;
	}

	*/
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable( 
			'accounts', 
			[
				'account_id'=>'int(20) UNSIGNED NOT NULL',
				'screen_name'=>'varchar(50) NOT NULL',
				'name'=>'varchar(50) NOT NULL',
				'password'=>'varchar(50) NOT NULL',
				'costumer_key'=>'varchar(50) NOT NULL',
				'costumer_secret'=>'varchar(50) NOT NULL',
				'access_token'=>'varchar(50) NOT NULL',
				'access_token_secret'=>'varchar(50) NOT NULL',
				'location'=>'varchar(255) DEFAULT NULL',
				'description'=>'varchar(255) DEFAULT NULL',
				'followers_count'=>'int(5) UNSIGNED DEFAULT 0',
				'friends_count'=>'int(5) UNSIGNED DEFAULT 0',
				'statuses_count'=>'int(5) UNSIGNED DEFAULT 0',
				'id_last_post'=>'varchar(50) DEFAULT NULL',
				'create_in_system'=>'timestamp DEFAULT CURRENT_TIMESTAMP',
				'config'=>'text DEFAULT NULL',
				'PRIMARY KEY (account_id)'
			],  
			'ENGINE=InnoDB DEFAULT CHARSET=utf8'
		);
	}

	public function safeDown()
	{
		// echo "m140708_055750_new_account_table does not support migration down.\n";
		// return false;
		
		$this->dropTable('accounts');
	}
	
}