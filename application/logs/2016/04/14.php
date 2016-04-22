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
2016-04-14 06:22:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/classes/Controller/Welcome.php [ 17 ] in file:line
2016-04-14 06:22:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-14 06:26:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/classes/Controller/Welcome.php [ 17 ] in file:line
2016-04-14 06:26:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-14 06:46:32 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /srv/www/ittest/system/classes/Kohana/Arr.php on line 439 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:46:32 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/srv/www/ittest...', 30, Array)
#1 /srv/www/ittest/system/classes/Kohana/Arr.php(439): Kohana_Arr::is_assoc(1)
#2 /srv/www/ittest/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /srv/www/ittest/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(243): Kohana_Config->load('database.defaul...')
#5 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(73): Base_DB_DataSource::config('database.defaul...')
#6 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(257): Base_DB_DataSource->__construct('default')
#7 /srv/www/ittest/modules/leap/classes/Base/DB/Connection/Pool.php(169): Base_DB_DataSource::instance('default')
#8 /srv/www/ittest/application/classes/Controller/Welcome.php(9): Base_DB_Connection_Pool->get_connection('default')
#9 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#15 {main} in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:47:25 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /srv/www/ittest/system/classes/Kohana/Arr.php on line 439 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:47:25 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/srv/www/ittest...', 30, Array)
#1 /srv/www/ittest/system/classes/Kohana/Arr.php(439): Kohana_Arr::is_assoc(1)
#2 /srv/www/ittest/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /srv/www/ittest/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(243): Kohana_Config->load('database.defaul...')
#5 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(73): Base_DB_DataSource::config('database.defaul...')
#6 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(257): Base_DB_DataSource->__construct('default')
#7 /srv/www/ittest/modules/leap/classes/Base/DB/Connection/Pool.php(169): Base_DB_DataSource::instance('default')
#8 /srv/www/ittest/application/classes/Controller/Welcome.php(9): Base_DB_Connection_Pool->get_connection('default')
#9 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#15 {main} in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:47:31 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /srv/www/ittest/system/classes/Kohana/Arr.php on line 439 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:47:31 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/srv/www/ittest...', 30, Array)
#1 /srv/www/ittest/system/classes/Kohana/Arr.php(439): Kohana_Arr::is_assoc(1)
#2 /srv/www/ittest/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /srv/www/ittest/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(243): Kohana_Config->load('database.defaul...')
#5 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(73): Base_DB_DataSource::config('database.defaul...')
#6 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(257): Base_DB_DataSource->__construct('default')
#7 /srv/www/ittest/modules/leap/classes/Base/DB/Connection/Pool.php(169): Base_DB_DataSource::instance('default')
#8 /srv/www/ittest/application/classes/Controller/Welcome.php(9): Base_DB_Connection_Pool->get_connection('default')
#9 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#15 {main} in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:47:32 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /srv/www/ittest/system/classes/Kohana/Arr.php on line 439 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:47:32 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/srv/www/ittest...', 30, Array)
#1 /srv/www/ittest/system/classes/Kohana/Arr.php(439): Kohana_Arr::is_assoc(1)
#2 /srv/www/ittest/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /srv/www/ittest/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(243): Kohana_Config->load('database.defaul...')
#5 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(73): Base_DB_DataSource::config('database.defaul...')
#6 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(257): Base_DB_DataSource->__construct('default')
#7 /srv/www/ittest/modules/leap/classes/Base/DB/Connection/Pool.php(169): Base_DB_DataSource::instance('default')
#8 /srv/www/ittest/application/classes/Controller/Welcome.php(9): Base_DB_Connection_Pool->get_connection('default')
#9 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#15 {main} in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:48:19 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /srv/www/ittest/system/classes/Kohana/Arr.php on line 439 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:48:19 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/srv/www/ittest...', 30, Array)
#1 /srv/www/ittest/system/classes/Kohana/Arr.php(439): Kohana_Arr::is_assoc(1)
#2 /srv/www/ittest/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /srv/www/ittest/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(243): Kohana_Config->load('database.defaul...')
#5 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(73): Base_DB_DataSource::config('database.defaul...')
#6 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(257): Base_DB_DataSource->__construct('default')
#7 /srv/www/ittest/modules/leap/classes/Base/DB/Connection/Pool.php(169): Base_DB_DataSource::instance('default')
#8 /srv/www/ittest/application/classes/Controller/Welcome.php(9): Base_DB_Connection_Pool->get_connection('default')
#9 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#15 {main} in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:48:19 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /srv/www/ittest/system/classes/Kohana/Arr.php on line 439 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:48:19 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/srv/www/ittest...', 30, Array)
#1 /srv/www/ittest/system/classes/Kohana/Arr.php(439): Kohana_Arr::is_assoc(1)
#2 /srv/www/ittest/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /srv/www/ittest/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(243): Kohana_Config->load('database.defaul...')
#5 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(73): Base_DB_DataSource::config('database.defaul...')
#6 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(257): Base_DB_DataSource->__construct('default')
#7 /srv/www/ittest/modules/leap/classes/Base/DB/Connection/Pool.php(169): Base_DB_DataSource::instance('default')
#8 /srv/www/ittest/application/classes/Controller/Welcome.php(9): Base_DB_Connection_Pool->get_connection('default')
#9 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#15 {main} in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:48:25 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /srv/www/ittest/system/classes/Kohana/Arr.php on line 439 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:48:25 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/srv/www/ittest...', 30, Array)
#1 /srv/www/ittest/system/classes/Kohana/Arr.php(439): Kohana_Arr::is_assoc(1)
#2 /srv/www/ittest/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /srv/www/ittest/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(243): Kohana_Config->load('database.defaul...')
#5 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(73): Base_DB_DataSource::config('database.defaul...')
#6 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(257): Base_DB_DataSource->__construct('default')
#7 /srv/www/ittest/modules/leap/classes/Base/DB/Connection/Pool.php(169): Base_DB_DataSource::instance('default')
#8 /srv/www/ittest/application/classes/Controller/Welcome.php(9): Base_DB_Connection_Pool->get_connection('default')
#9 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#15 {main} in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:48:27 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /srv/www/ittest/system/classes/Kohana/Arr.php on line 439 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:48:27 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/srv/www/ittest...', 30, Array)
#1 /srv/www/ittest/system/classes/Kohana/Arr.php(439): Kohana_Arr::is_assoc(1)
#2 /srv/www/ittest/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /srv/www/ittest/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(243): Kohana_Config->load('database.defaul...')
#5 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(73): Base_DB_DataSource::config('database.defaul...')
#6 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(257): Base_DB_DataSource->__construct('default')
#7 /srv/www/ittest/modules/leap/classes/Base/DB/Connection/Pool.php(169): Base_DB_DataSource::instance('default')
#8 /srv/www/ittest/application/classes/Controller/Welcome.php(9): Base_DB_Connection_Pool->get_connection('default')
#9 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#15 {main} in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:48:28 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /srv/www/ittest/system/classes/Kohana/Arr.php on line 439 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:48:28 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/srv/www/ittest...', 30, Array)
#1 /srv/www/ittest/system/classes/Kohana/Arr.php(439): Kohana_Arr::is_assoc(1)
#2 /srv/www/ittest/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /srv/www/ittest/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(243): Kohana_Config->load('database.defaul...')
#5 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(73): Base_DB_DataSource::config('database.defaul...')
#6 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(257): Base_DB_DataSource->__construct('default')
#7 /srv/www/ittest/modules/leap/classes/Base/DB/Connection/Pool.php(169): Base_DB_DataSource::instance('default')
#8 /srv/www/ittest/application/classes/Controller/Welcome.php(9): Base_DB_Connection_Pool->get_connection('default')
#9 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#15 {main} in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:49:36 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /srv/www/ittest/system/classes/Kohana/Arr.php on line 439 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:49:36 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/srv/www/ittest...', 30, Array)
#1 /srv/www/ittest/system/classes/Kohana/Arr.php(439): Kohana_Arr::is_assoc(1)
#2 /srv/www/ittest/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /srv/www/ittest/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(243): Kohana_Config->load('database.defaul...')
#5 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(73): Base_DB_DataSource::config('database.defaul...')
#6 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(257): Base_DB_DataSource->__construct('default')
#7 /srv/www/ittest/modules/leap/classes/Base/DB/Connection/Driver.php(331): Base_DB_DataSource::instance('default')
#8 /srv/www/ittest/application/classes/Controller/Welcome.php(9): Base_DB_Connection_Driver::factory('default')
#9 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#15 {main} in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:49:38 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /srv/www/ittest/system/classes/Kohana/Arr.php on line 439 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:49:38 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/srv/www/ittest...', 30, Array)
#1 /srv/www/ittest/system/classes/Kohana/Arr.php(439): Kohana_Arr::is_assoc(1)
#2 /srv/www/ittest/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /srv/www/ittest/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(243): Kohana_Config->load('database.defaul...')
#5 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(73): Base_DB_DataSource::config('database.defaul...')
#6 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(257): Base_DB_DataSource->__construct('default')
#7 /srv/www/ittest/modules/leap/classes/Base/DB/Connection/Driver.php(331): Base_DB_DataSource::instance('default')
#8 /srv/www/ittest/application/classes/Controller/Welcome.php(9): Base_DB_Connection_Driver::factory('default')
#9 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#15 {main} in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:49:38 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /srv/www/ittest/system/classes/Kohana/Arr.php on line 439 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:49:38 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/srv/www/ittest...', 30, Array)
#1 /srv/www/ittest/system/classes/Kohana/Arr.php(439): Kohana_Arr::is_assoc(1)
#2 /srv/www/ittest/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /srv/www/ittest/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(243): Kohana_Config->load('database.defaul...')
#5 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(73): Base_DB_DataSource::config('database.defaul...')
#6 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(257): Base_DB_DataSource->__construct('default')
#7 /srv/www/ittest/modules/leap/classes/Base/DB/Connection/Driver.php(331): Base_DB_DataSource::instance('default')
#8 /srv/www/ittest/application/classes/Controller/Welcome.php(9): Base_DB_Connection_Driver::factory('default')
#9 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#15 {main} in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:49:44 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /srv/www/ittest/system/classes/Kohana/Arr.php on line 439 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:49:44 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/srv/www/ittest...', 30, Array)
#1 /srv/www/ittest/system/classes/Kohana/Arr.php(439): Kohana_Arr::is_assoc(1)
#2 /srv/www/ittest/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /srv/www/ittest/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(243): Kohana_Config->load('database.defaul...')
#5 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(73): Base_DB_DataSource::config('database.defaul...')
#6 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(257): Base_DB_DataSource->__construct('default')
#7 /srv/www/ittest/modules/leap/classes/Base/DB/Connection/Driver.php(331): Base_DB_DataSource::instance('default')
#8 /srv/www/ittest/application/classes/Controller/Welcome.php(9): Base_DB_Connection_Driver::factory('default')
#9 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#15 {main} in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:49:45 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /srv/www/ittest/system/classes/Kohana/Arr.php on line 439 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:49:45 --- DEBUG: #0 /srv/www/ittest/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/srv/www/ittest...', 30, Array)
#1 /srv/www/ittest/system/classes/Kohana/Arr.php(439): Kohana_Arr::is_assoc(1)
#2 /srv/www/ittest/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /srv/www/ittest/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(243): Kohana_Config->load('database.defaul...')
#5 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(73): Base_DB_DataSource::config('database.defaul...')
#6 /srv/www/ittest/modules/leap/classes/Base/DB/DataSource.php(257): Base_DB_DataSource->__construct('default')
#7 /srv/www/ittest/modules/leap/classes/Base/DB/Connection/Driver.php(331): Base_DB_DataSource::instance('default')
#8 /srv/www/ittest/application/classes/Controller/Welcome.php(9): Base_DB_Connection_Driver::factory('default')
#9 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#15 {main} in /srv/www/ittest/system/classes/Kohana/Arr.php:30
2016-04-14 06:51:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/leap/classes/Base/DB/MySQL/Connection/Standard.php [ 162 ] in file:line
2016-04-14 06:51:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-14 06:51:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/leap/classes/Base/DB/MySQL/Connection/Standard.php [ 162 ] in file:line
2016-04-14 06:51:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-14 06:54:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/leap/classes/Base/DB/MySQL/Connection/Standard.php [ 162 ] in file:line
2016-04-14 06:54:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-14 06:55:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/leap/classes/Base/DB/MySQL/Connection/Standard.php [ 162 ] in file:line
2016-04-14 06:55:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-14 06:56:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/leap/classes/Base/DB/MySQL/Connection/Standard.php [ 162 ] in file:line
2016-04-14 06:56:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-14 06:56:59 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 06:56:59 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 06:57:35 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 06:57:35 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 06:57:36 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 06:57:36 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 06:58:15 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12541: TNS:no listener ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 06:58:15 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 06:58:16 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12541: TNS:no listener ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 06:58:16 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 06:58:22 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 06:58:22 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 06:58:47 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 06:58:47 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 06:58:48 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 06:58:48 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 06:59:25 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 06:59:25 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:00:25 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:00:25 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:00:28 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:00:28 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:00:33 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:00:33 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:00:35 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:00:35 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:00:57 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:00:57 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:01:11 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12541: TNS:no listener ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:01:11 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:01:20 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12541: TNS:no listener ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:01:20 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:01:21 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12541: TNS:no listener ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:01:21 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:01:32 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:01:32 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:01:33 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:01:33 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:01:44 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:01:44 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:01:48 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12154: TNS:could not resolve the connect identifier specified ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:01:48 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:01:48 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12154: TNS:could not resolve the connect identifier specified ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:01:48 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:01:55 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:01:55 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:01:58 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:01:58 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:02:22 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12154: TNS:could not resolve the connect identifier specified ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:02:22 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:02:28 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:02:28 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:02:29 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:02:29 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:02:30 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:02:30 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:02:37 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:02:37 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:02:38 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:02:38 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:02:45 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:02:45 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:03:06 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:03:06 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:03:11 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:03:11 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:03:12 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:03:12 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:03:42 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function open() on a non-object ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in file:line
2016-04-14 07:03:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-14 07:04:01 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function open() on a non-object ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in file:line
2016-04-14 07:04:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-14 07:05:07 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function open() on a non-object ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in file:line
2016-04-14 07:05:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-14 07:05:26 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:05:26 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:05:54 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/modules/leap/classes/Base/DB/Connection/Pool.php:198
2016-04-14 07:05:54 --- DEBUG: #0 /srv/www/ittest/modules/leap/classes/Base/DB/Connection/Pool.php(198): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/application/classes/Controller/Welcome.php(11): Base_DB_Connection_Pool->get_connection('default')
#2 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/ittest/modules/leap/classes/Base/DB/Connection/Pool.php:198
2016-04-14 07:07:48 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:07:48 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:07:50 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:07:50 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:07:59 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:07:59 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:08:04 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:08:04 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:08:05 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:08:05 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:08:06 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:08:06 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:08:06 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:08:06 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:08:10 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:08:10 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:09:53 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:09:53 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:10:06 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12541: TNS:no listener ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:10:06 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:10:10 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12541: TNS:no listener ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:10:10 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:10:11 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12541: TNS:no listener ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:10:11 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:10:26 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12154: TNS:could not resolve the connect identifier specified ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:10:26 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:10:29 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12154: TNS:could not resolve the connect identifier specified ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:10:29 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:10:30 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12154: TNS:could not resolve the connect identifier specified ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:10:30 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:10:36 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:10:36 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:10:40 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:10:40 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:10:50 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:10:50 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:11:07 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:11:07 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:11:27 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:11:27 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:11:49 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12154: TNS:could not resolve the connect identifier specified ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:11:49 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:11:50 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12154: TNS:could not resolve the connect identifier specified ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:11:50 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:12:14 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:12:14 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:12:22 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:12:22 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:13:47 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:13:47 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:14:34 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:14:34 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:15:37 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:15:37 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:19:56 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12154: TNS:could not resolve the connect identifier specified ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:19:56 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:20:00 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12154: TNS:could not resolve the connect identifier specified ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:20:00 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:20:51 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12154: TNS:could not resolve the connect identifier specified ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:20:51 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:20:56 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12154: TNS:could not resolve the connect identifier specified ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:20:56 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:20:57 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12154: TNS:could not resolve the connect identifier specified ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:20:57 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:21:30 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12154: TNS:could not resolve the connect identifier specified ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:21:30 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:21:39 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:21:39 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:21:40 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:21:40 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:21:48 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:21:48 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:21:49 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:21:49 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:33:19 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:33:19 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:36:58 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:36:58 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:40:27 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:40:27 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:40:51 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:40:51 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:41:16 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12541: TNS:no listener ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:41:16 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:41:31 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12169: TNS:Net service name given as connect identifier is too long ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:41:31 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:43:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/config/database.php [ 78 ] in file:line
2016-04-14 07:43:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-14 07:44:09 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-24415: Missing or null username. ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:44:09 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:45:10 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-24415: Missing or null username. ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:45:10 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:45:34 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-24415: Missing or null username. ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:45:34 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:45:59 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-24415: Missing or null username. ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:45:59 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:46:19 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-24415: Missing or null username. ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:46:19 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:47:41 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-24415: Missing or null username. ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:47:41 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:48:50 --- EMERGENCY: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-24415: Missing or null username. ~ MODPATH/leap/classes/Base/DB/Oracle/Connection/Standard.php [ 247 ] in /srv/www/ittest/application/classes/Controller/Welcome.php:10
2016-04-14 07:48:50 --- DEBUG: #0 /srv/www/ittest/application/classes/Controller/Welcome.php(10): Base_DB_Oracle_Connection_Standard->open()
#1 /srv/www/ittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/ittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /srv/www/ittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/ittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/ittest/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/ittest/application/classes/Controller/Welcome.php:10