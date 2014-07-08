<?php

class m140708_063239_new_followers_table extends CDbMigration
{
	/*
	public function up()
	{
	}

	public function down()
	{
		echo "m140708_063239_new_followers_table does not support migration down.\n";
		return false;
	}
	*/
	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable( 
			'followers', 
			[
				'account_id'=>'int(20) UNSIGNED NOT NULL',
				'user_id'=>'int(20) UNSIGNED NOT NULL',
				'create_date'=>'timestamp DEFAULT CURRENT_TIMESTAMP',
				'greeting'=>'int(1) UNSIGNED DEFAULT 0',
				'PRIMARY KEY (account_id, user_id)',
			],  
			'ENGINE=InnoDB DEFAULT CHARSET=utf8'
		);
	}

	public function safeDown()
	{
		$this->dropTable('followers');
	}
	
}