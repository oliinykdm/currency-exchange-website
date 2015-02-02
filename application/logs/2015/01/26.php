<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-26 07:29:23 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getValue() on a non-object ~ APPPATH/classes/Controller/Exchange.php [ 19 ] in file:line
2015-01-26 07:29:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-26 07:34:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: pay ~ APPPATH/classes/Paymentssystem.php [ 29 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php:29
2015-01-26 07:34:02 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php(29): Kohana_Core::error_handler(8, 'Undefined index...', '/home/d1man/dom...', 29, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php(23): Paymentssystem->init(Array)
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Exchange->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Exchange))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#8 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php:29
2015-01-26 07:34:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: pay ~ APPPATH/classes/Paymentssystem.php [ 29 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php:29
2015-01-26 07:34:59 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php(29): Kohana_Core::error_handler(8, 'Undefined index...', '/home/d1man/dom...', 29, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php(23): Paymentssystem->init(Array)
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Exchange->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Exchange))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#8 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php:29
2015-01-26 07:36:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: pay ~ APPPATH/classes/Paymentssystem.php [ 29 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php:29
2015-01-26 07:36:33 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php(29): Kohana_Core::error_handler(8, 'Undefined index...', '/home/d1man/dom...', 29, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php(23): Paymentssystem->init(Array)
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Exchange->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Exchange))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#8 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php:29
2015-01-26 07:36:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: payment_details_from ~ APPPATH/classes/Paymentssystem.php [ 36 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php:36
2015-01-26 07:36:37 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php(36): Kohana_Core::error_handler(8, 'Undefined index...', '/home/d1man/dom...', 36, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php(23): Paymentssystem->init(Array)
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Exchange->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Exchange))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#8 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php:36
2015-01-26 08:44:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view payment/start could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php:145
2015-01-26 08:44:05 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php(145): Kohana_View->set_filename('payment/start')
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php(30): Kohana_View->__construct('payment/start', NULL)
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php(22): Kohana_View::factory('payment/start')
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Exchange->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Exchange))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#9 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php:145