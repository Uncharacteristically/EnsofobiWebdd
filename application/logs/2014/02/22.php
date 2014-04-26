<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-22 04:32:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/components/fobiFeed.php [ 101 ] in file:line
2014-02-22 04:32:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-22 04:34:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/components/fobiFeed.php [ 104 ] in file:line
2014-02-22 04:34:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-22 04:34:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/components/fobiFeed.php [ 104 ] in file:line
2014-02-22 04:34:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-22 04:34:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: feed ~ APPPATH/views/components/fobiFeed.php [ 86 ] in /home/content/08/11640208/html/dev/application/views/components/fobiFeed.php:86
2014-02-22 04:34:54 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/views/components/fobiFeed.php(86): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 86, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(61): include('/home/content/0...')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/0...', Array)
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/content/08/11640208/html/dev/application/views/admin.php(21): Kohana_View->__toString()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(61): include('/home/content/0...')
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/0...', Array)
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/content/08/11640208/html/dev/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /home/content/08/11640208/html/dev/modules/useradmin/classes/Useradmin/Controller/App.php(165): Kohana_Response->body(Object(View))
#10 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(87): Useradmin_Controller_App->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#16 {main} in /home/content/08/11640208/html/dev/application/views/components/fobiFeed.php:86
2014-02-22 04:35:21 --- EMERGENCY: View_Exception [ 0 ]: The requested view components/fobiFeed could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/content/08/11640208/html/dev/system/classes/Kohana/View.php:137
2014-02-22 04:35:21 --- DEBUG: #0 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(137): Kohana_View->set_filename('components/fobi...')
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(30): Kohana_View->__construct('components/fobi...', NULL)
#2 /home/content/08/11640208/html/dev/application/views/admin.php(21): Kohana_View::factory('components/fobi...')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(61): include('/home/content/0...')
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/0...', Array)
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#7 /home/content/08/11640208/html/dev/modules/useradmin/classes/Useradmin/Controller/App.php(165): Kohana_Response->body(Object(View))
#8 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(87): Useradmin_Controller_App->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#14 {main} in /home/content/08/11640208/html/dev/system/classes/Kohana/View.php:137
2014-02-22 05:10:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_FOREACH ~ APPPATH/classes/Controller/Data.php [ 45 ] in file:line
2014-02-22 05:10:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-22 05:11:11 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ']' ~ APPPATH/classes/Controller/Data.php [ 46 ] in file:line
2014-02-22 05:11:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-22 05:11:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: userId ~ APPPATH/classes/Controller/Data.php [ 21 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:21
2014-02-22 05:11:46 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 21, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#7 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:21
2014-02-22 05:12:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: output ~ APPPATH/classes/Controller/Data.php [ 85 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:85
2014-02-22 05:12:08 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(85): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 85, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('14')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:85
2014-02-22 05:12:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: output ~ APPPATH/classes/Controller/Data.php [ 85 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:85
2014-02-22 05:12:49 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(85): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 85, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('14')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:85
2014-02-22 05:15:15 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Data.php [ 83 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:83
2014-02-22 05:15:15 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(83): Kohana_Core::error_handler(4096, 'Object of class...', '/home/content/0...', 83, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('14')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:83
2014-02-22 05:15:16 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Data.php [ 83 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:83
2014-02-22 05:15:16 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(83): Kohana_Core::error_handler(4096, 'Object of class...', '/home/content/0...', 83, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('14')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:83
2014-02-22 05:15:18 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Data.php [ 83 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:83
2014-02-22 05:15:18 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(83): Kohana_Core::error_handler(4096, 'Object of class...', '/home/content/0...', 83, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('14')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:83
2014-02-22 05:15:20 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Data.php [ 83 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:83
2014-02-22 05:15:20 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(83): Kohana_Core::error_handler(4096, 'Object of class...', '/home/content/0...', 83, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('14')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:83
2014-02-22 05:44:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: post_id ~ APPPATH/classes/Controller/Data.php [ 94 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:94
2014-02-22 05:44:56 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(94): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 94, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(89): Controller_Data->buildTree(Array)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(25): Controller_Data->createFeedJSON('14')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:94
2014-02-22 05:45:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Controller/Data.php [ 94 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:94
2014-02-22 05:45:12 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(94): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 94, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(89): Controller_Data->buildTree(Array)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(25): Controller_Data->createFeedJSON('14')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:94
2014-02-22 05:45:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Controller/Data.php [ 94 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:94
2014-02-22 05:45:52 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(94): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 94, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(89): Controller_Data->buildTree(Array)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(25): Controller_Data->createFeedJSON('14')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:94
2014-02-22 05:46:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Controller/Data.php [ 94 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:94
2014-02-22 05:46:08 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(94): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 94, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(89): Controller_Data->buildTree(Array)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(25): Controller_Data->createFeedJSON('14')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:94
2014-02-22 05:48:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Controller/Data.php [ 96 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:96
2014-02-22 05:48:01 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(96): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 96, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(89): Controller_Data->buildTree(Array)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(25): Controller_Data->createFeedJSON('14')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:96
2014-02-22 05:51:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Controller/Data.php [ 96 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:96
2014-02-22 05:51:55 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(96): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 96, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(89): Controller_Data->buildTree(Array)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(25): Controller_Data->createFeedJSON('14')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:96
2014-02-22 05:52:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Controller/Data.php [ 96 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:96
2014-02-22 05:52:03 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(96): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 96, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(89): Controller_Data->buildTree(Array)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(25): Controller_Data->createFeedJSON('14')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:96
2014-02-22 05:54:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function buildTree() ~ APPPATH/classes/Controller/Data.php [ 98 ] in file:line
2014-02-22 05:54:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-22 05:55:02 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Data.php [ 96 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:96
2014-02-22 05:55:02 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(96): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/content/0...', 96, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(98): Controller_Data->buildTree(Array)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(89): Controller_Data->buildTree(Array)
#3 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(25): Controller_Data->createFeedJSON('14')
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#10 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:96
2014-02-22 05:55:03 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Data.php [ 96 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:96
2014-02-22 05:55:03 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(96): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/content/0...', 96, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(98): Controller_Data->buildTree(Array)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(89): Controller_Data->buildTree(Array)
#3 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(25): Controller_Data->createFeedJSON('14')
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#10 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:96
2014-02-22 05:55:06 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Data.php [ 96 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:96
2014-02-22 05:55:06 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(96): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/content/0...', 96, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(98): Controller_Data->buildTree(Array)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(89): Controller_Data->buildTree(Array)
#3 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(25): Controller_Data->createFeedJSON('14')
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#10 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:96
2014-02-22 05:55:08 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Data.php [ 96 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:96
2014-02-22 05:55:08 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(96): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/content/0...', 96, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(98): Controller_Data->buildTree(Array)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(89): Controller_Data->buildTree(Array)
#3 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(25): Controller_Data->createFeedJSON('14')
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#10 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:96
2014-02-22 05:55:37 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Data.php [ 96 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:96
2014-02-22 05:55:37 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(96): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/content/0...', 96, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(98): Controller_Data->buildTree(Array)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(89): Controller_Data->buildTree(Array)
#3 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(25): Controller_Data->createFeedJSON('14')
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#10 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:96
2014-02-22 05:55:39 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Data.php [ 96 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:96
2014-02-22 05:55:39 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(96): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/content/0...', 96, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(98): Controller_Data->buildTree(Array)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(89): Controller_Data->buildTree(Array)
#3 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(25): Controller_Data->createFeedJSON('14')
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#10 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:96
2014-02-22 05:55:40 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Data.php [ 96 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:96
2014-02-22 05:55:40 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(96): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/content/0...', 96, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(98): Controller_Data->buildTree(Array)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(89): Controller_Data->buildTree(Array)
#3 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(25): Controller_Data->createFeedJSON('14')
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#10 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:96
2014-02-22 06:41:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function addChildren() ~ APPPATH/classes/Controller/Data.php [ 90 ] in file:line
2014-02-22 06:41:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-22 06:41:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function addChildren() ~ APPPATH/classes/Controller/Data.php [ 90 ] in file:line
2014-02-22 06:41:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-22 09:41:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: post_parent_id ~ APPPATH/classes/Controller/Data.php [ 40 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:40
2014-02-22 09:41:02 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 40, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_feedpost()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#7 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:40
2014-02-22 09:41:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: post_parent_id ~ APPPATH/classes/Controller/Data.php [ 40 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:40
2014-02-22 09:41:41 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 40, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_feedpost()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#7 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:40
2014-02-22 09:42:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: post_parent_id ~ APPPATH/classes/Controller/Data.php [ 40 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:40
2014-02-22 09:42:00 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 40, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_feedpost()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#7 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:40
2014-02-22 12:38:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: submitButtonText ~ APPPATH/views/content/register.php [ 13 ] in /home/content/08/11640208/html/dev/application/views/content/register.php:13
2014-02-22 12:38:53 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/views/content/register.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 13, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(61): include('/home/content/0...')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/0...', Array)
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/content/08/11640208/html/dev/application/views/site.php(9): Kohana_View->__toString()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(61): include('/home/content/0...')
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/0...', Array)
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/content/08/11640208/html/dev/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /home/content/08/11640208/html/dev/modules/useradmin/classes/Useradmin/Controller/App.php(165): Kohana_Response->body(Object(View))
#10 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(87): Useradmin_Controller_App->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#16 {main} in /home/content/08/11640208/html/dev/application/views/content/register.php:13
2014-02-22 12:39:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: submitButtonText ~ APPPATH/views/content/register.php [ 13 ] in /home/content/08/11640208/html/dev/application/views/content/register.php:13
2014-02-22 12:39:01 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/views/content/register.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 13, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(61): include('/home/content/0...')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/0...', Array)
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/content/08/11640208/html/dev/application/views/site.php(9): Kohana_View->__toString()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(61): include('/home/content/0...')
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/0...', Array)
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/content/08/11640208/html/dev/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /home/content/08/11640208/html/dev/modules/useradmin/classes/Useradmin/Controller/App.php(165): Kohana_Response->body(Object(View))
#10 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(87): Useradmin_Controller_App->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#16 {main} in /home/content/08/11640208/html/dev/application/views/content/register.php:13
2014-02-22 12:39:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: submitButtonText ~ APPPATH/views/content/register.php [ 13 ] in /home/content/08/11640208/html/dev/application/views/content/register.php:13
2014-02-22 12:39:07 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/views/content/register.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 13, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(61): include('/home/content/0...')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/0...', Array)
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/content/08/11640208/html/dev/application/views/site.php(9): Kohana_View->__toString()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(61): include('/home/content/0...')
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/0...', Array)
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/content/08/11640208/html/dev/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /home/content/08/11640208/html/dev/modules/useradmin/classes/Useradmin/Controller/App.php(165): Kohana_Response->body(Object(View))
#10 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(87): Useradmin_Controller_App->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#16 {main} in /home/content/08/11640208/html/dev/application/views/content/register.php:13
2014-02-22 14:01:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Data.php [ 60 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:60
2014-02-22 14:01:44 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(60): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/content/0...', 60, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(51): Controller_Data->makeRecursive(Array, 0)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('8')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:60