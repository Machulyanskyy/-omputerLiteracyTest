<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-21 02:39:46 --- EMERGENCY: ErrorException [ 2 ]: array_search() expects parameter 2 to be array, string given ~ APPPATH/classes/Controller/Dashboard.php [ 10 ] in file:line
2016-04-21 02:39:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_search() ...', '/srv/www/ittest...', 10, Array)
#1 /srv/www/ittest/application/classes/Controller/Dashboard.php(10): array_search(Array, 'QA_ID')
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-21 03:38:48 --- EMERGENCY: ErrorException [ 2 ]: array_search() expects at least 2 parameters, 1 given ~ APPPATH/classes/Controller/Dashboard.php [ 10 ] in file:line
2016-04-21 03:38:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_search() ...', '/srv/www/ittest...', 10, Array)
#1 /srv/www/ittest/application/classes/Controller/Dashboard.php(10): array_search(Array)
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-21 03:39:22 --- EMERGENCY: View_Exception [ 0 ]: The requested view questions could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-21 03:39:22 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('questions')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('questions', NULL)
#2 /srv/www/ittest/application/classes/Controller/Users.php(45): Kohana_View::factory('questions')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-21 03:40:19 --- EMERGENCY: View_Exception [ 0 ]: The requested view questions could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-21 03:40:19 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('questions')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('questions', NULL)
#2 /srv/www/ittest/application/classes/Controller/Users.php(45): Kohana_View::factory('questions')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-21 03:43:53 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Welcome ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:43:53 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#2 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#3 {main} in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:44:09 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Welcome ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:44:09 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#2 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#3 {main} in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:44:23 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Welcome ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:44:23 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#2 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#3 {main} in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:44:40 --- EMERGENCY: ErrorException [ 2 ]: end() expects parameter 1 to be array, null given ~ APPPATH/classes/Controller/Dashboard.php [ 10 ] in file:line
2016-04-21 03:44:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'end() expects p...', '/srv/www/ittest...', 10, Array)
#1 /srv/www/ittest/application/classes/Controller/Dashboard.php(10): end(NULL)
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-21 03:44:58 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Welcome ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:44:58 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#2 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#3 {main} in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:45:14 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Welcome ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:45:14 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#2 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#3 {main} in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:46:45 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Welcome ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:46:45 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#2 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#3 {main} in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:46:59 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Welcome ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:46:59 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#2 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#3 {main} in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:47:11 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Welcome ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:47:11 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#2 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#3 {main} in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:47:17 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Welcome ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:47:17 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#2 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#3 {main} in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:47:25 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Welcome ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:47:25 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#2 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#3 {main} in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:47:26 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Welcome ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:47:26 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#2 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#3 {main} in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:47:45 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Welcome ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:47:45 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#2 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#3 {main} in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:48:32 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Welcome ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:48:32 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#2 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#3 {main} in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:48:38 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Welcome ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:48:38 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#2 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#3 {main} in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:48:43 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Welcome ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:48:43 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#2 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#3 {main} in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:48:46 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Welcome ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:48:46 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#2 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#3 {main} in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:51:12 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Base ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:51:12 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#2 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#3 {main} in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:52:16 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Session::set(), called in /srv/www/ittest/application/classes/Controller/Dashboard.php on line 21 and defined ~ SYSPATH/classes/Kohana/Session.php [ 243 ] in /srv/www/ittest/system/classes/Kohana/Session.php:243
2016-04-21 03:52:16 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Session.php(243): Kohana_Core::error_handler(2, 'Missing argumen...', '/srv/www/ittest...', 243, Array)
#1 /srv/www/ittest/application/classes/Controller/Dashboard.php(21): Kohana_Session->set('last_quest')
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/ittest/system/classes/Kohana/Session.php:243
2016-04-21 03:53:05 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Base ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:53:05 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#2 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#3 {main} in /srv/www/ittest/system/classes/Kohana/Request/Client.php:114
2016-04-21 03:53:07 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Session::set(), called in /srv/www/ittest/application/classes/Controller/Dashboard.php on line 21 and defined ~ SYSPATH/classes/Kohana/Session.php [ 243 ] in /srv/www/ittest/system/classes/Kohana/Session.php:243
2016-04-21 03:53:07 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Session.php(243): Kohana_Core::error_handler(2, 'Missing argumen...', '/srv/www/ittest...', 243, Array)
#1 /srv/www/ittest/application/classes/Controller/Dashboard.php(21): Kohana_Session->set('last_quest')
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/ittest/system/classes/Kohana/Session.php:243
2016-04-21 03:53:26 --- EMERGENCY: View_Exception [ 0 ]: The requested view questions could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-21 03:53:26 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('questions')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('questions', NULL)
#2 /srv/www/ittest/application/classes/Controller/Users.php(45): Kohana_View::factory('questions')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-21 03:53:39 --- EMERGENCY: View_Exception [ 0 ]: The requested view questions could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-21 03:53:39 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('questions')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('questions', NULL)
#2 /srv/www/ittest/application/classes/Controller/Users.php(45): Kohana_View::factory('questions')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-21 03:53:40 --- EMERGENCY: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00001: unique constraint (KOM_0.QUESTANS_PK) violated ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 143 ] in file:line
2016-04-21 03:53:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', '/srv/www/ittest...', 143, Array)
#1 /srv/www/ittest/modules/leap/classes/Base/DB/Oracle/Connection/Standard.php(143): oci_execute(Resource id #102, 32)
#2 /srv/www/ittest/modules/leap/classes/Base/DB/SQL/Insert/Proxy.php(95): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "QU...')
#3 /srv/www/ittest/application/classes/Model/Dashboard.php(34): Base_DB_SQL_Insert_Proxy->execute()
#4 /srv/www/ittest/application/classes/Controller/Dashboard.php(22): Model_Dashboard->save_question('320', 'question', '4', '0', NULL)
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-04-21 03:53:42 --- EMERGENCY: View_Exception [ 0 ]: The requested view questions could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-21 03:53:42 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('questions')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('questions', NULL)
#2 /srv/www/ittest/application/classes/Controller/Users.php(45): Kohana_View::factory('questions')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-21 03:53:55 --- EMERGENCY: View_Exception [ 0 ]: The requested view questions could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-21 03:53:55 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('questions')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('questions', NULL)
#2 /srv/www/ittest/application/classes/Controller/Users.php(45): Kohana_View::factory('questions')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-21 03:55:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: qa_id ~ APPPATH/classes/Controller/Dashboard.php [ 33 ] in /srv/www/ittest/application/classes/Controller/Dashboard.php:33
2016-04-21 03:55:27 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Dashboard.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 33, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Dashboard.php:33
2016-04-21 03:56:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$users ~ APPPATH/classes/Controller/Welcome.php [ 9 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:9
2016-04-21 03:56:43 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/srv/www/ittest...', 9, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:9
2016-04-21 03:56:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$Users ~ APPPATH/classes/Controller/Welcome.php [ 9 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:9
2016-04-21 03:56:49 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/srv/www/ittest...', 9, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:9
2016-04-21 03:56:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$Users ~ APPPATH/classes/Controller/Welcome.php [ 9 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:9
2016-04-21 03:56:52 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/srv/www/ittest...', 9, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:9
2016-04-21 04:01:58 --- EMERGENCY: View_Exception [ 0 ]: The requested view questions could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-21 04:01:58 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('questions')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('questions', NULL)
#2 /srv/www/ittest/application/classes/Controller/Users.php(45): Kohana_View::factory('questions')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-21 04:02:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: list ~ APPPATH/views/quest.php [ 14 ] in /srv/www/ittest/application/views/quest.php:14
2016-04-21 04:02:38 --- DEBUG: #0 /srv/www/ittest/application/views/quest.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 14, Array)
#1 /srv/www/ittest/system/classes/Kohana/View.php(62): include('/srv/www/ittest...')
#2 /srv/www/ittest/system/classes/Kohana/View.php(359): Kohana_View::capture('/srv/www/ittest...', Array)
#3 /srv/www/ittest/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /srv/www/ittest/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /srv/www/ittest/application/classes/Controller/Users.php(45): Kohana_Response->body(Object(View))
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in /srv/www/ittest/application/views/quest.php:14
2016-04-21 04:03:06 --- EMERGENCY: View_Exception [ 0 ]: The requested view registraation could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-21 04:03:06 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('registraation')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('registraation', NULL)
#2 /srv/www/ittest/application/classes/Controller/Users.php(45): Kohana_View::factory('registraation')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-21 04:03:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: list ~ APPPATH/views/dashboard.php [ 44 ] in /srv/www/ittest/application/views/dashboard.php:44
2016-04-21 04:03:45 --- DEBUG: #0 /srv/www/ittest/application/views/dashboard.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 44, Array)
#1 /srv/www/ittest/system/classes/Kohana/View.php(62): include('/srv/www/ittest...')
#2 /srv/www/ittest/system/classes/Kohana/View.php(359): Kohana_View::capture('/srv/www/ittest...', Array)
#3 /srv/www/ittest/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /srv/www/ittest/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /srv/www/ittest/application/classes/Controller/Users.php(45): Kohana_Response->body(Object(View))
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in /srv/www/ittest/application/views/dashboard.php:44
2016-04-21 04:04:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: list ~ APPPATH/views/dashboard.php [ 44 ] in /srv/www/ittest/application/views/dashboard.php:44
2016-04-21 04:04:04 --- DEBUG: #0 /srv/www/ittest/application/views/dashboard.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 44, Array)
#1 /srv/www/ittest/system/classes/Kohana/View.php(62): include('/srv/www/ittest...')
#2 /srv/www/ittest/system/classes/Kohana/View.php(359): Kohana_View::capture('/srv/www/ittest...', Array)
#3 /srv/www/ittest/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /srv/www/ittest/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /srv/www/ittest/application/classes/Controller/Users.php(45): Kohana_Response->body(Object(View))
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in /srv/www/ittest/application/views/dashboard.php:44
2016-04-21 04:04:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: list ~ APPPATH/views/dashboard.php [ 44 ] in /srv/www/ittest/application/views/dashboard.php:44
2016-04-21 04:04:34 --- DEBUG: #0 /srv/www/ittest/application/views/dashboard.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 44, Array)
#1 /srv/www/ittest/system/classes/Kohana/View.php(62): include('/srv/www/ittest...')
#2 /srv/www/ittest/system/classes/Kohana/View.php(359): Kohana_View::capture('/srv/www/ittest...', Array)
#3 /srv/www/ittest/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /srv/www/ittest/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /srv/www/ittest/application/classes/Controller/Users.php(45): Kohana_Response->body(Object(View))
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in /srv/www/ittest/application/views/dashboard.php:44
2016-04-21 04:32:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: list ~ APPPATH/views/dashboard.php [ 44 ] in /srv/www/ittest/application/views/dashboard.php:44
2016-04-21 04:32:55 --- DEBUG: #0 /srv/www/ittest/application/views/dashboard.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 44, Array)
#1 /srv/www/ittest/system/classes/Kohana/View.php(62): include('/srv/www/ittest...')
#2 /srv/www/ittest/system/classes/Kohana/View.php(359): Kohana_View::capture('/srv/www/ittest...', Array)
#3 /srv/www/ittest/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /srv/www/ittest/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /srv/www/ittest/application/classes/Controller/Users.php(45): Kohana_Response->body(Object(View))
#6 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#12 {main} in /srv/www/ittest/application/views/dashboard.php:44
2016-04-21 04:35:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::action_index() ~ APPPATH/classes/Controller/Users.php [ 44 ] in file:line
2016-04-21 04:35:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-21 04:42:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: post ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /srv/www/ittest/application/classes/Controller/Users.php:44
2016-04-21 04:42:44 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Users.php(44): Kohana_Route::get('post')
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Users.php:44
2016-04-21 04:43:05 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_Route::get(), called in /srv/www/ittest/application/classes/Controller/Users.php on line 44 and defined ~ SYSPATH/classes/Kohana/Route.php [ 105 ] in /srv/www/ittest/system/classes/Kohana/Route.php:105
2016-04-21 04:43:05 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Route.php(105): Kohana_Core::error_handler(2, 'Missing argumen...', '/srv/www/ittest...', 105, Array)
#1 /srv/www/ittest/application/classes/Controller/Users.php(44): Kohana_Route::get()
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/ittest/system/classes/Kohana/Route.php:105
2016-04-21 04:43:19 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Route::uri() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Users.php [ 44 ] in /srv/www/ittest/application/classes/Controller/Users.php:44
2016-04-21 04:43:19 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Users.php(44): Kohana_Core::error_handler(2048, 'Non-static meth...', '/srv/www/ittest...', 44, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Users.php:44
2016-04-21 04:46:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/Controller/Users.php [ 44 ] in file:line
2016-04-21 04:46:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-21 04:46:55 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/Route.php [ 93 ] in /srv/www/ittest/system/classes/Kohana/Route.php:93
2016-04-21 04:46:55 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Route.php(93): Kohana_Core::error_handler(2, 'Illegal offset ...', '/srv/www/ittest...', 93, Array)
#1 /srv/www/ittest/application/classes/Controller/Users.php(49): Kohana_Route::set(Array)
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/ittest/system/classes/Kohana/Route.php:93
2016-04-21 04:47:57 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Route could not be converted to string ~ SYSPATH/classes/Kohana/Controller.php [ 127 ] in /srv/www/ittest/system/classes/Kohana/Controller.php:127
2016-04-21 04:47:57 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Controller.php(127): Kohana_Core::error_handler(4096, 'Object of class...', '/srv/www/ittest...', 127, Array)
#1 /srv/www/ittest/application/classes/Controller/Users.php(50): Kohana_Controller::redirect(Object(Route))
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/ittest/system/classes/Kohana/Controller.php:127
2016-04-21 04:49:16 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host 192.168.122.34:8086. If you trust 192.168.122.34:8086, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /srv/www/ittest/system/classes/Kohana/URL.php:144
2016-04-21 04:49:16 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, true)
#1 /srv/www/ittest/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('Dashboard', true, true)
#2 /srv/www/ittest/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('Dashboard')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('Dashboard', 302)
#4 /srv/www/ittest/application/classes/Controller/Users.php(49): Kohana_Controller::redirect('Dashboard')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in /srv/www/ittest/system/classes/Kohana/URL.php:144
2016-04-21 04:49:44 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host 192.168.122.34:8086. If you trust 192.168.122.34:8086, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /srv/www/ittest/system/classes/Kohana/URL.php:144
2016-04-21 04:49:44 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, true)
#1 /srv/www/ittest/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('Dashboard', true, true)
#2 /srv/www/ittest/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('Dashboard')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('Dashboard', 302)
#4 /srv/www/ittest/application/classes/Controller/Users.php(49): Kohana_Controller::redirect('Dashboard')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in /srv/www/ittest/system/classes/Kohana/URL.php:144
2016-04-21 04:51:58 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Users.php [ 44 ] in file:line
2016-04-21 04:51:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-21 04:52:59 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host 192.168.122.34:8086. If you trust 192.168.122.34:8086, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /srv/www/ittest/system/classes/Kohana/URL.php:144
2016-04-21 04:52:59 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, true)
#1 /srv/www/ittest/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('dashboard', true, true)
#2 /srv/www/ittest/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('dashboard')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('dashboard', 302)
#4 /srv/www/ittest/application/classes/Controller/Users.php(44): Kohana_Controller::redirect('dashboard')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in /srv/www/ittest/system/classes/Kohana/URL.php:144
2016-04-21 04:55:04 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host 192.168.122.34:8086. If you trust 192.168.122.34:8086, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /srv/www/ittest/system/classes/Kohana/URL.php:144
2016-04-21 04:55:04 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, true)
#1 /srv/www/ittest/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('dashboard', true, true)
#2 /srv/www/ittest/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('dashboard')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('dashboard', 302)
#4 /srv/www/ittest/application/classes/Controller/Users.php(44): Kohana_Controller::redirect('dashboard')
#5 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#11 {main} in /srv/www/ittest/system/classes/Kohana/URL.php:144
2016-04-21 06:25:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Dashboard.php [ 69 ] in /srv/www/ittest/application/classes/Controller/Dashboard.php:69
2016-04-21 06:25:56 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Dashboard.php(69): Kohana_Core::error_handler(8, 'Undefined offse...', '/srv/www/ittest...', 69, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_get_qa()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Dashboard.php:69