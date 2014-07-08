<?php

class m140708_062338_new_used_table extends CDbMigration
{
	/*
	public function up()
	{
	}

	public function down()
	{
		echo "m140708_062338_new_used_table does not support migration down.\n";
		return false;
	}

	*/
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable( 
			'used', 
			[
				'id'=>'pk',
				'account_id'=>'int(20) UNSIGNED NOT NULL',
				'user_id'=>'int(20) UNSIGNED NOT NULL',
				'category'=>'varchar(50) NOT NULL',
				'theme'=>'varchar(50) NOT NULL',
				'used_date'=>'timestamp DEFAULT CURRENT_TIMESTAMP'
			],  
			'ENGINE=InnoDB DEFAULT CHARSET=utf8'
		);

		// внешний ключ связи с аккаунтом
		$this->addForeignKey(
			'fk_used_table_account_id', 
			// дочерняя таблица
			'used', 
			// дочернее поле
			'account_id',
			// родительская таблица 
			'accounts', 
			// родительское поле
			'account_id',
			// действие при удалении 
			'CASCADE', 
			// действие при обновлении
			'RESTRICT'
		);

		// внешний ключ связи с юзером
		$this->addForeignKey(
			'fk_used_table_user_id', 
			// дочерняя таблица
			'used', 
			// дочернее поле
			'user_id',
			// родительская таблица 
			'users', 
			// родительское поле
			'user_id',
			// действие при удалении 
			'CASCADE', 
			// действие при обновлении
			'RESTRICT'
		);
	}

	public function safeDown()
	{
		$this->dropTable('used');
	}
	
}