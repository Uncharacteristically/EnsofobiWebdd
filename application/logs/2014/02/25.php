<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-25 15:45:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH/views/components/myphotouploader.php [ 4 ] in /home/content/08/11640208/html/dev/application/views/components/myphotouploader.php:4
2014-02-25 15:45:14 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/views/components/myphotouploader.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 4, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(61): include('/home/content/0...')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/0...', Array)
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/content/08/11640208/html/dev/application/views/components/myphotomanager.php(15): Kohana_View->__toString()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(61): include('/home/content/0...')
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/0...', Array)
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/content/08/11640208/html/dev/application/views/admin.php(23): Kohana_View->__toString()
#9 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(61): include('/home/content/0...')
#10 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/0...', Array)
#11 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(228): Kohana_View->render()
#12 /home/content/08/11640208/html/dev/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#13 /home/content/08/11640208/html/dev/modules/useradmin/classes/Useradmin/Controller/App.php(165): Kohana_Response->body(Object(View))
#14 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(87): Useradmin_Controller_App->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#17 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#20 {main} in /home/content/08/11640208/html/dev/application/views/components/myphotouploader.php:4
2014-02-25 15:54:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: submitButtonText ~ APPPATH/views/content/register.php [ 13 ] in /home/content/08/11640208/html/dev/application/views/content/register.php:13
2014-02-25 15:54:02 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/views/content/register.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 13, Array)
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
2014-02-25 15:56:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/views/content/register.php [ 13 ] in file:line
2014-02-25 15:56:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 15:56:12 --- EMERGENCY: View_Exception [ 0 ]: The requested view content/register could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/content/08/11640208/html/dev/system/classes/Kohana/View.php:137
2014-02-25 15:56:12 --- DEBUG: #0 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(137): Kohana_View->set_filename('content/registe...')
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(30): Kohana_View->__construct('content/registe...', NULL)
#2 /home/content/08/11640208/html/dev/modules/useradmin/classes/Useradmin/Controller/User.php(196): Kohana_View::factory('content/registe...')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Useradmin_Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/system/classes/Kohana/View.php:137
2014-02-25 15:56:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Data.php [ 60 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:60
2014-02-25 15:56:42 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(60): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/content/0...', 60, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(51): Controller_Data->makeRecursive(Array, 0)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('15')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:60
2014-02-25 16:24:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/ajax.php [ 7 ] in /home/content/08/11640208/html/dev/application/views/ajax.php:7
2014-02-25 16:24:29 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/views/ajax.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 7, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(61): include('/home/content/0...')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/0...', Array)
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#10 {main} in /home/content/08/11640208/html/dev/application/views/ajax.php:7
2014-02-25 16:24:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/ajax.php [ 7 ] in /home/content/08/11640208/html/dev/application/views/ajax.php:7
2014-02-25 16:24:31 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/views/ajax.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 7, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(61): include('/home/content/0...')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/0...', Array)
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#10 {main} in /home/content/08/11640208/html/dev/application/views/ajax.php:7
2014-02-25 16:39:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH/classes/Controller/Photo.php [ 13 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:13
2014-02-25 16:39:26 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 13, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_categorize()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#7 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:13
2014-02-25 16:39:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH/classes/Controller/Photo.php [ 13 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:13
2014-02-25 16:39:31 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 13, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_categorize()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#7 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:13
2014-02-25 16:39:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH/classes/Controller/Photo.php [ 13 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:13
2014-02-25 16:39:42 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 13, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_categorize()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#7 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:13
2014-02-25 18:09:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: photoimg ~ APPPATH/classes/Controller/Photo.php [ 31 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:31
2014-02-25 18:09:00 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 31, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#7 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:31
2014-02-25 18:10:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: photoimg ~ APPPATH/classes/Controller/Photo.php [ 31 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:31
2014-02-25 18:10:04 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 31, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#7 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:31
2014-02-25 18:10:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: photoimg ~ APPPATH/classes/Controller/Photo.php [ 31 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:31
2014-02-25 18:10:06 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 31, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#7 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:31
2014-02-25 18:20:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_FUNCTION ~ APPPATH/classes/Controller/Photo.php [ 72 ] in file:line
2014-02-25 18:20:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 18:20:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_FUNCTION ~ APPPATH/classes/Controller/Photo.php [ 72 ] in file:line
2014-02-25 18:20:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 18:21:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/ajax.php [ 7 ] in /home/content/08/11640208/html/dev/application/views/ajax.php:7
2014-02-25 18:21:50 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/views/ajax.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 7, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(61): include('/home/content/0...')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/0...', Array)
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#10 {main} in /home/content/08/11640208/html/dev/application/views/ajax.php:7
2014-02-25 18:23:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_FUNCTION ~ APPPATH/classes/Controller/Photo.php [ 78 ] in file:line
2014-02-25 18:23:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 18:24:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_FUNCTION ~ APPPATH/classes/Controller/Photo.php [ 82 ] in file:line
2014-02-25 18:24:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 18:24:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_FUNCTION ~ APPPATH/classes/Controller/Photo.php [ 82 ] in file:line
2014-02-25 18:24:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 18:25:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_FUNCTION ~ APPPATH/classes/Controller/Photo.php [ 83 ] in file:line
2014-02-25 18:25:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 18:25:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_FUNCTION ~ APPPATH/classes/Controller/Photo.php [ 83 ] in file:line
2014-02-25 18:25:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 18:26:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/Controller/Photo.php [ 83 ] in file:line
2014-02-25 18:26:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 18:26:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/Controller/Photo.php [ 83 ] in file:line
2014-02-25 18:26:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 18:26:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/Controller/Photo.php [ 83 ] in file:line
2014-02-25 18:26:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 18:26:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/Controller/Photo.php [ 83 ] in file:line
2014-02-25 18:26:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 18:34:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function getExtension() ~ APPPATH/classes/Controller/Photo.php [ 38 ] in file:line
2014-02-25 18:34:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 18:35:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function getExtension() ~ APPPATH/classes/Controller/Photo.php [ 38 ] in file:line
2014-02-25 18:35:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 18:37:00 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getFilename() on a non-object ~ APPPATH/classes/Controller/Photo.php [ 38 ] in file:line
2014-02-25 18:37:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 18:39:10 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant MAX_SIZE - assumed 'MAX_SIZE' ~ APPPATH/classes/Controller/Photo.php [ 43 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:43
2014-02-25 18:39:10 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(43): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/content/0...', 43, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#7 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:43
2014-02-25 18:41:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: uploaddir ~ APPPATH/classes/Controller/Photo.php [ 49 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:49
2014-02-25 18:41:51 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 49, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#7 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:49
2014-02-25 18:43:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: uploaddir ~ APPPATH/classes/Controller/Photo.php [ 49 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:49
2014-02-25 18:43:06 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 49, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#7 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:49
2014-02-25 18:47:20 --- EMERGENCY: ErrorException [ 2 ]: move_uploaded_file(/uploads/271393375640color-palette.jpg) [function.move-uploaded-file]: failed to open stream: No such file or directory ~ APPPATH/classes/Controller/Photo.php [ 53 ] in file:line
2014-02-25 18:47:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', '/home/content/0...', 53, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(53): move_uploaded_file('/tmp/phpCby9Fk', '/uploads/271393...')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-02-25 18:54:58 --- EMERGENCY: ErrorException [ 2 ]: mkdir() [function.mkdir]: No such file or directory ~ APPPATH/classes/Controller/Photo.php [ 24 ] in file:line
2014-02-25 18:54:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir() [<a hre...', '/home/content/0...', 24, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(24): mkdir(' /home/content/...')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-02-25 19:01:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: preview ~ APPPATH/classes/Controller/Photo.php [ 43 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:43
2014-02-25 19:01:31 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(43): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 43, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#7 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:43
2014-02-25 19:07:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: preview ~ APPPATH/classes/Controller/Photo.php [ 75 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:75
2014-02-25 19:07:28 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(75): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 75, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#7 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:75
2014-02-25 19:16:53 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'ensofobi.graphics_index' doesn't exist [ INSERT INTO `graphics_index` (`user_id`, `photo_name`, `category`) VALUES ('27', '1393377413color-palette.jpg', 'uncategorized') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php:251
2014-02-25 19:16:53 --- DEBUG: #0 /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `gr...', false, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(51): Kohana_Database_Query->execute()
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php:251
2014-02-25 20:42:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: out ~ APPPATH/classes/Controller/Photo.php [ 17 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:17
2014-02-25 20:42:41 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 17, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#7 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:17
2014-02-25 21:05:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: out ~ APPPATH/classes/Controller/Photo.php [ 17 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:17
2014-02-25 21:05:54 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 17, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#7 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:17
2014-02-25 21:06:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: out ~ APPPATH/classes/Controller/Photo.php [ 17 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:17
2014-02-25 21:06:04 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 17, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#7 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:17
2014-02-25 22:54:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: out ~ APPPATH/classes/Controller/Photo.php [ 17 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:17
2014-02-25 22:54:28 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 17, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#7 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:17