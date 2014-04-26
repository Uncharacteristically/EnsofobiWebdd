<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-27 09:41:24 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'absolute_url' in 'field list' [ INSERT INTO `graphic_index` (`user_id`, `absolute_url`, `title`, `description`) VALUES ('27', '', 'test', 'testing') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php:251
2014-02-27 09:41:24 --- DEBUG: #0 /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `gr...', false, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(13): Kohana_Database_Query->execute()
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_video()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php:251
2014-02-27 10:20:42 --- EMERGENCY: ErrorException [ 2 ]: strpos() [function.strpos]: Offset not contained in string ~ APPPATH/classes/Controller/Photo.php [ 11 ] in file:line
2014-02-27 10:20:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() [<a hr...', '/home/content/0...', 11, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(11): strpos('', '"', 10)
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_video()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-02-27 10:29:21 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function str_len() ~ APPPATH/classes/Controller/Photo.php [ 13 ] in file:line
2014-02-27 10:29:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-27 10:29:37 --- EMERGENCY: ErrorException [ 2 ]: strpos() [function.strpos]: Offset not contained in string ~ APPPATH/classes/Controller/Photo.php [ 11 ] in file:line
2014-02-27 10:29:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() [<a hr...', '/home/content/0...', 11, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Photo.php(11): strpos('', '"', 5)
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Photo->action_video()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-02-27 16:51:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Data.php [ 58 ] in file:line
2014-02-27 16:51:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-27 16:52:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Data.php [ 58 ] in file:line
2014-02-27 16:52:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-27 16:52:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Data.php [ 58 ] in file:line
2014-02-27 16:52:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-27 16:53:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: author_user_id ~ APPPATH/classes/Controller/Data.php [ 50 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:50
2014-02-27 16:53:40 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(50): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 50, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('14')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:50
2014-02-27 16:53:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: author_user_id ~ APPPATH/classes/Controller/Data.php [ 50 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:50
2014-02-27 16:53:54 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(50): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 50, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('14')
#2 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#8 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:50
2014-02-27 16:54:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: parent_id ~ APPPATH/classes/Controller/Data.php [ 64 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:64
2014-02-27 16:54:33 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(64): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 64, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(59): Controller_Data->makeRecursive(Array, 0)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('14')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:64
2014-02-27 16:54:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: parent_id ~ APPPATH/classes/Controller/Data.php [ 64 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:64
2014-02-27 16:54:39 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(64): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/0...', 64, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(59): Controller_Data->makeRecursive(Array, 0)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('14')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:64
2014-02-27 16:57:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/database/classes/Kohana/Database.php [ 507 ] in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database.php:507
2014-02-27 16:57:21 --- DEBUG: #0 /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/content/0...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query/Builder/Select.php(354): array_map(Array, Array)
#3 /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(47): Kohana_Database_Query->execute()
#5 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('14')
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#9 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#12 {main} in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database.php:507
2014-02-27 16:57:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/database/classes/Kohana/Database.php [ 507 ] in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database.php:507
2014-02-27 16:57:34 --- DEBUG: #0 /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/content/0...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query/Builder/Select.php(354): array_map(Array, Array)
#3 /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(47): Kohana_Database_Query->execute()
#5 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('14')
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#9 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#12 {main} in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database.php:507
2014-02-27 16:57:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/database/classes/Kohana/Database.php [ 507 ] in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database.php:507
2014-02-27 16:57:36 --- DEBUG: #0 /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/content/0...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query/Builder/Select.php(354): array_map(Array, Array)
#3 /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(47): Kohana_Database_Query->execute()
#5 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('14')
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#9 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#12 {main} in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database.php:507
2014-02-27 16:58:38 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'profile.id' in 'field list' [ SELECT `feed_post`.*, `first_name_1`, `photo_name`, `profile`.`id` AS `profile_id` FROM `feed_post` LEFT JOIN `profiles` ON (`post_author_id` = `profiles`.`id`) LEFT JOIN `users` ON (`profiles`.`user_id` = `users`.`id`) JOIN `graphic_index` ON (`profiles`.`profile_photo_id` = `graphic_index`.`id`) WHERE `post_author_id` = '14' OR `post_recipient_id` = '14' ORDER BY `post_datetime` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php:251
2014-02-27 16:58:38 --- DEBUG: #0 /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `feed_po...', false, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(47): Kohana_Database_Query->execute()
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('14')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php:251
2014-02-27 16:58:40 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'profile.id' in 'field list' [ SELECT `feed_post`.*, `first_name_1`, `photo_name`, `profile`.`id` AS `profile_id` FROM `feed_post` LEFT JOIN `profiles` ON (`post_author_id` = `profiles`.`id`) LEFT JOIN `users` ON (`profiles`.`user_id` = `users`.`id`) JOIN `graphic_index` ON (`profiles`.`profile_photo_id` = `graphic_index`.`id`) WHERE `post_author_id` = '14' OR `post_recipient_id` = '14' ORDER BY `post_datetime` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php:251
2014-02-27 16:58:40 --- DEBUG: #0 /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `feed_po...', false, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(47): Kohana_Database_Query->execute()
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('14')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php:251
2014-02-27 16:58:42 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'profile.id' in 'field list' [ SELECT `feed_post`.*, `first_name_1`, `photo_name`, `profile`.`id` AS `profile_id` FROM `feed_post` LEFT JOIN `profiles` ON (`post_author_id` = `profiles`.`id`) LEFT JOIN `users` ON (`profiles`.`user_id` = `users`.`id`) JOIN `graphic_index` ON (`profiles`.`profile_photo_id` = `graphic_index`.`id`) WHERE `post_author_id` = '14' OR `post_recipient_id` = '14' ORDER BY `post_datetime` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php:251
2014-02-27 16:58:42 --- DEBUG: #0 /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `feed_po...', false, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(47): Kohana_Database_Query->execute()
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('14')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php:251
2014-02-27 16:59:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Data.php [ 69 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:69
2014-02-27 16:59:51 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(69): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/content/0...', 69, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(60): Controller_Data->makeRecursive(Array, 0)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('14')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:69
2014-02-27 16:59:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Data.php [ 69 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:69
2014-02-27 16:59:58 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(69): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/content/0...', 69, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(60): Controller_Data->makeRecursive(Array, 0)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('14')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:69
2014-02-27 17:00:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Data.php [ 69 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:69
2014-02-27 17:00:01 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(69): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/content/0...', 69, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(60): Controller_Data->makeRecursive(Array, 0)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('14')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:69
2014-02-27 17:00:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Data.php [ 69 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:69
2014-02-27 17:00:03 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(69): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/content/0...', 69, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(60): Controller_Data->makeRecursive(Array, 0)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('14')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:69
2014-02-27 17:49:48 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in field list is ambiguous [ SELECT `feed_post`.*, `first_name_1`, `photo_name`, `user_id` FROM `feed_post` LEFT JOIN `profiles` ON (`post_author_id` = `profiles`.`id`) LEFT JOIN `graphic_index` ON (`profiles`.`profile_photo_id` = `graphic_index`.`id`) WHERE `post_author_id` = '14' OR `post_recipient_id` = '14' ORDER BY `post_datetime` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php:251
2014-02-27 17:49:48 --- DEBUG: #0 /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `feed_po...', false, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(46): Kohana_Database_Query->execute()
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(22): Controller_Data->createFeedJSON('14')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/Query.php:251