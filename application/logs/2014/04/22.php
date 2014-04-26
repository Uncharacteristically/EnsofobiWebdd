<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-22 22:23:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: keywords ~ APPPATH/classes/Controller/Keyword.php [ 101 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Keyword.php:101
2014-04-22 22:23:20 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Keyword.php(101): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 101, Array)
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Keyword->action_select2()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Keyword))
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#7 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Keyword.php:101