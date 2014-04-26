<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-08 22:06:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Data.php [ 85 ] in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:85
2014-04-08 22:06:01 --- DEBUG: #0 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(85): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/content/0...', 85, Array)
#1 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(76): Controller_Data->makeRecursive(Array, 0)
#2 /home/content/08/11640208/html/dev/application/classes/Controller/Data.php(38): Controller_Data->createFeedJSON('16')
#3 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Data->action_loadposts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Data))
#6 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#9 {main} in /home/content/08/11640208/html/dev/application/classes/Controller/Data.php:85
2014-04-08 22:56:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_coupon' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-04-08 22:56:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-08 22:57:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_coupon' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-04-08 22:57:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-08 22:57:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_coupon' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-04-08 22:57:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-08 22:57:57 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'ensofobi.coupons' doesn't exist [ SHOW FULL COLUMNS FROM `coupons` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/MySQL.php:359
2014-04-08 22:57:57 --- DEBUG: #0 /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /home/content/08/11640208/html/dev/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('coupons')
#2 /home/content/08/11640208/html/dev/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home/content/08/11640208/html/dev/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home/content/08/11640208/html/dev/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home/content/08/11640208/html/dev/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /home/content/08/11640208/html/dev/application/classes/Controller/Admin.php(56): Kohana_ORM::factory('coupon')
#7 /home/content/08/11640208/html/dev/system/classes/Kohana/Controller.php(84): Controller_Admin->action_coupons()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/content/08/11640208/html/dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/content/08/11640208/html/dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/content/08/11640208/html/dev/index.php(118): Kohana_Request->execute()
#13 {main} in /home/content/08/11640208/html/dev/modules/database/classes/Kohana/Database/MySQL.php:359
2014-04-08 22:58:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH/classes/Controller/Admin.php [ 57 ] in file:line
2014-04-08 22:58:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line