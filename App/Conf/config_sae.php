<?php
return array(
	'DB_TYPE'=> 'mysql', 
	'DB_DEPLOY_TYPE'=> 1,
	'DB_RW_SEPARATE'=>true,
	'DB_HOST'=> SAE_MYSQL_HOST_M.','.SAE_MYSQL_HOST_S, 
	'DB_NAME'=> SAE_MYSQL_DB,       
	'DB_USER'=> SAE_MYSQL_USER,   
	'DB_PWD'=> SAE_MYSQL_PASS,        
	'DB_PORT'=> SAE_MYSQL_PORT,
	'TMPL_PARSE_STRING'=>array(
		'Public/upload'=>file_domain('public').'/upload',
	),
);
