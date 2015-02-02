<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-23 06:45:38 --- EMERGENCY: View_Exception [ 0 ]: The requested view new_template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php:145
2015-01-23 06:45:38 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php(145): Kohana_View->set_filename('new_template')
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php(30): Kohana_View->__construct('new_template', NULL)
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Welcome.php(7): Kohana_View::factory('new_template')
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#9 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php:145
2015-01-23 07:10:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: From ~ APPPATH/classes/Controller/Ajax.php [ 161 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:161
2015-01-23 07:10:53 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(161): Kohana_Core::error_handler(8, 'Undefined index...', '/home/d1man/dom...', 161, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_initCalcExchangeValues()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:161
2015-01-23 07:10:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: From ~ APPPATH/classes/Controller/Ajax.php [ 161 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:161
2015-01-23 07:10:53 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(161): Kohana_Core::error_handler(8, 'Undefined index...', '/home/d1man/dom...', 161, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_initCalcExchangeValues()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:161
2015-01-23 07:10:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: From ~ APPPATH/classes/Controller/Ajax.php [ 161 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:161
2015-01-23 07:10:55 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(161): Kohana_Core::error_handler(8, 'Undefined index...', '/home/d1man/dom...', 161, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_initCalcExchangeValues()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:161
2015-01-23 07:11:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{', expecting ']' ~ APPPATH/classes/Controller/Ajax.php [ 161 ] in file:line
2015-01-23 07:11:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-23 07:30:46 --- EMERGENCY: View_Exception [ 0 ]: The requested view new_template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php:145
2015-01-23 07:30:46 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php(145): Kohana_View->set_filename('new_template')
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php(30): Kohana_View->__construct('new_template', NULL)
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Welcome.php(7): Kohana_View::factory('new_template')
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#9 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php:145
2015-01-23 07:33:13 --- EMERGENCY: View_Exception [ 0 ]: The requested view new_template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php:145
2015-01-23 07:33:13 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php(145): Kohana_View->set_filename('new_template')
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php(30): Kohana_View->__construct('new_template', NULL)
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Welcome.php(7): Kohana_View::factory('new_template')
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#9 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php:145
2015-01-23 07:33:37 --- EMERGENCY: View_Exception [ 0 ]: The requested view new_template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php:145
2015-01-23 07:33:37 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php(145): Kohana_View->set_filename('new_template')
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php(30): Kohana_View->__construct('new_template', NULL)
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Welcome.php(7): Kohana_View::factory('new_template')
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#9 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php:145
2015-01-23 08:08:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Ajax.php [ 170 ] in file:line
2015-01-23 08:08:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-23 08:08:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Ajax.php [ 170 ] in file:line
2015-01-23 08:08:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-23 08:08:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Ajax.php [ 170 ] in file:line
2015-01-23 08:08:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-23 08:38:20 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Propel\Runtime\ActiveQuery\Criteria::getValue(), called in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php on line 172 and defined ~ DOCROOT/vendor/propel/propel/src/Propel/Runtime/ActiveQuery/Criteria.php [ 695 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/vendor/propel/propel/src/Propel/Runtime/ActiveQuery/Criteria.php:695
2015-01-23 08:38:20 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/vendor/propel/propel/src/Propel/Runtime/ActiveQuery/Criteria.php(695): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/d1man/dom...', 695, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(172): Propel\Runtime\ActiveQuery\Criteria->getValue()
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_initCalcExchangeValues()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#8 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/vendor/propel/propel/src/Propel/Runtime/ActiveQuery/Criteria.php:695
2015-01-23 08:38:21 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Propel\Runtime\ActiveQuery\Criteria::getValue(), called in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php on line 172 and defined ~ DOCROOT/vendor/propel/propel/src/Propel/Runtime/ActiveQuery/Criteria.php [ 695 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/vendor/propel/propel/src/Propel/Runtime/ActiveQuery/Criteria.php:695
2015-01-23 08:38:21 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/vendor/propel/propel/src/Propel/Runtime/ActiveQuery/Criteria.php(695): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/d1man/dom...', 695, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(172): Propel\Runtime\ActiveQuery\Criteria->getValue()
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_initCalcExchangeValues()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#8 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/vendor/propel/propel/src/Propel/Runtime/ActiveQuery/Criteria.php:695
2015-01-23 08:39:23 --- EMERGENCY: Propel\Runtime\Exception\PropelException [ 0 ]: Undefined method Propel\Runtime\ActiveQuery\ModelCriteria::toArray() ~ DOCROOT/vendor/propel/propel/src/Propel/Runtime/ActiveQuery/ModelCriteria.php [ 2055 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:170
2015-01-23 08:39:23 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(170): Propel\Runtime\ActiveQuery\ModelCriteria->__call('toArray', Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(170): Model\ExchangeRatesQuery->toArray()
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_initCalcExchangeValues()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#8 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:170
2015-01-23 08:39:25 --- EMERGENCY: Propel\Runtime\Exception\PropelException [ 0 ]: Undefined method Propel\Runtime\ActiveQuery\ModelCriteria::toArray() ~ DOCROOT/vendor/propel/propel/src/Propel/Runtime/ActiveQuery/ModelCriteria.php [ 2055 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:170
2015-01-23 08:39:25 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(170): Propel\Runtime\ActiveQuery\ModelCriteria->__call('toArray', Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(170): Model\ExchangeRatesQuery->toArray()
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_initCalcExchangeValues()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#8 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:170
2015-01-23 08:39:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: P24uah ~ APPPATH/classes/Controller/Ajax.php [ 172 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:172
2015-01-23 08:39:39 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(172): Kohana_Core::error_handler(8, 'Undefined index...', '/home/d1man/dom...', 172, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_initCalcExchangeValues()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:172
2015-01-23 08:39:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: P24uah ~ APPPATH/classes/Controller/Ajax.php [ 172 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:172
2015-01-23 08:39:40 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(172): Kohana_Core::error_handler(8, 'Undefined index...', '/home/d1man/dom...', 172, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_initCalcExchangeValues()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:172
2015-01-23 08:40:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: From ~ APPPATH/classes/Controller/Ajax.php [ 172 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:172
2015-01-23 08:40:36 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(172): Kohana_Core::error_handler(8, 'Undefined index...', '/home/d1man/dom...', 172, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_initCalcExchangeValues()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:172
2015-01-23 08:40:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: From ~ APPPATH/classes/Controller/Ajax.php [ 172 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:172
2015-01-23 08:40:37 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(172): Kohana_Core::error_handler(8, 'Undefined index...', '/home/d1man/dom...', 172, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_initCalcExchangeValues()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:172
2015-01-23 08:40:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: From ~ APPPATH/classes/Controller/Ajax.php [ 172 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:172
2015-01-23 08:40:40 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(172): Kohana_Core::error_handler(8, 'Undefined index...', '/home/d1man/dom...', 172, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_initCalcExchangeValues()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:172