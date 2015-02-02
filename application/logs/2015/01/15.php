<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-15 07:15:55 --- CRITICAL: ErrorException [ 1 ]: Class 'Symfony\Component\Yaml\Yaml' not found ~ DOCROOT\vendor\propel\propel\src\Propel\Runtime\Parser\YamlParser.php [ 30 ] in file:line
2015-01-15 07:15:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-15 07:22:44 --- CRITICAL: ErrorException [ 2 ]: str_repeat() expects exactly 2 parameters, 3 given ~ APPPATH\classes\PaymentsSystem.php [ 55 ] in file:line
2015-01-15 07:22:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'str_repeat() ex...', 'E:\OpenServer\d...', 55, Array)
#1 E:\OpenServer\domains\obmennik\application\classes\PaymentsSystem.php(55): str_repeat('%payment_id%', 7840741, 'Exchange #%paym...')
#2 E:\OpenServer\domains\obmennik\application\classes\PaymentsSystem.php(40): PaymentsSystem->setPaymentDescription()
#3 E:\OpenServer\domains\obmennik\application\classes\Controller\Change.php(18): PaymentsSystem->init(Array)
#4 E:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_Change->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Change))
#7 E:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 E:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2015-01-15 07:26:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function getValue() on a non-object ~ APPPATH\classes\PaymentsSystem.php [ 28 ] in file:line
2015-01-15 07:26:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-15 07:42:42 --- CRITICAL: ErrorException [ 2 ]: fwrite() expects parameter 2 to be string, array given ~ APPPATH\classes\Controller\PaymentProcess.php [ 16 ] in file:line
2015-01-15 07:42:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fwrite() expect...', 'E:\OpenServer\d...', 16, Array)
#1 E:\OpenServer\domains\obmennik\application\classes\Controller\PaymentProcess.php(16): fwrite(Resource id #84, Array)
#2 E:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_PaymentProcess->action_webmoney()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_PaymentProcess))
#5 E:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 E:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-01-15 07:43:28 --- CRITICAL: ErrorException [ 2 ]: fwrite() expects parameter 2 to be string, array given ~ APPPATH\classes\Controller\PaymentProcess.php [ 16 ] in file:line
2015-01-15 07:43:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fwrite() expect...', 'E:\OpenServer\d...', 16, Array)
#1 E:\OpenServer\domains\obmennik\application\classes\Controller\PaymentProcess.php(16): fwrite(Resource id #84, Array)
#2 E:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_PaymentProcess->action_webmoney()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_PaymentProcess))
#5 E:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 E:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-01-15 08:22:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paymentssystem' not found ~ APPPATH/classes/Controller/Change.php [ 14 ] in file:line
2015-01-15 08:22:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-15 08:24:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paymentssystem' not found ~ APPPATH/classes/Controller/Change.php [ 14 ] in file:line
2015-01-15 08:24:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-15 08:24:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paymentsystem' not found ~ APPPATH/classes/Controller/Change.php [ 14 ] in file:line
2015-01-15 08:24:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-15 08:24:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'PaymentsSystem' not found ~ APPPATH/classes/Controller/Change.php [ 14 ] in file:line
2015-01-15 08:24:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-15 08:25:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paymentssystem' not found ~ APPPATH/classes/Controller/Change.php [ 14 ] in file:line
2015-01-15 08:25:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-15 08:25:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paymentssystem' not found ~ APPPATH/classes/Controller/Change.php [ 14 ] in file:line
2015-01-15 08:25:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-15 08:25:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paymentssystem' not found ~ APPPATH/classes/Controller/Change.php [ 14 ] in file:line
2015-01-15 08:25:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-15 08:25:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paymentssystem' not found ~ APPPATH/classes/Controller/Change.php [ 14 ] in file:line
2015-01-15 08:25:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-15 08:26:35 --- EMERGENCY: InvalidArgumentException [ 0 ]: amount is null ~ APPPATH/classes/LiqPay.php [ 178 ] in /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php:150
2015-01-15 08:26:35 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php(150): LiqPay->cnb_params(Array)
#1 /var/domains/obmennik.dima.rv.ua/application/classes/Paymentssystem.php(112): LiqPay->cnb_signature(Array)
#2 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(40): Paymentssystem->P24Signature()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_privat24()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#6 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#9 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php:150
2015-01-15 08:27:06 --- EMERGENCY: InvalidArgumentException [ 0 ]: amount is null ~ APPPATH/classes/LiqPay.php [ 178 ] in /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php:150
2015-01-15 08:27:06 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php(150): LiqPay->cnb_params(Array)
#1 /var/domains/obmennik.dima.rv.ua/application/classes/Paymentssystem.php(112): LiqPay->cnb_signature(Array)
#2 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(40): Paymentssystem->P24Signature()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_privat24()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#6 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#9 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php:150
2015-01-15 08:27:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: data ~ APPPATH/classes/Controller/Paymentprocess.php [ 31 ] in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:31
2015-01-15 08:27:41 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/var/domains/ob...', 31, Array)
#1 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_privat24()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:31
2015-01-15 08:27:54 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function P24Signature() on a non-object ~ APPPATH/classes/Controller/Paymentprocess.php [ 30 ] in file:line
2015-01-15 08:27:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-15 08:28:04 --- EMERGENCY: InvalidArgumentException [ 0 ]: amount is null ~ APPPATH/classes/LiqPay.php [ 178 ] in /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php:150
2015-01-15 08:28:04 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php(150): LiqPay->cnb_params(Array)
#1 /var/domains/obmennik.dima.rv.ua/application/classes/Paymentssystem.php(112): LiqPay->cnb_signature(Array)
#2 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(32): Paymentssystem->P24Signature()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_privat24()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#6 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#9 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php:150
2015-01-15 08:28:06 --- EMERGENCY: InvalidArgumentException [ 0 ]: amount is null ~ APPPATH/classes/LiqPay.php [ 178 ] in /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php:150
2015-01-15 08:28:06 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php(150): LiqPay->cnb_params(Array)
#1 /var/domains/obmennik.dima.rv.ua/application/classes/Paymentssystem.php(112): LiqPay->cnb_signature(Array)
#2 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(32): Paymentssystem->P24Signature()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_privat24()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#6 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#9 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php:150
2015-01-15 08:29:04 --- EMERGENCY: InvalidArgumentException [ 0 ]: amount is null ~ APPPATH/classes/LiqPay.php [ 178 ] in /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php:150
2015-01-15 08:29:04 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php(150): LiqPay->cnb_params(Array)
#1 /var/domains/obmennik.dima.rv.ua/application/classes/Paymentssystem.php(112): LiqPay->cnb_signature(Array)
#2 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(38): Paymentssystem->P24Signature()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_privat24()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#6 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#9 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php:150
2015-01-15 08:29:06 --- EMERGENCY: InvalidArgumentException [ 0 ]: amount is null ~ APPPATH/classes/LiqPay.php [ 178 ] in /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php:150
2015-01-15 08:29:06 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php(150): LiqPay->cnb_params(Array)
#1 /var/domains/obmennik.dima.rv.ua/application/classes/Paymentssystem.php(112): LiqPay->cnb_signature(Array)
#2 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(38): Paymentssystem->P24Signature()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_privat24()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#6 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#9 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php:150
2015-01-15 08:29:35 --- EMERGENCY: InvalidArgumentException [ 0 ]: amount is null ~ APPPATH/classes/LiqPay.php [ 178 ] in /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php:150
2015-01-15 08:29:35 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php(150): LiqPay->cnb_params(Array)
#1 /var/domains/obmennik.dima.rv.ua/application/classes/Paymentssystem.php(112): LiqPay->cnb_signature(Array)
#2 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(38): Paymentssystem->P24Signature()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_privat24()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#6 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#9 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php:150
2015-01-15 08:29:37 --- EMERGENCY: InvalidArgumentException [ 0 ]: amount is null ~ APPPATH/classes/LiqPay.php [ 178 ] in /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php:150
2015-01-15 08:29:37 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php(150): LiqPay->cnb_params(Array)
#1 /var/domains/obmennik.dima.rv.ua/application/classes/Paymentssystem.php(112): LiqPay->cnb_signature(Array)
#2 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(38): Paymentssystem->P24Signature()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_privat24()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#6 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#9 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php:150
2015-01-15 08:30:07 --- EMERGENCY: InvalidArgumentException [ 0 ]: amount is null ~ APPPATH/classes/LiqPay.php [ 178 ] in /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php:150
2015-01-15 08:30:07 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php(150): LiqPay->cnb_params(Array)
#1 /var/domains/obmennik.dima.rv.ua/application/classes/Paymentssystem.php(112): LiqPay->cnb_signature(Array)
#2 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(38): Paymentssystem->P24Signature()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_privat24()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#6 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#9 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php:150
2015-01-15 08:30:35 --- EMERGENCY: InvalidArgumentException [ 0 ]: amount is null ~ APPPATH/classes/LiqPay.php [ 178 ] in /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php:150
2015-01-15 08:30:35 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php(150): LiqPay->cnb_params(Array)
#1 /var/domains/obmennik.dima.rv.ua/application/classes/Paymentssystem.php(112): LiqPay->cnb_signature(Array)
#2 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(37): Paymentssystem->P24Signature()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_privat24()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#6 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#9 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php:150
2015-01-15 08:30:36 --- EMERGENCY: InvalidArgumentException [ 0 ]: amount is null ~ APPPATH/classes/LiqPay.php [ 178 ] in /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php:150
2015-01-15 08:30:36 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php(150): LiqPay->cnb_params(Array)
#1 /var/domains/obmennik.dima.rv.ua/application/classes/Paymentssystem.php(112): LiqPay->cnb_signature(Array)
#2 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(37): Paymentssystem->P24Signature()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_privat24()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#6 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#9 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/LiqPay.php:150
2015-01-15 08:31:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/classes/Controller/Paymentprocess.php [ 35 ] in file:line
2015-01-15 08:31:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-15 08:31:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/classes/Controller/Paymentprocess.php [ 35 ] in file:line
2015-01-15 08:31:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-15 08:31:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/classes/Controller/Paymentprocess.php [ 35 ] in file:line
2015-01-15 08:31:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-15 08:31:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/classes/Controller/Paymentprocess.php [ 35 ] in file:line
2015-01-15 08:31:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-15 08:34:19 --- EMERGENCY: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH/classes/Controller/Paymentprocess.php [ 38 ] in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:38
2015-01-15 08:34:19 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(38): Kohana_Core::error_handler(4096, 'Object of class...', '/var/domains/ob...', 38, Array)
#1 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_privat24()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:38
2015-01-15 08:34:49 --- EMERGENCY: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH/classes/Controller/Paymentprocess.php [ 38 ] in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:38
2015-01-15 08:34:49 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(38): Kohana_Core::error_handler(4096, 'Object of class...', '/var/domains/ob...', 38, Array)
#1 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_privat24()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:38
2015-01-15 08:35:04 --- EMERGENCY: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH/classes/Controller/Paymentprocess.php [ 38 ] in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:38
2015-01-15 08:35:04 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(38): Kohana_Core::error_handler(4096, 'Object of class...', '/var/domains/ob...', 38, Array)
#1 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_privat24()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:38
2015-01-15 08:59:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: sing2 ~ APPPATH/classes/Controller/Paymentprocess.php [ 40 ] in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:40
2015-01-15 08:59:15 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/domains/ob...', 40, Array)
#1 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_privat24()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:40
2015-01-15 08:59:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: sing2 ~ APPPATH/classes/Controller/Paymentprocess.php [ 40 ] in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:40
2015-01-15 08:59:45 --- DEBUG: #0 /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/domains/ob...', 40, Array)
#1 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Controller.php(84): Controller_Paymentprocess->action_privat24()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paymentprocess))
#4 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/domains/obmennik.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/domains/obmennik.dima.rv.ua/index.php(118): Kohana_Request->execute()
#7 {main} in /var/domains/obmennik.dima.rv.ua/application/classes/Controller/Paymentprocess.php:40
2015-01-15 09:10:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ']' ~ APPPATH/classes/Paymentssystem.php [ 119 ] in file:line
2015-01-15 09:10:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-15 12:04:57 --- CRITICAL: Propel\Runtime\Exception\PropelException [ 0 ]: Cannot determine the column to bind to the parameter in clause "from = ?". ~ DOCROOT\vendor\propel\propel\src\Propel\Runtime\ActiveQuery\ModelCriteria.php [ 1586 ] in E:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ActiveQuery\ModelCriteria.php:98
2015-01-15 12:04:57 --- DEBUG: #0 E:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ActiveQuery\ModelCriteria.php(98): Propel\Runtime\ActiveQuery\ModelCriteria->getCriterionForClause('from = ?', 'wmz', NULL)
#1 E:\OpenServer\domains\obmennik\application\classes\Controller\Change.php(15): Propel\Runtime\ActiveQuery\ModelCriteria->condition('condition1', 'from = ?', 'wmz')
#2 E:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_Change->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Change))
#5 E:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 E:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#8 {main} in E:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ActiveQuery\ModelCriteria.php:98
2015-01-15 12:09:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH\classes\Controller\Change.php [ 21 ] in file:line
2015-01-15 12:09:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-15 12:16:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH\classes\Controller\Change.php [ 20 ] in file:line
2015-01-15 12:16:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line