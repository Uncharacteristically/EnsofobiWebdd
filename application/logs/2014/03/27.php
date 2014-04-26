<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-27 23:07:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Data.php [ 85 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:85
2014-03-27 23:07:51 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(85): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/content/0...', 85, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(76): Controller_Data->makeRecursive(Array, 0)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(38): Controller_Data->createFeedJSON('16')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:85
2014-03-27 23:07:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: countout ~ APPPATH/classes/Controller/Photo.php [ 77 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:77
2014-03-27 23:07:51 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(77): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 77, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(86): Controller_Photo->getPhotos()
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:77
2014-03-27 23:07:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: received ~ APPPATH/classes/Controller/Communication.php [ 124 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:124
2014-03-27 23:07:51 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 124, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(41): Controller_Communication->listMessages()
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Communication->action_listmessage()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Communication))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:124
2014-03-27 23:09:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Data.php [ 85 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:85
2014-03-27 23:09:36 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(85): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/content/0...', 85, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(76): Controller_Data->makeRecursive(Array, 0)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(38): Controller_Data->createFeedJSON('17')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:85
2014-03-27 23:09:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: countout ~ APPPATH/classes/Controller/Photo.php [ 77 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:77
2014-03-27 23:09:36 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(77): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 77, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(86): Controller_Photo->getPhotos()
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:77
2014-03-27 23:09:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: received ~ APPPATH/classes/Controller/Communication.php [ 124 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:124
2014-03-27 23:09:36 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 124, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(41): Controller_Communication->listMessages()
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Communication->action_listmessage()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Communication))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:124
2014-03-27 23:10:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: countout ~ APPPATH/classes/Controller/Photo.php [ 77 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:77
2014-03-27 23:10:02 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(77): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 77, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(86): Controller_Photo->getPhotos()
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:77
2014-03-27 23:10:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: received ~ APPPATH/classes/Controller/Communication.php [ 124 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:124
2014-03-27 23:10:03 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 124, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(41): Controller_Communication->listMessages()
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Communication->action_listmessage()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Communication))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:124
2014-03-27 23:36:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: countout ~ APPPATH/classes/Controller/Photo.php [ 77 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:77
2014-03-27 23:36:35 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(77): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 77, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(86): Controller_Photo->getPhotos()
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:77
2014-03-27 23:38:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: countout ~ APPPATH/classes/Controller/Photo.php [ 77 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:77
2014-03-27 23:38:49 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(77): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/0...', 77, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(86): Controller_Photo->getPhotos()
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php:77
2014-03-27 23:38:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: received ~ APPPATH/classes/Controller/Communication.php [ 124 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:124
2014-03-27 23:38:49 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 124, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(41): Controller_Communication->listMessages()
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Communication->action_listmessage()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Communication))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:124
2014-03-27 23:39:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: received ~ APPPATH/classes/Controller/Communication.php [ 124 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:124
2014-03-27 23:39:41 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 124, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(41): Controller_Communication->listMessages()
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Communication->action_listmessage()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Communication))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:124
2014-03-27 23:40:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: received ~ APPPATH/classes/Controller/Communication.php [ 124 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:124
2014-03-27 23:40:07 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 124, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(41): Controller_Communication->listMessages()
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Communication->action_listmessage()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Communication))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:124
2014-03-27 23:40:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: received ~ APPPATH/classes/Controller/Communication.php [ 124 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:124
2014-03-27 23:40:37 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 124, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(41): Controller_Communication->listMessages()
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Communication->action_listmessage()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Communication))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:124
2014-03-27 23:44:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: received ~ APPPATH/classes/Controller/Communication.php [ 124 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:124
2014-03-27 23:44:09 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 124, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(41): Controller_Communication->listMessages()
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Communication->action_listmessage()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Communication))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:124
2014-03-27 23:45:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: received ~ APPPATH/classes/Controller/Communication.php [ 124 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:124
2014-03-27 23:45:39 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 124, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(41): Controller_Communication->listMessages()
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Communication->action_listmessage()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Communication))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:124
2014-03-27 23:46:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: received ~ APPPATH/classes/Controller/Communication.php [ 124 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:124
2014-03-27 23:46:28 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 124, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(41): Controller_Communication->listMessages()
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Communication->action_listmessage()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Communication))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:124
2014-03-27 23:50:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Data.php [ 85 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:85
2014-03-27 23:50:43 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(85): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/content/0...', 85, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(76): Controller_Data->makeRecursive(Array, 0)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(38): Controller_Data->createFeedJSON('17')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:85