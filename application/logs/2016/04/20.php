<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-20 02:05:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Autorisation::get_email() ~ APPPATH/classes/Controller/Users.php [ 51 ] in file:line
2016-04-20 02:05:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 02:05:35 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Autorisation::get_email() ~ APPPATH/classes/Controller/Users.php [ 51 ] in file:line
2016-04-20 02:05:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 02:12:57 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00904: &quot;QA_ANSWER_ID&quot;: invalid identifier ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-20 02:12:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #89, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'DELETE FROM QUE...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'DELETE FROM QUE...', 32)
#4 /srv/www/ittest/application/classes/Model/Dashboard.php(46): Base_DB_Oracle_Connection_Standard->query('DELETE FROM QUE...')
#5 /srv/www/ittest/application/classes/Controller/Dashboard.php(33): Model_Dashboard->remove_question('320')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_remove_q()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-20 02:18:39 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00904: &quot;QA_ANSWER_ID&quot;: invalid identifier ~ MODPATH/leap/classes/Base/DB/Oracle/DataReader/Standard.php [ 57 ] in file:line
2016-04-20 02:18:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/DataReader/Standard.php(57): oci_execute(Resource id #89, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/DataReader.php(141): Base_DB_Oracle_DataReader_Standard->__construct(Object(DB_Oracle_Connection_Standard), 'DELETE FROM QUE...', 32)
#3 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(272): Base_DB_SQL_DataReader::factory(Object(DB_Oracle_Connection_Standard), 'DELETE FROM QUE...', 32)
#4 /srv/www/ittest/application/classes/Model/Dashboard.php(46): Base_DB_Oracle_Connection_Standard->query('DELETE FROM QUE...')
#5 /srv/www/ittest/application/classes/Controller/Dashboard.php(33): Model_Dashboard->remove_question('320')
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_remove_q()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-04-20 02:21:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: U_NAME_reg ~ APPPATH/classes/Controller/Users.php [ 58 ] in /srv/www/ittest/application/classes/Controller/Users.php:58
2016-04-20 02:21:02 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Users.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 58, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Users.php:58
2016-04-20 02:21:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: U_NAME_reg ~ APPPATH/classes/Controller/Users.php [ 58 ] in /srv/www/ittest/application/classes/Controller/Users.php:58
2016-04-20 02:21:31 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Users.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 58, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Users.php:58
2016-04-20 02:28:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Oracle' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-04-20 02:28:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 02:31:28 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00904: &quot;QA_ANSWER_ID&quot;: invalid identifier ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 143 ] in file:line
2016-04-20 02:31:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 143, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(143): oci_execute(Resource id #99, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/Delete/Proxy.php(77): Base_DB_Oracle_Connection_Standard->execute('DELETE FROM "QU...')
#3 /srv/www/ittest/application/classes/Model/Dashboard.php(44): Base_DB_SQL_Delete_Proxy->execute()
#4 /srv/www/ittest/application/classes/Controller/Dashboard.php(33): Model_Dashboard->remove_question('320')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_remove_q()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-20 02:39:40 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Users::hash_password() ~ APPPATH/classes/Controller/Users.php [ 58 ] in file:line
2016-04-20 02:39:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 02:40:29 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function hash_password() on a non-object ~ APPPATH/classes/Controller/Users.php [ 10 ] in file:line
2016-04-20 02:40:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 02:41:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Users.php [ 58 ] in file:line
2016-04-20 02:41:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 02:41:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Users.php [ 58 ] in file:line
2016-04-20 02:41:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 03:11:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Users.php [ 58 ] in file:line
2016-04-20 03:11:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 03:12:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Users.php [ 58 ] in file:line
2016-04-20 03:12:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 03:13:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Dashboard.php [ 7 ] in file:line
2016-04-20 03:13:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 03:24:47 --- EMERGENCY: ErrorException [ 2 ]: The use statement with non-compound name 'Auth' has no effect ~ APPPATH/classes/Controller/Users.php [ 3 ] in /srv/www/ittest/system/classes/Kohana/Core.php:511
2016-04-20 03:24:47 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Core.php(511): Kohana_Core::error_handler(2, 'The use stateme...', '/srv/www/ittest...', 3, Array)
#1 /srv/www/ittest/system/classes/Kohana/Core.php(511): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Controller_User...')
#3 [internal function]: spl_autoload_call('Controller_User...')
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(74): class_exists('Controller_User...')
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/ittest/system/classes/Kohana/Core.php:511
2016-04-20 03:25:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Users.php [ 57 ] in file:line
2016-04-20 03:25:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 03:26:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Auth' not found ~ APPPATH/classes/Controller/Users.php [ 57 ] in file:line
2016-04-20 03:26:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 03:28:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Users.php [ 57 ] in file:line
2016-04-20 03:28:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 03:28:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Dashboard.php [ 7 ] in file:line
2016-04-20 03:28:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 03:33:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in file:line
2016-04-20 03:33:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 03:34:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in file:line
2016-04-20 03:34:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 03:37:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in file:line
2016-04-20 03:37:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 03:41:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Controller/Users.php [ 57 ] in file:line
2016-04-20 03:41:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 03:43:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Users::$auth ~ APPPATH/classes/Controller/Users.php [ 57 ] in /srv/www/ittest/application/classes/Controller/Users.php:57
2016-04-20 03:43:28 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Users.php(57): Kohana_Core::error_handler(8, 'Undefined prope...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Users.php:57
2016-04-20 03:44:06 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Auth::hash() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Users.php [ 57 ] in /srv/www/ittest/application/classes/Controller/Users.php:57
2016-04-20 03:44:06 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Users.php(57): Kohana_Core::error_handler(2048, 'Non-static meth...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Users.php:57
2016-04-20 03:44:17 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Auth::hash_password() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Users.php [ 57 ] in /srv/www/ittest/application/classes/Controller/Users.php:57
2016-04-20 03:44:17 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Users.php(57): Kohana_Core::error_handler(2048, 'Non-static meth...', '/srv/www/ittest...', 57, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Users.php:57
2016-04-20 04:26:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method DB_SQL_Delete_Proxy::table() ~ APPPATH/classes/Model/Dashboard.php [ 66 ] in file:line
2016-04-20 04:26:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 04:40:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Autorisation::search() ~ APPPATH/classes/Controller/Users.php [ 13 ] in file:line
2016-04-20 04:40:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 06:25:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id_qa ~ APPPATH/classes/Model/Dashboard.php [ 89 ] in /srv/www/ittest/application/classes/Model/Dashboard.php:89
2016-04-20 06:25:36 --- DEBUG: #0 /srv/www/ittest/application/classes/Model/Dashboard.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 89, Array)
#1 /srv/www/ittest/application/classes/Controller/Dashboard.php(57): Model_Dashboard->get_question('320')
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_get_qa()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/ittest/application/classes/Model/Dashboard.php:89
2016-04-20 06:25:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method DB_SQL_Select_Proxy::execute() ~ APPPATH/classes/Model/Dashboard.php [ 91 ] in file:line
2016-04-20 06:25:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 06:29:31 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant builder - assumed 'builder' ~ APPPATH/classes/Model/Dashboard.php [ 94 ] in /srv/www/ittest/application/classes/Model/Dashboard.php:94
2016-04-20 06:29:31 --- DEBUG: #0 /srv/www/ittest/application/classes/Model/Dashboard.php(94): Kohana_Core::error_handler(8, 'Use of undefine...', '/srv/www/ittest...', 94, Array)
#1 /srv/www/ittest/application/classes/Controller/Dashboard.php(57): Model_Dashboard->get_question('320')
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_get_qa()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/ittest/application/classes/Model/Dashboard.php:94
2016-04-20 06:30:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method DB_SQL_Select_Proxy::execute() ~ APPPATH/classes/Model/Dashboard.php [ 93 ] in file:line
2016-04-20 06:30:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 06:41:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::action_login() ~ APPPATH/classes/Controller/Users.php [ 24 ] in file:line
2016-04-20 06:41:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 06:45:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller::factory() ~ APPPATH/classes/Controller/Users.php [ 49 ] in file:line
2016-04-20 06:45:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 06:50:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controlle' not found ~ APPPATH/classes/Controller/Login.php [ 19 ] in file:line
2016-04-20 06:50:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 06:50:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Dashboard.php [ 62 ] in file:line
2016-04-20 06:50:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 06:52:57 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /srv/www/ittest/application/classes/Controller/Login.php on line 19 and defined ~ SYSPATH/classes/Kohana/Controller.php [ 43 ] in /srv/www/ittest/system/classes/Kohana/Controller.php:43
2016-04-20 06:52:57 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/srv/www/ittest...', 43, Array)
#1 /srv/www/ittest/application/classes/Controller/Login.php(19): Kohana_Controller->__construct()
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/ittest/system/classes/Kohana/Controller.php:43
2016-04-20 06:53:29 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /srv/www/ittest/application/classes/Controller/Login.php on line 19 and defined ~ SYSPATH/classes/Kohana/Controller.php [ 43 ] in /srv/www/ittest/system/classes/Kohana/Controller.php:43
2016-04-20 06:53:29 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/srv/www/ittest...', 43, Array)
#1 /srv/www/ittest/application/classes/Controller/Login.php(19): Kohana_Controller->__construct()
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/ittest/system/classes/Kohana/Controller.php:43
2016-04-20 06:53:57 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /srv/www/ittest/application/classes/Controller/Login.php on line 19 and defined ~ SYSPATH/classes/Kohana/Controller.php [ 43 ] in /srv/www/ittest/system/classes/Kohana/Controller.php:43
2016-04-20 06:53:57 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/srv/www/ittest...', 43, Array)
#1 /srv/www/ittest/application/classes/Controller/Login.php(19): Kohana_Controller->__construct()
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/ittest/system/classes/Kohana/Controller.php:43
2016-04-20 07:06:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::action_index() ~ APPPATH/classes/Controller/Users.php [ 49 ] in file:line
2016-04-20 07:06:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 07:08:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function action_index() ~ APPPATH/classes/Controller/Users.php [ 49 ] in file:line
2016-04-20 07:08:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 07:12:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::action_reg() ~ APPPATH/classes/Controller/Users.php [ 49 ] in file:line
2016-04-20 07:12:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 07:12:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::action_reg() ~ APPPATH/classes/Controller/Users.php [ 49 ] in file:line
2016-04-20 07:12:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 07:12:53 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH/classes/Controller/Users.php [ 49 ] in file:line
2016-04-20 07:12:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 07:16:30 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host 192.168.122.34:8086. If you trust 192.168.122.34:8086, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /srv/www/ittest/system/classes/Kohana/URL.php:144
2016-04-20 07:16:30 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, true)
#1 /srv/www/ittest/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('reg', true, true)
#2 /srv/www/ittest/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('reg')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('reg', 302)
#4 /srv/www/ittest/application/classes/Controller/Users.php(49): Kohana_Controller::redirect('reg', 302)
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in /srv/www/ittest/system/classes/Kohana/URL.php:144
2016-04-20 07:16:40 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host 192.168.122.34:8086. If you trust 192.168.122.34:8086, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /srv/www/ittest/system/classes/Kohana/URL.php:144
2016-04-20 07:16:40 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, true)
#1 /srv/www/ittest/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('/reg', true, true)
#2 /srv/www/ittest/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('/reg')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('/reg', 302)
#4 /srv/www/ittest/application/classes/Controller/Users.php(49): Kohana_Controller::redirect('/reg', 302)
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in /srv/www/ittest/system/classes/Kohana/URL.php:144
2016-04-20 07:16:52 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host 192.168.122.34:8086. If you trust 192.168.122.34:8086, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /srv/www/ittest/system/classes/Kohana/URL.php:144
2016-04-20 07:16:52 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, true)
#1 /srv/www/ittest/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('/reg', true, true)
#2 /srv/www/ittest/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('/reg')
#3 /srv/www/ittest/application/classes/Controller/Users.php(49): Kohana_HTTP::redirect('/reg', 302)
#4 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#10 {main} in /srv/www/ittest/system/classes/Kohana/URL.php:144
2016-04-20 07:17:11 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host 192.168.122.34:8086. If you trust 192.168.122.34:8086, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /srv/www/ittest/system/classes/Kohana/URL.php:144
2016-04-20 07:17:11 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, true)
#1 /srv/www/ittest/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('/reg', true, true)
#2 /srv/www/ittest/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('/reg')
#3 /srv/www/ittest/application/classes/Controller/Users.php(49): Kohana_HTTP::redirect('/reg', 302)
#4 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#10 {main} in /srv/www/ittest/system/classes/Kohana/URL.php:144
2016-04-20 07:19:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function do_some() ~ APPPATH/classes/Controller/Dashboard.php [ 59 ] in file:line
2016-04-20 07:19:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 07:19:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function do_some() ~ APPPATH/classes/Controller/Dashboard.php [ 69 ] in file:line
2016-04-20 07:19:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 07:20:16 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /srv/www/ittest/application/classes/Controller/Users.php on line 49 and defined ~ SYSPATH/classes/Kohana/Controller.php [ 43 ] in /srv/www/ittest/system/classes/Kohana/Controller.php:43
2016-04-20 07:20:16 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/srv/www/ittest...', 43, Array)
#1 /srv/www/ittest/application/classes/Controller/Users.php(49): Kohana_Controller->__construct()
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/ittest/system/classes/Kohana/Controller.php:43
2016-04-20 07:20:52 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /srv/www/ittest/application/classes/Controller/Users.php on line 49 and defined ~ SYSPATH/classes/Kohana/Controller.php [ 43 ] in /srv/www/ittest/system/classes/Kohana/Controller.php:43
2016-04-20 07:20:52 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/srv/www/ittest...', 43, Array)
#1 /srv/www/ittest/application/classes/Controller/Users.php(49): Kohana_Controller->__construct()
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/ittest/system/classes/Kohana/Controller.php:43
2016-04-20 09:13:43 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function query() on a non-object ~ APPPATH/classes/Controller/1.php [ 10 ] in file:line
2016-04-20 09:13:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line