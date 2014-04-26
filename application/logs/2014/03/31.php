<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-31 16:18:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Data.php [ 85 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:85
2014-03-31 16:18:09 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(85): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/content/0...', 85, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(76): Controller_Data->makeRecursive(Array, 0)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(38): Controller_Data->createFeedJSON('15')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:85
2014-03-31 17:15:32 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/body/communication/inboxcontent could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/content/08/11640208/html/dev/system/classes/Kohana/View.php:137
2014-03-31 17:15:32 --- DEBUG: #0 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(137): Kohana_View->set_filename('admin/body/comm...')
#1 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/body/comm...', NULL)
#2 /home/content/08/11640208/html/dev/application/views/admin/body/communication/inboxbody.php(6): Kohana_View::factory('admin/body/comm...')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(61): include('/home/content/0...')
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/0...', Array)
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /home/content/08/11640208/html/dev/application/views/admin/body/communication.php(21): Kohana_View->__toString()
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(61): include('/home/content/0...')
#8 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/0...', Array)
#9 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(228): Kohana_View->render()
#10 /home/content/08/11640208/html/dev/application/views/admin/index.php(31): Kohana_View->__toString()
#11 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(61): include('/home/content/0...')
#12 /home/content/08/11640208/html/dev/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/0...', Array)
#13 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#14 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#17 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#20 {main} in /home/content/08/11640208/html/dev/system/classes/Kohana/View.php:137
2014-03-31 18:25:04 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Database_Query_Builder_Select as array ~ APPPATH/classes/Controller/Communication.php [ 54 ] in file:line
2014-03-31 18:25:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 18:26:03 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Database_Query_Builder_Select as array ~ APPPATH/classes/Controller/Communication.php [ 54 ] in file:line
2014-03-31 18:26:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 18:27:34 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Database_Query_Builder_Select as array ~ APPPATH/classes/Controller/Communication.php [ 54 ] in file:line
2014-03-31 18:27:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 18:32:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: keyword ~ APPPATH/classes/Controller/Communication.php [ 126 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:126
2014-03-31 18:32:51 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(126): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 126, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(106): Controller_Communication->messageDetail('11')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Communication->action_showmessage()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Communication))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:126
2014-03-31 18:32:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: keyword ~ APPPATH/classes/Controller/Communication.php [ 126 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:126
2014-03-31 18:32:55 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(126): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 126, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(106): Controller_Communication->messageDetail('11')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Communication->action_showmessage()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Communication))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:126
2014-03-31 18:32:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: keyword ~ APPPATH/classes/Controller/Communication.php [ 126 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:126
2014-03-31 18:32:55 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(126): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 126, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(106): Controller_Communication->messageDetail('15')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Communication->action_showmessage()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Communication))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:126
2014-03-31 18:33:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: keyword ~ APPPATH/classes/Controller/Communication.php [ 126 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:126
2014-03-31 18:33:16 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(126): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 126, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(106): Controller_Communication->messageDetail('11')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Communication->action_showmessage()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Communication))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:126
2014-03-31 18:33:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: keyword ~ APPPATH/classes/Controller/Communication.php [ 126 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:126
2014-03-31 18:33:48 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(126): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 126, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(106): Controller_Communication->messageDetail('11')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Communication->action_showmessage()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Communication))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:126
2014-03-31 18:34:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: keyword ~ APPPATH/classes/Controller/Communication.php [ 126 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:126
2014-03-31 18:34:01 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(126): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 126, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(106): Controller_Communication->messageDetail('11')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Communication->action_showmessage()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Communication))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php:126
2014-03-31 18:34:40 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'keywprd' in 'field list' [ SELECT `message`.`id`, `subject`, `body`, `first_name_1`, `last_name_1`, `sender_id`, `price_range`, `keywprd` FROM `message` LEFT JOIN `profiles` ON (`sender_id` = `user_id`) LEFT JOIN `price_range` ON (`price_range_id` = `price_range`.`id`) WHERE `message`.`id` = '11' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php:251
2014-03-31 18:34:40 --- DEBUG: #0 /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `message...', false, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(116): Kohana_Database_Query->execute()
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(106): Controller_Communication->messageDetail('11')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Communication->action_showmessage()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Communication))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php:251
2014-03-31 18:34:42 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'keywprd' in 'field list' [ SELECT `message`.`id`, `subject`, `body`, `first_name_1`, `last_name_1`, `sender_id`, `price_range`, `keywprd` FROM `message` LEFT JOIN `profiles` ON (`sender_id` = `user_id`) LEFT JOIN `price_range` ON (`price_range_id` = `price_range`.`id`) WHERE `message`.`id` = '11' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php:251
2014-03-31 18:34:42 --- DEBUG: #0 /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `message...', false, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(116): Kohana_Database_Query->execute()
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(106): Controller_Communication->messageDetail('11')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Communication->action_showmessage()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Communication))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php:251
2014-03-31 18:34:54 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'keywprd' in 'field list' [ SELECT `message`.`id`, `subject`, `body`, `first_name_1`, `last_name_1`, `sender_id`, `price_range`, `keywprd` FROM `message` LEFT JOIN `profiles` ON (`sender_id` = `user_id`) LEFT JOIN `price_range` ON (`price_range_id` = `price_range`.`id`) WHERE `message`.`id` = '11' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php:251
2014-03-31 18:34:54 --- DEBUG: #0 /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `message...', false, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(116): Kohana_Database_Query->execute()
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(106): Controller_Communication->messageDetail('11')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Communication->action_showmessage()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Communication))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php:251
2014-03-31 18:35:01 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'keywprd' in 'field list' [ SELECT `message`.`id`, `subject`, `body`, `first_name_1`, `last_name_1`, `sender_id`, `price_range`, `keywprd` FROM `message` LEFT JOIN `profiles` ON (`sender_id` = `user_id`) LEFT JOIN `price_range` ON (`price_range_id` = `price_range`.`id`) WHERE `message`.`id` = '11' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php:251
2014-03-31 18:35:01 --- DEBUG: #0 /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `message...', false, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(116): Kohana_Database_Query->execute()
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Communication.php(106): Controller_Communication->messageDetail('11')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Communication->action_showmessage()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Communication))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php:251
2014-03-31 18:36:46 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Database_Query_Builder_Select as array ~ APPPATH/classes/Controller/Communication.php [ 54 ] in file:line
2014-03-31 18:36:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 19:46:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Communication::getTree() ~ APPPATH/classes/Controller/Communication.php [ 134 ] in file:line
2014-03-31 19:46:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 19:46:35 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Communication::getTree() ~ APPPATH/classes/Controller/Communication.php [ 134 ] in file:line
2014-03-31 19:46:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 19:46:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Communication::getTree() ~ APPPATH/classes/Controller/Communication.php [ 134 ] in file:line
2014-03-31 19:46:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 19:46:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Communication::getTree() ~ APPPATH/classes/Controller/Communication.php [ 134 ] in file:line
2014-03-31 19:46:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 19:47:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Communication::getTree() ~ APPPATH/classes/Controller/Communication.php [ 134 ] in file:line
2014-03-31 19:47:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 19:47:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Communication::getTree() ~ APPPATH/classes/Controller/Communication.php [ 134 ] in file:line
2014-03-31 19:47:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 19:48:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Communication::getTree() ~ APPPATH/classes/Controller/Communication.php [ 134 ] in file:line
2014-03-31 19:48:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 19:48:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Communication::getTree() ~ APPPATH/classes/Controller/Communication.php [ 134 ] in file:line
2014-03-31 19:48:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 19:48:28 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Communication::getTree() ~ APPPATH/classes/Controller/Communication.php [ 134 ] in file:line
2014-03-31 19:48:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 19:48:35 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Communication::getTree() ~ APPPATH/classes/Controller/Communication.php [ 134 ] in file:line
2014-03-31 19:48:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 19:49:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Communication::getTree() ~ APPPATH/classes/Controller/Communication.php [ 134 ] in file:line
2014-03-31 19:49:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 19:49:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Communication::getTree() ~ APPPATH/classes/Controller/Communication.php [ 134 ] in file:line
2014-03-31 19:49:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 20:40:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Data.php [ 85 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:85
2014-03-31 20:40:14 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(85): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/content/0...', 85, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(76): Controller_Data->makeRecursive(Array, 0)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(38): Controller_Data->createFeedJSON('16')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:85