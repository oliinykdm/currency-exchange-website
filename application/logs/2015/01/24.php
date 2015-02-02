<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-24 09:30:15 --- EMERGENCY: ErrorException [ 2 ]: json_encode(): double INF does not conform to the JSON spec, encoded as 0 ~ APPPATH/classes/AjaxController.php [ 18 ] in file:line
2015-01-24 09:30:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_encode(): ...', '/home/d1man/dom...', 18, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/AjaxController.php(18): json_encode(Array)
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(87): AjaxController->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-01-24 09:30:16 --- EMERGENCY: ErrorException [ 2 ]: json_encode(): double INF does not conform to the JSON spec, encoded as 0 ~ APPPATH/classes/AjaxController.php [ 18 ] in file:line
2015-01-24 09:30:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_encode(): ...', '/home/d1man/dom...', 18, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/AjaxController.php(18): json_encode(Array)
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(87): AjaxController->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-01-24 09:30:22 --- EMERGENCY: ErrorException [ 2 ]: json_encode(): double INF does not conform to the JSON spec, encoded as 0 ~ APPPATH/classes/AjaxController.php [ 18 ] in file:line
2015-01-24 09:30:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_encode(): ...', '/home/d1man/dom...', 18, Array)
#1 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/application/classes/AjaxController.php(18): json_encode(Array)
#2 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Controller.php(87): AjaxController->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/d1man/domains/dev.lab.dima.rv.ua/obmennik.dev.lab.dima.rv.ua/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-01-24 14:11:59 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getValue() on a non-object ~ APPPATH/classes/Controller/Change.php [ 19 ] in file:line
2015-01-24 14:11:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line