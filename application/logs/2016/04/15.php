<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-15 00:43:06 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-24415: Missing or null username. ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-15 00:43:06 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-15 01:09:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/leap/classes/Base/DB/MySQL/Connection/Standard.php [ 162 ] in file:line
2016-04-15 01:09:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 01:10:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/leap/classes/Base/DB/MySQL/Connection/Standard.php [ 162 ] in file:line
2016-04-15 01:10:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 01:13:52 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-15 01:13:52 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-15 01:14:42 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-15 01:14:42 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-15 01:31:50 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12514: TNS:listener does not currently know of service requested in connect descriptor ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-15 01:31:50 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-15 01:51:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_SQL' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 01:51:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 01:53:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 01:53:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:09:15 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-15 02:09:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #88, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#4 /srv/www/ittest/application/classes/Controller/Welcome.php(12): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM `...')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-15 02:09:22 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-15 02:09:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #88, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#4 /srv/www/ittest/application/classes/Controller/Welcome.php(12): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM `...')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-15 02:09:58 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-15 02:09:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #86, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#4 /srv/www/ittest/application/classes/Controller/Welcome.php(12): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM `...')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-15 02:09:59 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-15 02:09:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #86, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#4 /srv/www/ittest/application/classes/Controller/Welcome.php(12): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM `...')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-15 02:10:12 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-15 02:10:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #86, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#4 /srv/www/ittest/application/classes/Controller/Welcome.php(12): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM `...')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-15 02:10:13 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-15 02:10:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #86, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#4 /srv/www/ittest/application/classes/Controller/Welcome.php(12): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM `...')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-15 02:10:49 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-15 02:10:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #86, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#4 /srv/www/ittest/application/classes/Controller/Welcome.php(12): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM `...')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-15 02:10:50 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00911: invalid character ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-15 02:10:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #86, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM `...', 32)
#4 /srv/www/ittest/application/classes/Controller/Welcome.php(12): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM `...')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-15 02:18:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Weolcome' not found ~ APPPATH/classes/Controller/Users.php [ 3 ] in file:line
2016-04-15 02:18:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:19:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH/classes/Controller/Users.php [ 13 ] in file:line
2016-04-15 02:19:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:19:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/main.php [ 15 ] in /srv/www/ittest/application/views/main.php:15
2016-04-15 02:19:40 --- DEBUG: #0 /srv/www/ittest/application/views/main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 15, Array)
#1 /srv/www/ittest/system/classes/Kohana/View.php(62): include('/srv/www/ittest...')
#2 /srv/www/ittest/system/classes/Kohana/View.php(359): Kohana_View::capture('/srv/www/ittest...', Array)
#3 /srv/www/ittest/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /srv/www/ittest/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#10 {main} in /srv/www/ittest/application/views/main.php:15
2016-04-15 02:19:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/main.php [ 15 ] in /srv/www/ittest/application/views/main.php:15
2016-04-15 02:19:46 --- DEBUG: #0 /srv/www/ittest/application/views/main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 15, Array)
#1 /srv/www/ittest/system/classes/Kohana/View.php(62): include('/srv/www/ittest...')
#2 /srv/www/ittest/system/classes/Kohana/View.php(359): Kohana_View::capture('/srv/www/ittest...', Array)
#3 /srv/www/ittest/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /srv/www/ittest/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#10 {main} in /srv/www/ittest/application/views/main.php:15
2016-04-15 02:23:46 --- EMERGENCY: View_Exception [ 0 ]: The requested view /pages/show could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-15 02:23:46 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('/pages/show')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('/pages/show', NULL)
#2 /srv/www/ittest/application/classes/Controller/Questions.php(10): Kohana_View::factory('/pages/show')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-15 02:25:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/main.php [ 14 ] in /srv/www/ittest/application/views/main.php:14
2016-04-15 02:25:37 --- DEBUG: #0 /srv/www/ittest/application/views/main.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 14, Array)
#1 /srv/www/ittest/system/classes/Kohana/View.php(62): include('/srv/www/ittest...')
#2 /srv/www/ittest/system/classes/Kohana/View.php(359): Kohana_View::capture('/srv/www/ittest...', Array)
#3 /srv/www/ittest/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /srv/www/ittest/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#10 {main} in /srv/www/ittest/application/views/main.php:14
2016-04-15 02:27:00 --- EMERGENCY: View_Exception [ 0 ]: The requested view /pages/show could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-15 02:27:00 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('/pages/show')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('/pages/show', NULL)
#2 /srv/www/ittest/application/classes/Controller/Questions.php(10): Kohana_View::factory('/pages/show')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-15 02:27:39 --- EMERGENCY: View_Exception [ 0 ]: The requested view /pages/show could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-15 02:27:39 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('/pages/show')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('/pages/show', NULL)
#2 /srv/www/ittest/application/classes/Controller/Questions.php(10): Kohana_View::factory('/pages/show')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-15 02:28:14 --- EMERGENCY: View_Exception [ 0 ]: The requested view /pages/show could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-15 02:28:14 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('/pages/show')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('/pages/show', NULL)
#2 /srv/www/ittest/application/classes/Controller/Questions.php(10): Kohana_View::factory('/pages/show')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-15 02:28:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Weolcome' not found ~ APPPATH/classes/Controller/Users.php [ 4 ] in file:line
2016-04-15 02:28:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:28:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Weolcome' not found ~ APPPATH/classes/Controller/Users.php [ 4 ] in file:line
2016-04-15 02:28:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:28:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Weolcome' not found ~ APPPATH/classes/Controller/Users.php [ 4 ] in file:line
2016-04-15 02:28:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:29:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Weolcome' not found ~ APPPATH/classes/Controller/Users.php [ 4 ] in file:line
2016-04-15 02:29:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:29:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Weolcome' not found ~ APPPATH/classes/Controller/Users.php [ 4 ] in file:line
2016-04-15 02:29:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:29:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Weolcome' not found ~ APPPATH/classes/Controller/Users.php [ 4 ] in file:line
2016-04-15 02:29:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:29:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Weolcome' not found ~ APPPATH/classes/Controller/Users.php [ 4 ] in file:line
2016-04-15 02:29:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:29:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Wecolcome' not found ~ APPPATH/classes/Controller/Users.php [ 4 ] in file:line
2016-04-15 02:29:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:29:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Wecolcome' not found ~ APPPATH/classes/Controller/Users.php [ 4 ] in file:line
2016-04-15 02:29:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:29:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Wecolcome' not found ~ APPPATH/classes/Controller/Users.php [ 4 ] in file:line
2016-04-15 02:29:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:29:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Wecolcome' not found ~ APPPATH/classes/Controller/Users.php [ 4 ] in file:line
2016-04-15 02:29:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:31:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function registration() ~ APPPATH/views/login.php [ 20 ] in file:line
2016-04-15 02:31:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:31:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function action_registration() ~ APPPATH/views/login.php [ 20 ] in file:line
2016-04-15 02:31:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:32:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function action_registration() ~ APPPATH/views/login.php [ 20 ] in file:line
2016-04-15 02:32:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:32:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function action_registration() ~ APPPATH/views/login.php [ 20 ] in file:line
2016-04-15 02:32:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:32:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function action_registration() ~ APPPATH/views/login.php [ 20 ] in file:line
2016-04-15 02:32:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:33:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 02:33:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:40:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_IF, expecting T_FUNCTION ~ APPPATH/classes/Controller/Users.php [ 16 ] in file:line
2016-04-15 02:40:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:42:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_IF, expecting T_FUNCTION ~ APPPATH/classes/Controller/Users.php [ 16 ] in file:line
2016-04-15 02:42:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:45:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 02:45:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:45:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 02:45:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:46:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 02:46:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:47:06 --- EMERGENCY: View_Exception [ 0 ]: The requested view /pages/show could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-15 02:47:06 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('/pages/show')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('/pages/show', NULL)
#2 /srv/www/ittest/application/classes/Controller/Questions.php(10): Kohana_View::factory('/pages/show')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-15 02:48:11 --- EMERGENCY: View_Exception [ 0 ]: The requested view quest could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-15 02:48:11 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('quest')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('quest', NULL)
#2 /srv/www/ittest/application/classes/Controller/Questions.php(10): Kohana_View::factory('quest')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-15 02:48:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 02:48:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:50:19 --- EMERGENCY: View_Exception [ 0 ]: The requested view quest could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-15 02:50:19 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('quest')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('quest', NULL)
#2 /srv/www/ittest/application/classes/Controller/Questions.php(10): Kohana_View::factory('quest')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-15 02:50:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Questions' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-15 02:50:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:51:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 02:51:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:53:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 02:53:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:54:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 02:54:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:54:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_IF, expecting T_FUNCTION ~ APPPATH/classes/Controller/Users.php [ 6 ] in file:line
2016-04-15 02:54:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:54:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_IF, expecting T_FUNCTION ~ APPPATH/classes/Controller/Users.php [ 6 ] in file:line
2016-04-15 02:54:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:55:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_IF, expecting T_FUNCTION ~ APPPATH/classes/Controller/Users.php [ 6 ] in file:line
2016-04-15 02:55:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:55:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 02:55:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:56:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 02:56:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:56:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_IF, expecting T_FUNCTION ~ APPPATH/classes/Controller/Users.php [ 6 ] in file:line
2016-04-15 02:56:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:56:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_IF, expecting T_FUNCTION ~ APPPATH/classes/Controller/Users.php [ 6 ] in file:line
2016-04-15 02:56:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:56:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_IF, expecting T_FUNCTION ~ APPPATH/classes/Controller/Users.php [ 6 ] in file:line
2016-04-15 02:56:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:56:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_IF, expecting T_FUNCTION ~ APPPATH/classes/Controller/Users.php [ 6 ] in file:line
2016-04-15 02:56:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:57:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_IF, expecting T_FUNCTION ~ APPPATH/classes/Controller/Users.php [ 6 ] in file:line
2016-04-15 02:57:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:58:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_IF, expecting T_FUNCTION ~ APPPATH/classes/Controller/Users.php [ 6 ] in file:line
2016-04-15 02:58:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:58:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 02:58:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 02:58:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 02:58:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 03:00:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 03:00:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 03:06:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 03:06:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 03:06:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 03:06:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 03:06:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 03:06:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 03:10:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 03:10:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 03:13:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 03:13:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 03:13:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 03:13:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 03:13:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 03:13:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 03:27:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: action ~ APPPATH/classes/Controller/Users.php [ 4 ] in /srv/www/ittest/application/classes/Controller/Users.php:4
2016-04-15 03:27:22 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Users.php(4): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/ittest...', 4, Array)
#1 /srv/www/ittest/system/classes/Kohana/Core.php(511): require('/srv/www/ittest...')
#2 [internal function]: Kohana_Core::auto_load('Controller_User...')
#3 [internal function]: spl_autoload_call('Controller_User...')
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(74): class_exists('Controller_User...')
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/ittest/application/classes/Controller/Users.php:4
2016-04-15 03:28:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_IF, expecting T_FUNCTION ~ APPPATH/classes/Controller/Users.php [ 20 ] in file:line
2016-04-15 03:28:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 03:29:33 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 03:29:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 03:30:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_IF, expecting T_FUNCTION ~ APPPATH/classes/Controller/Users.php [ 20 ] in file:line
2016-04-15 03:30:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 03:30:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_IF, expecting T_FUNCTION ~ APPPATH/classes/Controller/Users.php [ 20 ] in file:line
2016-04-15 03:30:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 04:04:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/main.php [ 18 ] in /srv/www/ittest/application/views/main.php:18
2016-04-15 04:04:55 --- DEBUG: #0 /srv/www/ittest/application/views/main.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 18, Array)
#1 /srv/www/ittest/system/classes/Kohana/View.php(62): include('/srv/www/ittest...')
#2 /srv/www/ittest/system/classes/Kohana/View.php(359): Kohana_View::capture('/srv/www/ittest...', Array)
#3 /srv/www/ittest/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /srv/www/ittest/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#7 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#10 {main} in /srv/www/ittest/application/views/main.php:18
2016-04-15 04:05:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::body() ~ SYSPATH/classes/Kohana/Controller/Template.php [ 44 ] in file:line
2016-04-15 04:05:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 04:06:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/main.php [ 18 ] in /srv/www/ittest/application/views/main.php:18
2016-04-15 04:06:04 --- DEBUG: #0 /srv/www/ittest/application/views/main.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 18, Array)
#1 /srv/www/ittest/system/classes/Kohana/View.php(62): include('/srv/www/ittest...')
#2 /srv/www/ittest/system/classes/Kohana/View.php(359): Kohana_View::capture('/srv/www/ittest...', Array)
#3 /srv/www/ittest/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /srv/www/ittest/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#7 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#10 {main} in /srv/www/ittest/application/views/main.php:18
2016-04-15 04:30:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/classes/Controller/Questions.php [ 15 ] in /srv/www/ittest/application/classes/Controller/Questions.php:15
2016-04-15 04:30:32 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Questions.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 15, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Questions.php:15
2016-04-15 04:30:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/main.php [ 18 ] in /srv/www/ittest/application/views/main.php:18
2016-04-15 04:30:59 --- DEBUG: #0 /srv/www/ittest/application/views/main.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 18, Array)
#1 /srv/www/ittest/system/classes/Kohana/View.php(62): include('/srv/www/ittest...')
#2 /srv/www/ittest/system/classes/Kohana/View.php(359): Kohana_View::capture('/srv/www/ittest...', Array)
#3 /srv/www/ittest/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /srv/www/ittest/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#7 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#10 {main} in /srv/www/ittest/application/views/main.php:18
2016-04-15 04:31:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 04:31:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 04:56:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 04:56:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 05:02:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 05:02:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 05:03:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 05:03:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 05:07:30 --- EMERGENCY: ErrorException [ 2 ]: unserialize() expects parameter 1 to be string, array given ~ APPPATH/classes/Controller/Dashboard.php [ 14 ] in file:line
2016-04-15 05:07:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unserialize() e...', '/srv/www/ittest...', 14, Array)
#1 /srv/www/ittest/application/classes/Controller/Dashboard.php(14): unserialize(Array)
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-15 05:10:32 --- EMERGENCY: ErrorException [ 2 ]: unserialize() expects parameter 1 to be string, array given ~ APPPATH/classes/Controller/Dashboard.php [ 14 ] in file:line
2016-04-15 05:10:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unserialize() e...', '/srv/www/ittest...', 14, Array)
#1 /srv/www/ittest/application/classes/Controller/Dashboard.php(14): unserialize(Array)
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-15 05:13:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 05:13:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 05:14:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 05:14:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 05:14:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 05:14:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 05:14:57 --- EMERGENCY: ErrorException [ 2 ]: unserialize() expects parameter 1 to be string, array given ~ APPPATH/classes/Controller/Dashboard.php [ 14 ] in file:line
2016-04-15 05:14:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unserialize() e...', '/srv/www/ittest...', 14, Array)
#1 /srv/www/ittest/application/classes/Controller/Dashboard.php(14): unserialize(Array)
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-15 05:14:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 05:14:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 05:14:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 05:14:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 05:14:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 05:14:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 05:14:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 05:14:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 05:14:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 05:14:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 05:14:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 05:14:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 05:15:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 05:15:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 05:15:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_questions' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-15 05:15:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 05:15:34 --- EMERGENCY: ErrorException [ 2 ]: unserialize() expects parameter 1 to be string, array given ~ APPPATH/classes/Controller/Dashboard.php [ 14 ] in file:line
2016-04-15 05:15:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unserialize() e...', '/srv/www/ittest...', 14, Array)
#1 /srv/www/ittest/application/classes/Controller/Dashboard.php(14): unserialize(Array)
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-15 05:15:44 --- EMERGENCY: View_Exception [ 0 ]: The requested view Questions could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-15 05:15:44 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Questions')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('Questions', NULL)
#2 /srv/www/ittest/application/classes/Controller/Questions.php(10): Kohana_View::factory('Questions')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-15 05:15:54 --- EMERGENCY: View_Exception [ 0 ]: The requested view Questions could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-15 05:15:54 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Questions')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('Questions', NULL)
#2 /srv/www/ittest/application/classes/Controller/Questions.php(10): Kohana_View::factory('Questions')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-15 05:16:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_questions' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-15 05:16:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 05:16:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 05:16:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 05:16:36 --- EMERGENCY: ErrorException [ 2 ]: unserialize() expects parameter 1 to be string, array given ~ APPPATH/classes/Controller/Dashboard.php [ 14 ] in file:line
2016-04-15 05:16:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unserialize() e...', '/srv/www/ittest...', 14, Array)
#1 /srv/www/ittest/application/classes/Controller/Dashboard.php(14): unserialize(Array)
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-15 05:17:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-15 05:17:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 05:37:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function order_by() ~ APPPATH/classes/Controller/Questions.php [ 12 ] in file:line
2016-04-15 05:37:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-15 05:48:06 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00904: &quot;ID&quot;: invalid identifier ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-15 05:48:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #82, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM Q...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM Q...', 32)
#4 /srv/www/ittest/application/classes/Controller/Questions.php(11): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM Q...')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-15 05:48:24 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00904: &quot;ID&quot;: invalid identifier ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-15 05:48:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #82, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM Q...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'SELECT * FROM Q...', 32)
#4 /srv/www/ittest/application/classes/Controller/Questions.php(11): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM Q...')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Questions->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line