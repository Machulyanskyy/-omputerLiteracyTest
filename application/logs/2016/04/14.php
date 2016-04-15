<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-14 02:06:56 --- EMERGENCY: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 02:06:56 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('test')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('test', NULL)
#2 /srv/www/ittest/application/classes/Controller/Welcome.php(11): Kohana_View::factory('test')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:06:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::body() ~ APPPATH/classes/Controller/Welcome.php [ 9 ] in file:line
2016-04-14 04:06:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-14 04:06:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::body() ~ APPPATH/classes/Controller/Welcome.php [ 9 ] in file:line
2016-04-14 04:06:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-14 04:10:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::body() ~ APPPATH/classes/Controller/Welcome.php [ 9 ] in file:line
2016-04-14 04:10:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-14 04:11:06 --- EMERGENCY: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:11:06 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('welcome')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('welcome', NULL)
#2 /srv/www/ittest/application/classes/Controller/Welcome.php(9): Kohana_View::factory('welcome')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:11:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::content() ~ APPPATH/classes/Controller/Welcome.php [ 11 ] in file:line
2016-04-14 04:11:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-14 04:12:59 --- EMERGENCY: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:12:59 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('welcome')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('welcome', NULL)
#2 /srv/www/ittest/application/classes/Controller/Welcome.php(9): Kohana_View::factory('welcome')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:13:01 --- EMERGENCY: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:13:01 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('welcome')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('welcome', NULL)
#2 /srv/www/ittest/application/classes/Controller/Welcome.php(9): Kohana_View::factory('welcome')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:13:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:13:09 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('welcome')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('welcome', NULL)
#2 /srv/www/ittest/application/classes/Controller/Welcome.php(9): Kohana_View::factory('welcome')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:13:10 --- EMERGENCY: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:13:10 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('welcome')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('welcome', NULL)
#2 /srv/www/ittest/application/classes/Controller/Welcome.php(9): Kohana_View::factory('welcome')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:13:54 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:13:54 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /srv/www/ittest/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:16:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:16:18 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /srv/www/ittest/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:16:20 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:16:20 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /srv/www/ittest/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:16:25 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:16:25 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /srv/www/ittest/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:16:26 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:16:26 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /srv/www/ittest/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:18:52 --- EMERGENCY: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Welcome.php [ 11 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:11
2016-04-14 04:18:52 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(11): Kohana_Core::error_handler(2048, 'Creating defaul...', '/srv/www/ittest...', 11, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:11
2016-04-14 04:18:57 --- EMERGENCY: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Welcome.php [ 11 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:11
2016-04-14 04:18:57 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(11): Kohana_Core::error_handler(2048, 'Creating defaul...', '/srv/www/ittest...', 11, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:11
2016-04-14 04:19:17 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:19:17 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /srv/www/ittest/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:19:21 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:19:21 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /srv/www/ittest/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:22:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/welcome.php [ 15 ] in /srv/www/ittest/application/views/welcome.php:15
2016-04-14 04:22:50 --- DEBUG: #0 /srv/www/ittest/application/views/welcome.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 15, Array)
#1 /srv/www/ittest/system/classes/Kohana/View.php(62): include('/srv/www/ittest...')
#2 /srv/www/ittest/system/classes/Kohana/View.php(359): Kohana_View::capture('/srv/www/ittest...', Array)
#3 /srv/www/ittest/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /srv/www/ittest/application/views/welcome.php(15): Kohana_View->__toString()
#5 /srv/www/ittest/system/classes/Kohana/View.php(62): include('/srv/www/ittest...')
#6 /srv/www/ittest/system/classes/Kohana/View.php(359): Kohana_View::capture('/srv/www/ittest...', Array)
#7 /srv/www/ittest/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /srv/www/ittest/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#14 {main} in /srv/www/ittest/application/views/welcome.php:15
2016-04-14 04:22:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/welcome.php [ 15 ] in /srv/www/ittest/application/views/welcome.php:15
2016-04-14 04:22:51 --- DEBUG: #0 /srv/www/ittest/application/views/welcome.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/ittest...', 15, Array)
#1 /srv/www/ittest/system/classes/Kohana/View.php(62): include('/srv/www/ittest...')
#2 /srv/www/ittest/system/classes/Kohana/View.php(359): Kohana_View::capture('/srv/www/ittest...', Array)
#3 /srv/www/ittest/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /srv/www/ittest/application/views/welcome.php(15): Kohana_View->__toString()
#5 /srv/www/ittest/system/classes/Kohana/View.php(62): include('/srv/www/ittest...')
#6 /srv/www/ittest/system/classes/Kohana/View.php(359): Kohana_View::capture('/srv/www/ittest...', Array)
#7 /srv/www/ittest/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /srv/www/ittest/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#14 {main} in /srv/www/ittest/application/views/welcome.php:15
2016-04-14 04:26:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:26:52 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('welcome')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('welcome', NULL)
#2 /srv/www/ittest/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('welcome')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:27:00 --- EMERGENCY: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:27:00 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/View.php(145): Kohana_View->set_filename('welcome')
#1 /srv/www/ittest/system/classes/Kohana/View.php(30): Kohana_View->__construct('welcome', NULL)
#2 /srv/www/ittest/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('welcome')
#3 /srv/www/ittest/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/ittest/system/classes/Kohana/View.php:145
2016-04-14 04:34:37 --- EMERGENCY: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 04:34:37 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Kohana_Core::error_handler(8, 'Object of class...', '/srv/www/ittest...', 10, Array)
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10