<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-17 13:40:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/admin/body/merchandise.php [ 7 ] in file:line
2014-04-17 13:40:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-17 13:40:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/admin/body/merchandise.php [ 7 ] in file:line
2014-04-17 13:40:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-17 13:41:38 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/body/merchandise could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/content/08/11640208/html/dev/system/classes/Kohana/View.php:137
2014-04-17 13:41:38 --- DEBUG: #0 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(137): Kohana_View->set_filename('admin/body/merc...')
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/body/merc...', NULL)
#2 /home/content/08/11640208/html/dev/application/views/admin/index.php(50): Kohana_View::factory('admin/body/merc...')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(61): include('/home/content/0...')
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/0...', Array)
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#12 {main} in /home/content/08/11640208/html/dev/system/classes/Kohana/View.php:137
2014-04-17 14:05:25 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/body/merchandise could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/content/08/11640208/html/dev/system/classes/Kohana/View.php:137
2014-04-17 14:05:25 --- DEBUG: #0 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(137): Kohana_View->set_filename('admin/body/merc...')
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/body/merc...', NULL)
#2 /home/content/08/11640208/html/dev/application/views/admin/index.php(50): Kohana_View::factory('admin/body/merc...')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(61): include('/home/content/0...')
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/0...', Array)
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#12 {main} in /home/content/08/11640208/html/dev/system/classes/Kohana/View.php:137