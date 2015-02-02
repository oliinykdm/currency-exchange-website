<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-29 04:10:54 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'surname' ~ APPPATH/classes/Controller/Exchange.php [ 54 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php:54
2015-01-29 04:10:54 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php(54): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/d1man/dom...', 54, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Exchange->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Exchange))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php:54
2015-01-29 04:11:02 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'surname' ~ APPPATH/classes/Controller/Exchange.php [ 54 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php:54
2015-01-29 04:11:02 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php(54): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/d1man/dom...', 54, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Exchange->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Exchange))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php:54
2015-01-29 04:11:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: surname ~ APPPATH/views/payment/start.php [ 36 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/views/payment/start.php:36
2015-01-29 04:11:07 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/views/payment/start.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/d1man/dom...', 36, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php(62): include('/home/d1man/dom...')
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/d1man/dom...', Array)
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php(96): Kohana_View->render()
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Exchange->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Exchange))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#10 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/views/payment/start.php:36
2015-01-29 04:12:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: null ~ APPPATH/classes/Controller/Exchange.php [ 34 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php:34
2015-01-29 04:12:14 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/d1man/dom...', 34, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Exchange->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Exchange))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php:34
2015-01-29 04:12:35 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'surname' ~ APPPATH/classes/Controller/Exchange.php [ 61 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php:61
2015-01-29 04:12:35 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php(61): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/d1man/dom...', 61, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Exchange->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Exchange))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php:61
2015-01-29 04:17:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: payment_details_from ~ APPPATH/classes/Paymentssystem.php [ 63 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php:63
2015-01-29 04:17:19 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php(63): Kohana_Core::error_handler(8, 'Undefined index...', '/home/d1man/dom...', 63, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php(92): Paymentssystem->init(Array)
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Exchange->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Exchange))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#8 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php:63
2015-01-29 04:17:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: payment_details_from ~ APPPATH/classes/Paymentssystem.php [ 63 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php:63
2015-01-29 04:17:24 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php(63): Kohana_Core::error_handler(8, 'Undefined index...', '/home/d1man/dom...', 63, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php(92): Paymentssystem->init(Array)
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Exchange->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Exchange))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#8 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php:63
2015-01-29 04:18:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: payment_details_from_ ~ APPPATH/classes/Paymentssystem.php [ 63 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php:63
2015-01-29 04:18:00 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php(63): Kohana_Core::error_handler(8, 'Undefined index...', '/home/d1man/dom...', 63, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php(92): Paymentssystem->init(Array)
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Exchange->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Exchange))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#8 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php:63
2015-01-29 04:18:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: payment_details_from_ ~ APPPATH/classes/Paymentssystem.php [ 63 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php:63
2015-01-29 04:18:03 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php(63): Kohana_Core::error_handler(8, 'Undefined index...', '/home/d1man/dom...', 63, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php(92): Paymentssystem->init(Array)
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Exchange->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Exchange))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#8 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php:63
2015-01-29 04:18:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: payment_details_from_ ~ APPPATH/classes/Paymentssystem.php [ 63 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php:63
2015-01-29 04:18:31 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php(63): Kohana_Core::error_handler(8, 'Undefined index...', '/home/d1man/dom...', 63, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php(92): Paymentssystem->init(Array)
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Exchange->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Exchange))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#8 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php:63
2015-01-29 04:21:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: payment_details_from_ ~ APPPATH/classes/Paymentssystem.php [ 63 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php:63
2015-01-29 04:21:37 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php(63): Kohana_Core::error_handler(8, 'Undefined index...', '/home/d1man/dom...', 63, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php(92): Paymentssystem->init(Array)
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Exchange->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Exchange))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#8 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php:63
2015-01-29 04:21:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: payment_details_from_ ~ APPPATH/classes/Paymentssystem.php [ 63 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php:63
2015-01-29 04:21:49 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php(63): Kohana_Core::error_handler(8, 'Undefined index...', '/home/d1man/dom...', 63, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php(94): Paymentssystem->init(Array)
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Exchange->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Exchange))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#8 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Paymentssystem.php:63
2015-01-29 04:24:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: pay_button ~ APPPATH/classes/Controller/Exchange.php [ 57 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php:57
2015-01-29 04:24:40 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php(57): Kohana_Core::error_handler(8, 'Undefined index...', '/home/d1man/dom...', 57, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Exchange->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Exchange))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Exchange.php:57
2015-01-29 07:10:55 --- EMERGENCY: ErrorException [ 1 ]: Method Request::__toString() must not throw an exception ~ SYSPATH/classes/Kohana/Controller.php [ 0 ] in file:line
2015-01-29 07:10:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-29 07:10:56 --- EMERGENCY: ErrorException [ 1 ]: Method Request::__toString() must not throw an exception ~ SYSPATH/classes/Kohana/Controller.php [ 0 ] in file:line
2015-01-29 07:10:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-29 07:10:57 --- EMERGENCY: ErrorException [ 1 ]: Method Request::__toString() must not throw an exception ~ SYSPATH/classes/Kohana/Controller.php [ 0 ] in file:line
2015-01-29 07:10:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-29 07:12:33 --- EMERGENCY: ErrorException [ 1 ]: Method Request::__toString() must not throw an exception ~ SYSPATH/classes/Kohana/Controller.php [ 0 ] in file:line
2015-01-29 07:12:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-29 07:12:34 --- EMERGENCY: ErrorException [ 1 ]: Method Request::__toString() must not throw an exception ~ SYSPATH/classes/Kohana/Controller.php [ 0 ] in file:line
2015-01-29 07:12:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-29 07:12:34 --- EMERGENCY: ErrorException [ 1 ]: Method Request::__toString() must not throw an exception ~ SYSPATH/classes/Kohana/Controller.php [ 0 ] in file:line
2015-01-29 07:12:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-29 07:12:35 --- EMERGENCY: ErrorException [ 1 ]: Method Request::__toString() must not throw an exception ~ SYSPATH/classes/Kohana/Controller.php [ 0 ] in file:line
2015-01-29 07:12:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-29 07:12:35 --- EMERGENCY: ErrorException [ 1 ]: Method Request::__toString() must not throw an exception ~ SYSPATH/classes/Kohana/Controller.php [ 0 ] in file:line
2015-01-29 07:12:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-29 07:12:54 --- EMERGENCY: ErrorException [ 1 ]: Method Request::__toString() must not throw an exception ~ SYSPATH/classes/Kohana/Controller.php [ 0 ] in file:line
2015-01-29 07:12:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-29 07:12:54 --- EMERGENCY: ErrorException [ 1 ]: Method Request::__toString() must not throw an exception ~ SYSPATH/classes/Kohana/Controller.php [ 0 ] in file:line
2015-01-29 07:12:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-29 07:12:54 --- EMERGENCY: ErrorException [ 1 ]: Method Request::__toString() must not throw an exception ~ SYSPATH/classes/Kohana/Controller.php [ 0 ] in file:line
2015-01-29 07:12:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-29 07:12:55 --- EMERGENCY: ErrorException [ 1 ]: Method Request::__toString() must not throw an exception ~ SYSPATH/classes/Kohana/Controller.php [ 0 ] in file:line
2015-01-29 07:12:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-29 07:13:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: categoriaId ~ APPPATH/classes/Controller/Paymentprocess.php [ 21 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php:21
2015-01-29 07:13:04 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/d1man/dom...', 21, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_result()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php:21
2015-01-29 07:13:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: categoriaId ~ APPPATH/classes/Controller/Paymentprocess.php [ 21 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php:21
2015-01-29 07:13:11 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/d1man/dom...', 21, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_result()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php:21
2015-01-29 07:13:12 --- EMERGENCY: ErrorException [ 1 ]: Method Request::__toString() must not throw an exception ~ SYSPATH/classes/Kohana/Controller.php [ 0 ] in file:line
2015-01-29 07:13:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-29 07:13:52 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: post ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php:17
2015-01-29 07:13:52 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php(17): Kohana_Route::get('post')
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_result()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php:17
2015-01-29 07:14:24 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: post ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php:17
2015-01-29 07:14:24 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php(17): Kohana_Route::get('post')
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_result()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php:17
2015-01-29 07:14:25 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: get ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php:17
2015-01-29 07:14:25 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php(17): Kohana_Route::get('get')
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_result()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php:17
2015-01-29 07:14:25 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: get ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php:17
2015-01-29 07:14:25 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php(17): Kohana_Route::get('get')
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_result()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php:17
2015-01-29 07:14:26 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: get ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php:17
2015-01-29 07:14:26 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php(17): Kohana_Route::get('get')
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_result()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php:17
2015-01-29 07:18:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: paymentId ~ APPPATH/views/payment/result.php [ 3 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/views/payment/result.php:3
2015-01-29 07:18:19 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/views/payment/result.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/d1man/dom...', 3, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php(62): include('/home/d1man/dom...')
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/d1man/dom...', Array)
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php(30): Kohana_View->render()
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_result()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#10 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/views/payment/result.php:3
2015-01-29 07:19:04 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Ajax::action_getPaymentStatus(), called in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Ajax.php [ 13 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:04 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/d1man/dom...', 13, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getPaymentStatus()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:04 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Ajax::action_getPaymentStatus(), called in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Ajax.php [ 13 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:04 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/d1man/dom...', 13, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getPaymentStatus()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:07 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Ajax::action_getPaymentStatus(), called in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Ajax.php [ 13 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:07 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/d1man/dom...', 13, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getPaymentStatus()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:10 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Ajax::action_getPaymentStatus(), called in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Ajax.php [ 13 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:10 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/d1man/dom...', 13, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getPaymentStatus()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:13 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Ajax::action_getPaymentStatus(), called in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Ajax.php [ 13 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:13 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/d1man/dom...', 13, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getPaymentStatus()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:16 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Ajax::action_getPaymentStatus(), called in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Ajax.php [ 13 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:16 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/d1man/dom...', 13, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getPaymentStatus()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:19 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Ajax::action_getPaymentStatus(), called in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Ajax.php [ 13 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:19 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/d1man/dom...', 13, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getPaymentStatus()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:22 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Ajax::action_getPaymentStatus(), called in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Ajax.php [ 13 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:22 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/d1man/dom...', 13, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getPaymentStatus()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:25 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Ajax::action_getPaymentStatus(), called in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Ajax.php [ 13 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:25 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/d1man/dom...', 13, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getPaymentStatus()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:26 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Ajax::action_getPaymentStatus(), called in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Ajax.php [ 13 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:26 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/d1man/dom...', 13, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getPaymentStatus()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:30 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Ajax::action_getPaymentStatus(), called in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Ajax.php [ 13 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:30 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/d1man/dom...', 13, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getPaymentStatus()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:36 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Ajax::action_getPaymentStatus(), called in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Ajax.php [ 13 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:19:36 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/d1man/dom...', 13, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getPaymentStatus()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Ajax.php:13
2015-01-29 07:40:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH/classes/SMSGW.php [ 10 ] in file:line
2015-01-29 07:40:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-29 07:40:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH/classes/SMSGW.php [ 10 ] in file:line
2015-01-29 07:40:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-29 07:43:04 --- EMERGENCY: Exception [ 0 ]: Bad hash ~ APPPATH/classes/Controller/Paymentprocess.php [ 96 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php:84
2015-01-29 07:43:04 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_webmoney()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#6 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php:84
2015-01-29 07:45:08 --- EMERGENCY: Exception [ 0 ]: Bad hash ~ APPPATH/classes/Controller/Paymentprocess.php [ 96 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php:84
2015-01-29 07:45:08 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_webmoney()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#6 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php:84
2015-01-29 07:46:02 --- EMERGENCY: Exception [ 0 ]: Bad hash ~ APPPATH/classes/Controller/Paymentprocess.php [ 93 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php:84
2015-01-29 07:46:02 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_webmoney()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#6 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php:84
2015-01-29 07:59:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: LMI_HASH ~ APPPATH/classes/Controller/Paymentprocess.php [ 37 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php:37
2015-01-29 07:59:45 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php(37): Kohana_Core::error_handler(8, 'Undefined index...', '/home/d1man/dom...', 37, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_webmoney()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php:37
2015-01-29 08:00:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: LMI_HASH ~ APPPATH/classes/Controller/Paymentprocess.php [ 37 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php:37
2015-01-29 08:00:39 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php(37): Kohana_Core::error_handler(8, 'Undefined index...', '/home/d1man/dom...', 37, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_webmoney()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/Controller/Paymentprocess.php:37
2015-01-29 08:06:27 --- EMERGENCY: Exception [ 0 ]: Bad hash ~ APPPATH/classes/Controller/Paymentprocess.php [ 96 ] in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php:84
2015-01-29 08:06:27 --- DEBUG: #0 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_webmoney()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#3 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#6 {main} in /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php:84