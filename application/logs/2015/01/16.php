<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-16 17:15:56 --- CRITICAL: Exception [ 0 ]: error ~ APPPATH\classes\Controller\Paymentprocess.php [ 20 ] in E:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php:84
2015-01-16 17:15:56 --- DEBUG: #0 E:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_Paymentprocess->action_webmoney()
#1 [internal function]: Kohana_Controller->execute()
#2 E:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#3 E:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 E:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#5 E:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#6 {main} in E:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php:84
2015-01-16 17:17:06 --- CRITICAL: Exception [ 0 ]: Bad request ~ APPPATH\classes\Controller\Paymentprocess.php [ 20 ] in E:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php:84
2015-01-16 17:17:06 --- DEBUG: #0 E:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_Paymentprocess->action_webmoney()
#1 [internal function]: Kohana_Controller->execute()
#2 E:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#3 E:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 E:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#5 E:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#6 {main} in E:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php:84
2015-01-16 17:24:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: LMI_SECRET_KEY ~ APPPATH/classes/Controller/Paymentprocess.php [ 29 ] in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:29
2015-01-16 17:24:54 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(29): Kohana_Core::error_handler(8, 'Undefined index...', '/var/domains/ob...', 29, Array)
#1 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_webmoney()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:29
2015-01-16 17:27:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: LMI_SECRET_KEY ~ APPPATH/classes/Controller/Paymentprocess.php [ 29 ] in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:29
2015-01-16 17:27:30 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(29): Kohana_Core::error_handler(8, 'Undefined index...', '/var/domains/ob...', 29, Array)
#1 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_webmoney()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:29
2015-01-16 17:31:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: LMI_SECRET_KEY ~ APPPATH/classes/Controller/Paymentprocess.php [ 29 ] in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:29
2015-01-16 17:31:05 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(29): Kohana_Core::error_handler(8, 'Undefined index...', '/var/domains/ob...', 29, Array)
#1 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_webmoney()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:29
2015-01-16 17:31:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: LMI_SECRET_KEY ~ APPPATH/classes/Controller/Paymentprocess.php [ 31 ] in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:31
2015-01-16 17:31:56 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/var/domains/ob...', 31, Array)
#1 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_webmoney()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:31
2015-01-16 17:35:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ']' ~ APPPATH/classes/Controller/Paymentprocess.php [ 31 ] in file:line
2015-01-16 17:35:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-16 17:36:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ']' ~ APPPATH/classes/Controller/Paymentprocess.php [ 31 ] in file:line
2015-01-16 17:36:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-16 17:38:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: LMI_SECRET_KEY ~ APPPATH/classes/Controller/Paymentprocess.php [ 29 ] in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:29
2015-01-16 17:38:27 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(29): Kohana_Core::error_handler(8, 'Undefined index...', '/var/domains/ob...', 29, Array)
#1 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_webmoney()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:29
2015-01-16 17:40:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: LMI_SECRET_KEY ~ APPPATH/classes/Controller/Paymentprocess.php [ 29 ] in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:29
2015-01-16 17:40:10 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(29): Kohana_Core::error_handler(8, 'Undefined index...', '/var/domains/ob...', 29, Array)
#1 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_webmoney()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:29
2015-01-16 17:42:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: LMI_SECRET_KEY ~ APPPATH/classes/Controller/Paymentprocess.php [ 29 ] in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:29
2015-01-16 17:42:50 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(29): Kohana_Core::error_handler(8, 'Undefined index...', '/var/domains/ob...', 29, Array)
#1 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_webmoney()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:29
2015-01-16 17:43:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: LMI_SECRET_KEY ~ APPPATH/classes/Controller/Paymentprocess.php [ 31 ] in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:31
2015-01-16 17:43:54 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/var/domains/ob...', 31, Array)
#1 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_webmoney()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:31
2015-01-16 17:46:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: LMI_SECRET_KEY ~ APPPATH/classes/Controller/Paymentprocess.php [ 30 ] in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:30
2015-01-16 17:46:15 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/domains/ob...', 30, Array)
#1 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_webmoney()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:30
2015-01-16 17:47:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: LMI_SECRET_KEY ~ APPPATH/classes/Controller/Paymentprocess.php [ 30 ] in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:30
2015-01-16 17:47:53 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/domains/ob...', 30, Array)
#1 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_webmoney()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:30
2015-01-16 17:48:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: LMI_SECRET_KEY ~ APPPATH/classes/Controller/Paymentprocess.php [ 30 ] in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:30
2015-01-16 17:48:46 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/domains/ob...', 30, Array)
#1 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_webmoney()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:30
2015-01-16 17:49:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: LMI_SECRET_KEY ~ APPPATH/classes/Controller/Paymentprocess.php [ 30 ] in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:30
2015-01-16 17:49:43 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/domains/ob...', 30, Array)
#1 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_webmoney()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:30
2015-01-16 17:51:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: LMI_SECRET_KEY ~ APPPATH/classes/Controller/Paymentprocess.php [ 30 ] in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:30
2015-01-16 17:51:24 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/domains/ob...', 30, Array)
#1 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_webmoney()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:30
2015-01-16 17:52:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: LMI_SECRET_KEY ~ APPPATH/classes/Controller/Paymentprocess.php [ 30 ] in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:30
2015-01-16 17:52:44 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/domains/ob...', 30, Array)
#1 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_webmoney()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:30
2015-01-16 17:56:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Paymentssystem.php [ 124 ] in file:line
2015-01-16 17:56:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-16 17:57:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: LMI_SECRET_KEY ~ APPPATH/classes/Controller/Paymentprocess.php [ 30 ] in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:30
2015-01-16 17:57:24 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/domains/ob...', 30, Array)
#1 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_webmoney()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:30