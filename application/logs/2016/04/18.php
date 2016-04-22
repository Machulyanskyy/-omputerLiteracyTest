<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-18 02:42:16 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function mysql_fetch_array() ~ APPPATH/classes/Controller/Questions.php [ 21 ] in file:line
2016-04-18 02:42:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 02:43:57 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function mysql_fetch_array() ~ APPPATH/classes/Controller/Questions.php [ 21 ] in file:line
2016-04-18 02:43:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 02:59:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/Controller/Users.php [ 45 ] in file:line
2016-04-18 02:59:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 02:59:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/Controller/Users.php [ 45 ] in file:line
2016-04-18 02:59:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:25:15 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function open() on a non-object ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in file:line
2016-04-18 03:25:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:31:56 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00933: SQL command not properly ended ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 03:31:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #82, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT QA_ID, Q...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT QA_ID, Q...', 32)
#4 /srv/www/ittest/application/classes/Controller/Questions.php(11): Base_DB_Oracle_Connection_Standard->query('SELECT QA_ID, Q...')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-18 03:32:01 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00933: SQL command not properly ended ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 03:32:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #82, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT QA_ID, Q...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT QA_ID, Q...', 32)
#4 /srv/www/ittest/application/classes/Controller/Questions.php(11): Base_DB_Oracle_Connection_Standard->query('SELECT QA_ID, Q...')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-18 03:33:32 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function query() on a non-object ~ APPPATH/classes/Controller/Dashboard.php [ 10 ] in file:line
2016-04-18 03:33:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:35:13 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00924: missing BY keyword ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 03:35:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #82, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT QA_ID FR...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT QA_ID FR...', 32)
#4 /srv/www/ittest/application/classes/Controller/Questions.php(11): Base_DB_Oracle_Connection_Standard->query('SELECT QA_ID FR...')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-18 03:40:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Users::get_all() ~ APPPATH/classes/Controller/Users.php [ 8 ] in file:line
2016-04-18 03:40:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:41:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Users::get_all() ~ APPPATH/classes/Controller/Users.php [ 9 ] in file:line
2016-04-18 03:41:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:41:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Users' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-18 03:41:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:42:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Autorisation' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-18 03:42:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:42:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Autorisation' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-18 03:42:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:43:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Autorisation' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-18 03:43:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:44:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Autorisation' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-18 03:44:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:44:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Autorisation' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-18 03:44:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:45:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Autorisation' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-18 03:45:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:45:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Autorisation' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-18 03:45:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:47:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Autorisation' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-18 03:47:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:49:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Common' not found ~ APPPATH/classes/Controller/Users.php [ 4 ] in file:line
2016-04-18 03:49:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:50:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Common' not found ~ APPPATH/classes/Controller/Users.php [ 4 ] in file:line
2016-04-18 03:50:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:51:28 --- EMERGENCY: View_Exception [ 0 ]: The requested view /pages/show could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-18 03:51:28 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('/pages/show')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('/pages/show', NULL)
#2 /srv/www/ittest/application/classes/Controller/Users.php(10): Kohana_View::factory('/pages/show')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-18 03:52:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH/classes/Controller/Users.php [ 11 ] in file:line
2016-04-18 03:52:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:52:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH/classes/Controller/Users.php [ 10 ] in file:line
2016-04-18 03:52:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:52:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Autorisation' not found ~ APPPATH/classes/Controller/Users.php [ 10 ] in file:line
2016-04-18 03:52:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:52:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Autorisation' not found ~ APPPATH/classes/Controller/Users.php [ 10 ] in file:line
2016-04-18 03:52:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:53:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Autorisation' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-18 03:53:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:53:42 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 03:53:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #89, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'INSERT INTO QUE...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'INSERT INTO QUE...', 32)
#4 /srv/www/ittest/application/classes/Model/Dashboard.php(26): Base_DB_Oracle_Connection_Standard->query('INSERT INTO QUE...')
#5 /srv/www/ittest/application/classes/Controller/Dashboard.php(16): Model_Dashboard->save_question('21')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 03:54:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Autorisation' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-18 03:54:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:55:15 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00933: SQL command not properly ended ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 03:55:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #82, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT QA_ID FR...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT QA_ID FR...', 32)
#4 /srv/www/ittest/application/classes/Controller/Questions.php(11): Base_DB_Oracle_Connection_Standard->query('SELECT QA_ID FR...')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-18 03:56:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Autorisation' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-18 03:56:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:56:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Autorisation' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-18 03:56:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:56:27 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 03:56:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #89, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'INSERT INTO QUE...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'INSERT INTO QUE...', 32)
#4 /srv/www/ittest/application/classes/Model/Dashboard.php(26): Base_DB_Oracle_Connection_Standard->query('INSERT INTO QUE...')
#5 /srv/www/ittest/application/classes/Controller/Dashboard.php(16): Model_Dashboard->save_question('21')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 03:58:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Autorisation' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-18 03:58:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:58:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Autorisation' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-18 03:58:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 03:59:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Autorisation' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-18 03:59:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 04:00:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Autorisation' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-18 04:00:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 04:01:31 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01788: CONNECT BY clause required in this query block ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 04:01:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #82, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT LEVEl FR...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT LEVEl FR...', 32)
#4 /srv/www/ittest/application/classes/Controller/Questions.php(12): Base_DB_Oracle_Connection_Standard->query('SELECT LEVEl FR...')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-18 04:02:19 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00924: missing BY keyword ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 04:02:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #82, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM Q...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM Q...', 32)
#4 /srv/www/ittest/application/classes/Controller/Questions.php(12): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM Q...')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-18 04:02:38 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00924: missing BY keyword ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 04:02:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #82, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM Q...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM Q...', 32)
#4 /srv/www/ittest/application/classes/Controller/Questions.php(12): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM Q...')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-18 04:02:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Autorisation' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-18 04:02:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 04:02:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 13 ] in file:line
2016-04-18 04:02:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 04:03:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 15 ] in file:line
2016-04-18 04:03:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 04:03:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Dashboard::get_all() ~ APPPATH/classes/Controller/Users.php [ 10 ] in file:line
2016-04-18 04:03:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 04:03:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 15 ] in file:line
2016-04-18 04:03:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 04:04:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 15 ] in file:line
2016-04-18 04:04:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 04:04:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Users' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-18 04:04:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 04:04:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Users' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-18 04:04:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 04:05:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Users' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-18 04:05:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 04:06:01 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Base_DB_ResultSet::__construct(), called in /srv/www/ittest/application/classes/Model/Autorisation.php on line 11 and defined ~ MODPATH/leap/classes/Base/DB/ResultSet.php [ 71 ] in /srv/www/ittest/modules/leap/classes/Base/DB/ResultSet.php:71
2016-04-18 04:06:01 --- DEBUG: #0 /srv/www/ittest/modules/leap/classes/Base/DB/ResultSet.php(71): Kohana_Core::error_handler(2, 'Missing argumen...', '/srv/www/ittest...', 71, Array)
#1 /srv/www/ittest/application/classes/Model/Autorisation.php(11): Base_DB_ResultSet->__construct()
#2 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->get_all()
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/modules/leap/classes/Base/DB/ResultSet.php:71
2016-04-18 04:06:42 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00936: missing expression ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 04:06:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #82, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM Q...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM Q...', 32)
#4 /srv/www/ittest/application/classes/Controller/Questions.php(12): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM Q...')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-18 04:06:44 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 04:06:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #89, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'INSERT INTO QUE...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'INSERT INTO QUE...', 32)
#4 /srv/www/ittest/application/classes/Model/Dashboard.php(26): Base_DB_Oracle_Connection_Standard->query('INSERT INTO QUE...')
#5 /srv/www/ittest/application/classes/Controller/Dashboard.php(16): Model_Dashboard->save_question('21')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 04:07:30 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 04:07:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #89, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'INSERT INTO QUE...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'INSERT INTO QUE...', 32)
#4 /srv/www/ittest/application/classes/Model/Dashboard.php(26): Base_DB_Oracle_Connection_Standard->query('INSERT INTO QUE...')
#5 /srv/www/ittest/application/classes/Controller/Dashboard.php(16): Model_Dashboard->save_question('21')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 04:07:49 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 04:07:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #89, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'INSERT INTO QUE...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'INSERT INTO QUE...', 32)
#4 /srv/www/ittest/application/classes/Model/Dashboard.php(26): Base_DB_Oracle_Connection_Standard->query('INSERT INTO QUE...')
#5 /srv/www/ittest/application/classes/Controller/Dashboard.php(16): Model_Dashboard->save_question('12')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 04:09:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/Controller/Users.php [ 13 ] in file:line
2016-04-18 04:09:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 04:09:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/Controller/Users.php [ 10 ] in /srv/www/ittest/application/classes/Controller/Users.php:10
2016-04-18 04:09:14 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Users.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 10, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Users.php:10
2016-04-18 04:09:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/Controller/Users.php [ 11 ] in /srv/www/ittest/application/classes/Controller/Users.php:11
2016-04-18 04:09:30 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Users.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 11, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Users.php:11
2016-04-18 04:11:37 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00947: not enough values ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 04:11:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #89, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'INSERT INTO QUE...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'INSERT INTO QUE...', 32)
#4 /srv/www/ittest/application/classes/Model/Dashboard.php(29): Base_DB_Oracle_Connection_Standard->query('INSERT INTO QUE...')
#5 /srv/www/ittest/application/classes/Controller/Dashboard.php(16): Model_Dashboard->save_question('qwe')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 04:13:31 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00984: column not allowed here ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 04:13:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #89, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'INSERT INTO QUE...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'INSERT INTO QUE...', 32)
#4 /srv/www/ittest/application/classes/Model/Dashboard.php(29): Base_DB_Oracle_Connection_Standard->query('INSERT INTO QUE...')
#5 /srv/www/ittest/application/classes/Controller/Dashboard.php(16): Model_Dashboard->save_question('12')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 04:15:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Users.php [ 18 ] in file:line
2016-04-18 04:15:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 04:17:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Users.php [ 25 ] in file:line
2016-04-18 04:17:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 04:19:20 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00933: SQL command not properly ended ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 04:19:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #82, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM Q...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM Q...', 32)
#4 /srv/www/ittest/application/classes/Controller/Questions.php(12): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM Q...')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-18 04:19:42 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00936: missing expression ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 04:19:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #82, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM Q...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM Q...', 32)
#4 /srv/www/ittest/application/classes/Controller/Questions.php(12): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM Q...')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-18 04:19:50 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00936: missing expression ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 04:19:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #82, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM Q...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM Q...', 32)
#4 /srv/www/ittest/application/classes/Controller/Questions.php(12): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM Q...')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-18 04:27:24 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01400: cannot insert NULL into (&quot;KOM_0&quot;.&quot;QUESTANS&quot;.&quot;QA_ID&quot;) ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 143 ] in file:line
2016-04-18 04:27:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 143, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(143): oci_execute(Resource id #95, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/Insert/Proxy.php(95): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "QU...')
#3 /srv/www/ittest/application/classes/Model/Dashboard.php(34): Base_DB_SQL_Insert_Proxy->execute()
#4 /srv/www/ittest/application/classes/Controller/Dashboard.php(16): Model_Dashboard->save_question('qwe')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-18 04:28:14 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01400: cannot insert NULL into (&quot;KOM_0&quot;.&quot;QUESTANS&quot;.&quot;QA_ID&quot;) ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 143 ] in file:line
2016-04-18 04:28:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 143, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(143): oci_execute(Resource id #95, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/Insert/Proxy.php(95): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "QU...')
#3 /srv/www/ittest/application/classes/Model/Dashboard.php(34): Base_DB_SQL_Insert_Proxy->execute()
#4 /srv/www/ittest/application/classes/Controller/Dashboard.php(16): Model_Dashboard->save_question('qwe')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-18 04:28:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Leap_USER_QA' not found ~ MODPATH/leap/classes/Base/DB/ORM/Insert/Proxy.php [ 72 ] in file:line
2016-04-18 04:28:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 04:30:32 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01400: cannot insert NULL into (&quot;KOM_0&quot;.&quot;USER_QA&quot;.&quot;U_ID&quot;) ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 143 ] in file:line
2016-04-18 04:30:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 143, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(143): oci_execute(Resource id #104, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/Insert/Proxy.php(95): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "US...')
#3 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_SQL_Insert_Proxy->execute()
#4 /srv/www/ittest/application/classes/Controller/Users.php(12): Model_Autorisation->create_user()
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-18 04:30:35 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01400: cannot insert NULL into (&quot;KOM_0&quot;.&quot;QUESTANS&quot;.&quot;QA_ID&quot;) ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 143 ] in file:line
2016-04-18 04:30:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 143, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(143): oci_execute(Resource id #95, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/Insert/Proxy.php(95): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "QU...')
#3 /srv/www/ittest/application/classes/Model/Dashboard.php(34): Base_DB_SQL_Insert_Proxy->execute()
#4 /srv/www/ittest/application/classes/Controller/Dashboard.php(16): Model_Dashboard->save_question('qwe')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-18 04:31:33 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01400: cannot insert NULL into (&quot;KOM_0&quot;.&quot;USER_QA&quot;.&quot;U_ID&quot;) ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 143 ] in file:line
2016-04-18 04:31:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 143, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(143): oci_execute(Resource id #104, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/Insert/Proxy.php(95): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "US...')
#3 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_SQL_Insert_Proxy->execute()
#4 /srv/www/ittest/application/classes/Controller/Users.php(12): Model_Autorisation->create_user()
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-18 04:31:38 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01400: cannot insert NULL into (&quot;KOM_0&quot;.&quot;USER_QA&quot;.&quot;U_ID&quot;) ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 143 ] in file:line
2016-04-18 04:31:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 143, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(143): oci_execute(Resource id #104, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/Insert/Proxy.php(95): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "US...')
#3 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_SQL_Insert_Proxy->execute()
#4 /srv/www/ittest/application/classes/Controller/Users.php(12): Model_Autorisation->create_user()
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-18 04:31:56 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01400: cannot insert NULL into (&quot;KOM_0&quot;.&quot;USER_QA&quot;.&quot;U_ID&quot;) ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 143 ] in file:line
2016-04-18 04:31:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 143, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(143): oci_execute(Resource id #104, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/Insert/Proxy.php(95): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "US...')
#3 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_SQL_Insert_Proxy->execute()
#4 /srv/www/ittest/application/classes/Controller/Users.php(12): Model_Autorisation->create_user()
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-18 04:32:03 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01400: cannot insert NULL into (&quot;KOM_0&quot;.&quot;USER_QA&quot;.&quot;U_ID&quot;) ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 143 ] in file:line
2016-04-18 04:32:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 143, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(143): oci_execute(Resource id #104, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/Insert/Proxy.php(95): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "US...')
#3 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_SQL_Insert_Proxy->execute()
#4 /srv/www/ittest/application/classes/Controller/Users.php(12): Model_Autorisation->create_user()
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-18 04:33:59 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_Autorisation::create_user(), called in /srv/www/ittest/application/classes/Controller/Users.php on line 12 and defined ~ APPPATH/classes/Model/Autorisation.php [ 12 ] in /srv/www/ittest/application/classes/Model/Autorisation.php:12
2016-04-18 04:33:59 --- DEBUG: #0 /srv/www/ittest/application/classes/Model/Autorisation.php(12): Kohana_Core::error_handler(2, 'Missing argumen...', '/srv/www/ittest...', 12, Array)
#1 /srv/www/ittest/application/classes/Controller/Users.php(12): Model_Autorisation->create_user()
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/ittest/application/classes/Model/Autorisation.php:12
2016-04-18 04:34:08 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_Autorisation::create_user(), called in /srv/www/ittest/application/classes/Controller/Users.php on line 12 and defined ~ APPPATH/classes/Model/Autorisation.php [ 12 ] in /srv/www/ittest/application/classes/Model/Autorisation.php:12
2016-04-18 04:34:08 --- DEBUG: #0 /srv/www/ittest/application/classes/Model/Autorisation.php(12): Kohana_Core::error_handler(2, 'Missing argumen...', '/srv/www/ittest...', 12, Array)
#1 /srv/www/ittest/application/classes/Controller/Users.php(12): Model_Autorisation->create_user()
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/ittest/application/classes/Model/Autorisation.php:12
2016-04-18 04:34:31 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01400: cannot insert NULL into (&quot;KOM_0&quot;.&quot;USER_QA&quot;.&quot;U_ID&quot;) ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 143 ] in file:line
2016-04-18 04:34:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 143, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(143): oci_execute(Resource id #104, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/Insert/Proxy.php(95): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "US...')
#3 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_SQL_Insert_Proxy->execute()
#4 /srv/www/ittest/application/classes/Controller/Users.php(12): Model_Autorisation->create_user('sk@bk.ua', '123')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-18 04:53:35 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Model_Dashboard::save_question(), called in /srv/www/ittest/application/classes/Controller/Dashboard.php on line 16 and defined ~ APPPATH/classes/Model/Dashboard.php [ 15 ] in /srv/www/ittest/application/classes/Model/Dashboard.php:15
2016-04-18 04:53:35 --- DEBUG: #0 /srv/www/ittest/application/classes/Model/Dashboard.php(15): Kohana_Core::error_handler(2, 'Missing argumen...', '/srv/www/ittest...', 15, Array)
#1 /srv/www/ittest/application/classes/Controller/Dashboard.php(16): Model_Dashboard->save_question('')
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/ittest/application/classes/Model/Dashboard.php:15
2016-04-18 04:53:40 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Model_Dashboard::save_question(), called in /srv/www/ittest/application/classes/Controller/Dashboard.php on line 16 and defined ~ APPPATH/classes/Model/Dashboard.php [ 15 ] in /srv/www/ittest/application/classes/Model/Dashboard.php:15
2016-04-18 04:53:40 --- DEBUG: #0 /srv/www/ittest/application/classes/Model/Dashboard.php(15): Kohana_Core::error_handler(2, 'Missing argumen...', '/srv/www/ittest...', 15, Array)
#1 /srv/www/ittest/application/classes/Controller/Dashboard.php(16): Model_Dashboard->save_question('')
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/ittest/application/classes/Model/Dashboard.php:15
2016-04-18 05:28:54 --- EMERGENCY: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/Controller/Users.php [ 11 ] in file:line
2016-04-18 05:28:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 05:34:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Autorisation::get_all() ~ APPPATH/classes/Controller/Users.php [ 10 ] in file:line
2016-04-18 05:34:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 05:34:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Autorisation::get_all() ~ APPPATH/classes/Controller/Users.php [ 10 ] in file:line
2016-04-18 05:34:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 05:35:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/classes/Controller/Dashboard.php [ 20 ] in file:line
2016-04-18 05:35:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 05:36:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: answer ~ APPPATH/classes/Controller/Dashboard.php [ 18 ] in /srv/www/ittest/application/classes/Controller/Dashboard.php:18
2016-04-18 05:36:06 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Dashboard.php(18): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/ittest...', 18, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Dashboard.php:18
2016-04-18 05:41:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Autorisation::get_login() ~ APPPATH/classes/Controller/Users.php [ 10 ] in file:line
2016-04-18 05:41:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 05:41:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: article ~ APPPATH/classes/Controller/Users.php [ 10 ] in /srv/www/ittest/application/classes/Controller/Users.php:10
2016-04-18 05:41:17 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Users.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 10, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Users.php:10
2016-04-18 05:43:58 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant answer - assumed 'answer' ~ APPPATH/classes/Controller/Dashboard.php [ 21 ] in /srv/www/ittest/application/classes/Controller/Dashboard.php:21
2016-04-18 05:43:58 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Dashboard.php(21): Kohana_Core::error_handler(8, 'Use of undefine...', '/srv/www/ittest...', 21, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Dashboard.php:21
2016-04-18 05:51:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 21100 ~ APPPATH/classes/Controller/Dashboard.php [ 21 ] in /srv/www/ittest/application/classes/Controller/Dashboard.php:21
2016-04-18 05:51:08 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Dashboard.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', '/srv/www/ittest...', 21, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Dashboard.php:21
2016-04-18 05:54:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_GLOBAL, expecting T_FUNCTION ~ APPPATH/classes/Controller/Questions.php [ 5 ] in file:line
2016-04-18 05:54:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 05:55:41 --- EMERGENCY: ErrorException [ 2 ]: array_search() expects parameter 2 to be array, object given ~ APPPATH/classes/Controller/Users.php [ 14 ] in file:line
2016-04-18 05:55:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_search() ...', '/srv/www/ittest...', 14, Array)
#1 /srv/www/ittest/application/classes/Controller/Users.php(14): array_search('skripalik@bk.ru', Object(DB_ResultSet))
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-18 05:55:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 21100 ~ APPPATH/classes/Controller/Dashboard.php [ 21 ] in /srv/www/ittest/application/classes/Controller/Dashboard.php:21
2016-04-18 05:55:51 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Dashboard.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', '/srv/www/ittest...', 21, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Dashboard.php:21
2016-04-18 05:56:01 --- EMERGENCY: ErrorException [ 2 ]: array_search() expects parameter 2 to be array, object given ~ APPPATH/classes/Controller/Users.php [ 14 ] in file:line
2016-04-18 05:56:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_search() ...', '/srv/www/ittest...', 14, Array)
#1 /srv/www/ittest/application/classes/Controller/Users.php(14): array_search('skripalik@bk.ru', Object(DB_ResultSet))
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-18 05:57:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_FOREACH ~ APPPATH/classes/Controller/Dashboard.php [ 19 ] in file:line
2016-04-18 05:57:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 05:57:30 --- EMERGENCY: ErrorException [ 2 ]: array_search() expects parameter 2 to be array, object given ~ APPPATH/classes/Controller/Users.php [ 15 ] in file:line
2016-04-18 05:57:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_search() ...', '/srv/www/ittest...', 15, Array)
#1 /srv/www/ittest/application/classes/Controller/Users.php(15): array_search('skripalik@bk.ru', Object(DB_ResultSet))
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-18 05:57:42 --- EMERGENCY: ErrorException [ 2 ]: array_search() expects parameter 2 to be array, object given ~ APPPATH/classes/Controller/Users.php [ 15 ] in file:line
2016-04-18 05:57:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_search() ...', '/srv/www/ittest...', 15, Array)
#1 /srv/www/ittest/application/classes/Controller/Users.php(15): array_search('skripalik@bk.ru', Object(DB_ResultSet))
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-18 05:57:43 --- EMERGENCY: ErrorException [ 2 ]: array_search() expects parameter 2 to be array, object given ~ APPPATH/classes/Controller/Users.php [ 15 ] in file:line
2016-04-18 05:57:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_search() ...', '/srv/www/ittest...', 15, Array)
#1 /srv/www/ittest/application/classes/Controller/Users.php(15): array_search('skripalik@bk.ru', Object(DB_ResultSet))
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-18 05:57:44 --- EMERGENCY: ErrorException [ 2 ]: array_search() expects parameter 2 to be array, object given ~ APPPATH/classes/Controller/Users.php [ 15 ] in file:line
2016-04-18 05:57:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_search() ...', '/srv/www/ittest...', 15, Array)
#1 /srv/www/ittest/application/classes/Controller/Users.php(15): array_search('skripalik@bk.ru', Object(DB_ResultSet))
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-18 06:01:08 --- EMERGENCY: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/Controller/Users.php [ 16 ] in file:line
2016-04-18 06:01:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 06:01:14 --- EMERGENCY: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/Controller/Users.php [ 16 ] in file:line
2016-04-18 06:01:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 06:08:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/Controller/Users.php [ 15 ] in file:line
2016-04-18 06:08:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 06:09:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Users.php [ 13 ] in /srv/www/ittest/application/classes/Controller/Users.php:13
2016-04-18 06:09:23 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Users.php(13): Kohana_Core::error_handler(8, 'Undefined offse...', '/srv/www/ittest...', 13, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Users.php:13
2016-04-18 06:09:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: U_EMAIL ~ APPPATH/classes/Controller/Users.php [ 13 ] in /srv/www/ittest/application/classes/Controller/Users.php:13
2016-04-18 06:09:53 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Users.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/ittest...', 13, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Users.php:13
2016-04-18 06:09:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: U_EMAIL ~ APPPATH/classes/Controller/Users.php [ 13 ] in /srv/www/ittest/application/classes/Controller/Users.php:13
2016-04-18 06:09:57 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Users.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/ittest...', 13, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Users.php:13
2016-04-18 06:10:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: U_EMAIL ~ APPPATH/classes/Controller/Users.php [ 13 ] in /srv/www/ittest/application/classes/Controller/Users.php:13
2016-04-18 06:10:50 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Users.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/ittest...', 13, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Users.php:13
2016-04-18 06:11:15 --- EMERGENCY: ErrorException [ 2 ]: array_search() expects parameter 2 to be array, string given ~ APPPATH/classes/Controller/Users.php [ 17 ] in file:line
2016-04-18 06:11:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_search() ...', '/srv/www/ittest...', 17, Array)
#1 /srv/www/ittest/application/classes/Controller/Users.php(17): array_search('skripalik@bk.ru', 'skripalik@bk.ru')
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-18 06:11:18 --- EMERGENCY: ErrorException [ 2 ]: array_search() expects parameter 2 to be array, string given ~ APPPATH/classes/Controller/Users.php [ 17 ] in file:line
2016-04-18 06:11:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_search() ...', '/srv/www/ittest...', 17, Array)
#1 /srv/www/ittest/application/classes/Controller/Users.php(17): array_search('skripalik@bk.ru', 'skripalik@bk.ru')
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-18 06:12:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Users.php [ 13 ] in /srv/www/ittest/application/classes/Controller/Users.php:13
2016-04-18 06:12:06 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Users.php(13): Kohana_Core::error_handler(8, 'Undefined offse...', '/srv/www/ittest...', 13, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Users.php:13
2016-04-18 06:13:51 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 06:13:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT `U_EMAIL...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT `U_EMAIL...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(9): Base_DB_Oracle_Connection_Standard->query('SELECT `U_EMAIL...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->get_email()
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 06:13:56 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 06:13:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT `U_EMAIL...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT `U_EMAIL...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(9): Base_DB_Oracle_Connection_Standard->query('SELECT `U_EMAIL...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->get_email()
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 06:15:04 --- EMERGENCY: ErrorException [ 4096 ]: Object of class DB_ResultSet could not be converted to string ~ APPPATH/classes/Controller/Users.php [ 11 ] in /srv/www/ittest/application/classes/Controller/Users.php:11
2016-04-18 06:15:04 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Users.php(11): Kohana_Core::error_handler(4096, 'Object of class...', '/srv/www/ittest...', 11, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Users.php:11
2016-04-18 06:15:14 --- EMERGENCY: ErrorException [ 4096 ]: Object of class DB_ResultSet could not be converted to string ~ APPPATH/classes/Controller/Users.php [ 11 ] in /srv/www/ittest/application/classes/Controller/Users.php:11
2016-04-18 06:15:14 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Users.php(11): Kohana_Core::error_handler(4096, 'Object of class...', '/srv/www/ittest...', 11, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Users.php:11
2016-04-18 06:15:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/Controller/Users.php [ 11 ] in file:line
2016-04-18 06:15:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 06:15:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH/classes/Controller/Users.php [ 15 ] in /srv/www/ittest/application/classes/Controller/Users.php:15
2016-04-18 06:15:30 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Users.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 15, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Users.php:15
2016-04-18 06:18:36 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in /srv/www/ittest/application/classes/Controller/Dashboard.php on line 10 and defined ~ SYSPATH/classes/Kohana/View.php [ 28 ] in /srv/www/ittest/system/classes/Kohana/View.php:28
2016-04-18 06:18:36 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/srv/www/ittest...', 28, Array)
#1 /srv/www/ittest/application/classes/Controller/Dashboard.php(10): Kohana_View::factory('dashboard', Object(DB_ResultSet))
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/ittest/system/classes/Kohana/View.php:28
2016-04-18 06:18:46 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in /srv/www/ittest/application/classes/Controller/Dashboard.php on line 10 and defined ~ SYSPATH/classes/Kohana/View.php [ 28 ] in /srv/www/ittest/system/classes/Kohana/View.php:28
2016-04-18 06:18:46 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/srv/www/ittest...', 28, Array)
#1 /srv/www/ittest/application/classes/Controller/Dashboard.php(10): Kohana_View::factory('dashboard', Object(DB_ResultSet))
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/ittest/system/classes/Kohana/View.php:28
2016-04-18 06:21:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '[', expecting '(' ~ APPPATH/classes/Controller/Users.php [ 16 ] in file:line
2016-04-18 06:21:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 06:22:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '[', expecting '(' ~ APPPATH/classes/Controller/Users.php [ 16 ] in file:line
2016-04-18 06:22:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 06:26:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting '(' ~ APPPATH/classes/Controller/Dashboard.php [ 10 ] in file:line
2016-04-18 06:26:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 06:26:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: qa_text ~ APPPATH/views/dashboard.php [ 23 ] in /srv/www/ittest/application/views/dashboard.php:23
2016-04-18 06:26:21 --- DEBUG: #0 /srv/www/ittest/application/views/dashboard.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 23, Array)
#1 /srv/www/ittest/system/classes/Kohana/View.php(62): include('/srv/www/ittest...')
#2 /srv/www/ittest/system/classes/Kohana/View.php(359): Kohana_View::capture('/srv/www/ittest...', Array)
#3 /srv/www/ittest/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /srv/www/ittest/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /srv/www/ittest/application/classes/Controller/Dashboard.php(10): Kohana_Response->body(Object(View))
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in /srv/www/ittest/application/views/dashboard.php:23
2016-04-18 06:26:31 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function mysql_fetch_array() ~ APPPATH/classes/Controller/Questions.php [ 16 ] in file:line
2016-04-18 06:26:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 06:26:35 --- EMERGENCY: ErrorException [ 2 ]: array_search() expects parameter 2 to be array, string given ~ APPPATH/classes/Controller/Users.php [ 16 ] in file:line
2016-04-18 06:26:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_search() ...', '/srv/www/ittest...', 16, Array)
#1 /srv/www/ittest/application/classes/Controller/Users.php(16): array_search('Skripalik@bk.ru', 'skripalik@bk.ru')
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-18 06:26:47 --- EMERGENCY: ErrorException [ 2 ]: array_search() expects parameter 2 to be array, null given ~ APPPATH/classes/Controller/Users.php [ 16 ] in file:line
2016-04-18 06:26:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_search() ...', '/srv/www/ittest...', 16, Array)
#1 /srv/www/ittest/application/classes/Controller/Users.php(16): array_search('Skripalik@bk.ru', NULL)
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-18 06:27:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: qa_text ~ APPPATH/views/dashboard.php [ 23 ] in /srv/www/ittest/application/views/dashboard.php:23
2016-04-18 06:27:04 --- DEBUG: #0 /srv/www/ittest/application/views/dashboard.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 23, Array)
#1 /srv/www/ittest/system/classes/Kohana/View.php(62): include('/srv/www/ittest...')
#2 /srv/www/ittest/system/classes/Kohana/View.php(359): Kohana_View::capture('/srv/www/ittest...', Array)
#3 /srv/www/ittest/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /srv/www/ittest/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /srv/www/ittest/application/classes/Controller/Dashboard.php(10): Kohana_Response->body(Object(View))
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in /srv/www/ittest/application/views/dashboard.php:23
2016-04-18 06:27:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function mysql_fetch_array() ~ APPPATH/classes/Controller/Questions.php [ 16 ] in file:line
2016-04-18 06:27:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 06:27:16 --- EMERGENCY: ErrorException [ 2 ]: array_search() expects parameter 2 to be array, string given ~ APPPATH/classes/Controller/Users.php [ 16 ] in file:line
2016-04-18 06:27:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_search() ...', '/srv/www/ittest...', 16, Array)
#1 /srv/www/ittest/application/classes/Controller/Users.php(16): array_search('Skripalik@bk.ru', 'sk@bk.ua')
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-18 06:27:19 --- EMERGENCY: ErrorException [ 2 ]: array_search() expects parameter 2 to be array, string given ~ APPPATH/classes/Controller/Users.php [ 16 ] in file:line
2016-04-18 06:27:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_search() ...', '/srv/www/ittest...', 16, Array)
#1 /srv/www/ittest/application/classes/Controller/Users.php(16): array_search('Skripalik@bk.ru', 'sk@bk.ua')
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-18 06:27:20 --- EMERGENCY: ErrorException [ 2 ]: array_search() expects parameter 2 to be array, string given ~ APPPATH/classes/Controller/Users.php [ 16 ] in file:line
2016-04-18 06:27:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_search() ...', '/srv/www/ittest...', 16, Array)
#1 /srv/www/ittest/application/classes/Controller/Users.php(16): array_search('Skripalik@bk.ru', 'sk@bk.ua')
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-18 06:27:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: QA_TEXT ~ APPPATH/views/dashboard.php [ 23 ] in /srv/www/ittest/application/views/dashboard.php:23
2016-04-18 06:27:24 --- DEBUG: #0 /srv/www/ittest/application/views/dashboard.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 23, Array)
#1 /srv/www/ittest/system/classes/Kohana/View.php(62): include('/srv/www/ittest...')
#2 /srv/www/ittest/system/classes/Kohana/View.php(359): Kohana_View::capture('/srv/www/ittest...', Array)
#3 /srv/www/ittest/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /srv/www/ittest/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /srv/www/ittest/application/classes/Controller/Dashboard.php(10): Kohana_Response->body(Object(View))
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in /srv/www/ittest/application/views/dashboard.php:23
2016-04-18 06:29:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function mysql_fetch_array() ~ APPPATH/classes/Controller/Questions.php [ 16 ] in file:line
2016-04-18 06:29:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 06:30:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/dashboard.php [ 23 ] in /srv/www/ittest/application/views/dashboard.php:23
2016-04-18 06:30:04 --- DEBUG: #0 /srv/www/ittest/application/views/dashboard.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 23, Array)
#1 /srv/www/ittest/system/classes/Kohana/View.php(62): include('/srv/www/ittest...')
#2 /srv/www/ittest/system/classes/Kohana/View.php(359): Kohana_View::capture('/srv/www/ittest...', Array)
#3 /srv/www/ittest/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /srv/www/ittest/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /srv/www/ittest/application/classes/Controller/Dashboard.php(10): Kohana_Response->body(Object(View))
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in /srv/www/ittest/application/views/dashboard.php:23
2016-04-18 06:30:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/dashboard.php [ 23 ] in /srv/www/ittest/application/views/dashboard.php:23
2016-04-18 06:30:10 --- DEBUG: #0 /srv/www/ittest/application/views/dashboard.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 23, Array)
#1 /srv/www/ittest/system/classes/Kohana/View.php(62): include('/srv/www/ittest...')
#2 /srv/www/ittest/system/classes/Kohana/View.php(359): Kohana_View::capture('/srv/www/ittest...', Array)
#3 /srv/www/ittest/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /srv/www/ittest/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /srv/www/ittest/application/classes/Controller/Dashboard.php(10): Kohana_Response->body(Object(View))
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in /srv/www/ittest/application/views/dashboard.php:23
2016-04-18 06:30:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: output ~ APPPATH/classes/Controller/Questions.php [ 18 ] in /srv/www/ittest/application/classes/Controller/Questions.php:18
2016-04-18 06:30:11 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Questions.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 18, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Questions.php:18
2016-04-18 06:32:02 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH/classes/Controller/Users.php [ 19 ] in file:line
2016-04-18 06:32:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 06:32:28 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH/classes/Controller/Users.php [ 22 ] in file:line
2016-04-18 06:32:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 06:32:36 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH/classes/Controller/Users.php [ 19 ] in file:line
2016-04-18 06:32:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 06:33:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method DB_ResultSet::restore() ~ APPPATH/classes/Controller/Dashboard.php [ 9 ] in file:line
2016-04-18 06:33:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 06:33:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method DB_ResultSet::execute() ~ APPPATH/classes/Controller/Dashboard.php [ 9 ] in file:line
2016-04-18 06:33:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 06:34:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Users.php [ 19 ] in file:line
2016-04-18 06:34:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 06:35:16 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in /srv/www/ittest/application/classes/Controller/Dashboard.php on line 10 and defined ~ SYSPATH/classes/Kohana/View.php [ 28 ] in /srv/www/ittest/system/classes/Kohana/View.php:28
2016-04-18 06:35:16 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/srv/www/ittest...', 28, Array)
#1 /srv/www/ittest/application/classes/Controller/Dashboard.php(10): Kohana_View::factory('dashboard', Object(DB_ResultSet))
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/ittest/system/classes/Kohana/View.php:28
2016-04-18 06:38:20 --- EMERGENCY: ErrorException [ 2 ]: array_search() expects parameter 2 to be array, string given ~ APPPATH/classes/Controller/Users.php [ 19 ] in file:line
2016-04-18 06:38:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_search() ...', '/srv/www/ittest...', 19, Array)
#1 /srv/www/ittest/application/classes/Controller/Users.php(19): array_search('sk@bk.ru', 'sk@bk.ua')
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-18 06:38:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/dashboard.php [ 23 ] in /srv/www/ittest/application/views/dashboard.php:23
2016-04-18 06:38:49 --- DEBUG: #0 /srv/www/ittest/application/views/dashboard.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 23, Array)
#1 /srv/www/ittest/system/classes/Kohana/View.php(62): include('/srv/www/ittest...')
#2 /srv/www/ittest/system/classes/Kohana/View.php(359): Kohana_View::capture('/srv/www/ittest...', Array)
#3 /srv/www/ittest/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /srv/www/ittest/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /srv/www/ittest/application/classes/Controller/Dashboard.php(14): Kohana_Response->body(Object(View))
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in /srv/www/ittest/application/views/dashboard.php:23
2016-04-18 06:39:32 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function mysql_fetch_array() ~ APPPATH/classes/Controller/Questions.php [ 13 ] in file:line
2016-04-18 06:39:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 06:40:09 --- EMERGENCY: ErrorException [ 2 ]: unserialize() expects parameter 1 to be string, object given ~ APPPATH/classes/Controller/Dashboard.php [ 15 ] in file:line
2016-04-18 06:40:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unserialize() e...', '/srv/www/ittest...', 15, Array)
#1 /srv/www/ittest/application/classes/Controller/Dashboard.php(15): unserialize(Object(DB_ResultSet))
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-18 06:40:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/Controller/Users.php [ 16 ] in file:line
2016-04-18 06:40:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 06:41:05 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant key - assumed 'key' ~ APPPATH/classes/Controller/Users.php [ 19 ] in /srv/www/ittest/application/classes/Controller/Users.php:19
2016-04-18 06:41:05 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Users.php(19): Kohana_Core::error_handler(8, 'Use of undefine...', '/srv/www/ittest...', 19, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Users.php:19
2016-04-18 06:41:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ']' ~ APPPATH/classes/Controller/Dashboard.php [ 15 ] in file:line
2016-04-18 06:41:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 06:42:09 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant records - assumed 'records' ~ APPPATH/classes/Controller/Dashboard.php [ 15 ] in /srv/www/ittest/application/classes/Controller/Dashboard.php:15
2016-04-18 06:42:09 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Dashboard.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/srv/www/ittest...', 15, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Dashboard.php:15
2016-04-18 06:44:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function mysql_fetch_array() ~ APPPATH/classes/Controller/Questions.php [ 13 ] in file:line
2016-04-18 06:44:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 06:46:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_LNUMBER, expecting T_VARIABLE or '$' ~ APPPATH/views/dashboard.php [ 23 ] in file:line
2016-04-18 06:46:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 06:47:06 --- EMERGENCY: ErrorException [ 2 ]: array_search() expects parameter 2 to be array, string given ~ APPPATH/classes/Controller/Users.php [ 12 ] in file:line
2016-04-18 06:47:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_search() ...', '/srv/www/ittest...', 12, Array)
#1 /srv/www/ittest/application/classes/Controller/Users.php(12): array_search('sk@bk.ru', 'sk@bk.ua')
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-18 06:55:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/dashboard.php [ 23 ] in /srv/www/ittest/application/views/dashboard.php:23
2016-04-18 06:55:22 --- DEBUG: #0 /srv/www/ittest/application/views/dashboard.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 23, Array)
#1 /srv/www/ittest/system/classes/Kohana/View.php(62): include('/srv/www/ittest...')
#2 /srv/www/ittest/system/classes/Kohana/View.php(359): Kohana_View::capture('/srv/www/ittest...', Array)
#3 /srv/www/ittest/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /srv/www/ittest/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /srv/www/ittest/application/classes/Controller/Dashboard.php(16): Kohana_Response->body(Object(View))
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in /srv/www/ittest/application/views/dashboard.php:23
2016-04-18 06:57:57 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function array_column() ~ APPPATH/classes/Controller/Questions.php [ 18 ] in file:line
2016-04-18 06:57:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:01:09 --- EMERGENCY: ErrorException [ 2 ]: array_pop() expects parameter 1 to be array, object given ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:01:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_pop() exp...', '/srv/www/ittest...', 17, Array)
#1 /srv/www/ittest/application/classes/Controller/Questions.php(17): array_pop(Object(DB_ResultSet))
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-18 07:03:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Model/Autorisation.php [ 21 ] in file:line
2016-04-18 07:03:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:03:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function array_column() ~ APPPATH/classes/Controller/Questions.php [ 18 ] in file:line
2016-04-18 07:03:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:06:35 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-04054: database link BK.RU does not exist ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:06:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:06:40 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-04054: database link BK.RU does not exist ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:06:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:08:56 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-04054: database link BK.RU does not exist ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:08:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:09:00 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-04054: database link BK.RU does not exist ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:09:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:09:15 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01722: invalid number ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:09:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:09:22 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01722: invalid number ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:09:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:10:09 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00904: &quot;123&quot;: invalid identifier ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:10:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:10:46 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00904: &quot;123&quot;: invalid identifier ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:10:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:10:52 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00904: &quot;123&quot;: invalid identifier ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:10:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:11:25 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01722: invalid number ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:11:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:11:28 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01722: invalid number ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:11:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:12:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function array_column() ~ APPPATH/classes/Controller/Questions.php [ 18 ] in file:line
2016-04-18 07:12:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:12:42 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01722: invalid number ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:12:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:13:16 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00904: &quot;123&quot;: invalid identifier ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:13:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:13:22 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00904: &quot;123&quot;: invalid identifier ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:13:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:13:36 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:13:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:13:55 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:13:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:14:07 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:14:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:14:08 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:14:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:15:19 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00904: &quot;egor1&quot;: invalid identifier ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:15:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:15:28 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00904: &quot;egor1&quot;: invalid identifier ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:15:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:17:33 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00904: &quot;Ivan&quot;: invalid identifier ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:17:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:17:39 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00904: &quot;Ivan&quot;: invalid identifier ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:17:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:17:59 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00904: &quot;Ivan&quot;: invalid identifier ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:17:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:18:04 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00904: &quot;Ivan&quot;: invalid identifier ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:18:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:18:19 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:18:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM `...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:18:31 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:18:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM `...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:18:31 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:18:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM `...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:19:47 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:19:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(22): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM `...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:20:10 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:20:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(22): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM `...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:20:10 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:20:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(22): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM `...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:20:11 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:20:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(22): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM `...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:20:11 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:20:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(22): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM `...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:21:33 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant i - assumed 'i' ~ APPPATH/classes/Controller/Questions.php [ 18 ] in /srv/www/ittest/application/classes/Controller/Questions.php:18
2016-04-18 07:21:33 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Questions.php(18): Kohana_Core::error_handler(8, 'Use of undefine...', '/srv/www/ittest...', 18, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Questions.php:18
2016-04-18 07:23:23 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00904: &quot;123&quot;: invalid identifier ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:23:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'select * from U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'select * from U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('select * from U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:23:29 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00904: &quot;123&quot;: invalid identifier ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-18 07:23:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #87, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'select * from U...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'select * from U...', 32)
#4 /srv/www/ittest/application/classes/Model/Autorisation.php(21): Base_DB_Oracle_Connection_Standard->query('select * from U...')
#5 /srv/www/ittest/application/classes/Controller/Users.php(10): Model_Autorisation->search('sk@bk.ru', '123')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-18 07:35:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:35:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:35:40 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:35:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:35:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:35:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:35:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:35:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:35:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:35:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:35:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:35:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:35:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:35:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:20 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:20 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:20 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:20 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:20 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:21 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:21 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:21 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:36:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:36:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:37:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:37:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:37:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:37:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:39:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:39:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:39:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:39:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:39:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:39:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:39:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:39:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:39:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:39:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:39:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:39:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:39:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:39:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:39:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:39:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:39:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:39:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:39:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:39:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:39:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:39:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:39:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:39:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:39:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:39:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:39:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:39:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:39:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:39:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:39:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:39:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:40:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:40:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:40:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:40:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:42:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:42:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:42:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:42:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:42:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:42:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:42:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:42:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:42:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:42:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:42:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:42:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:42:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 17 ] in file:line
2016-04-18 07:42:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:43:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 18 ] in file:line
2016-04-18 07:43:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:43:28 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function print_arr() ~ APPPATH/classes/Controller/Questions.php [ 18 ] in file:line
2016-04-18 07:43:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 07:59:47 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function query() on a non-object ~ APPPATH/classes/Controller/1.php [ 10 ] in file:line
2016-04-18 07:59:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 08:00:06 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function query() on a non-object ~ APPPATH/classes/Controller/1.php [ 10 ] in file:line
2016-04-18 08:00:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 08:00:10 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function query() on a non-object ~ APPPATH/classes/Controller/1.php [ 10 ] in file:line
2016-04-18 08:00:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 08:00:10 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function query() on a non-object ~ APPPATH/classes/Controller/1.php [ 10 ] in file:line
2016-04-18 08:00:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 08:00:11 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function query() on a non-object ~ APPPATH/classes/Controller/1.php [ 10 ] in file:line
2016-04-18 08:00:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 08:00:11 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function query() on a non-object ~ APPPATH/classes/Controller/1.php [ 10 ] in file:line
2016-04-18 08:00:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 08:00:11 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function query() on a non-object ~ APPPATH/classes/Controller/1.php [ 10 ] in file:line
2016-04-18 08:00:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 08:00:11 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function query() on a non-object ~ APPPATH/classes/Controller/1.php [ 10 ] in file:line
2016-04-18 08:00:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line