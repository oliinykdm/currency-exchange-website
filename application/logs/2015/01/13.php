<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-13 10:13:37 --- CRITICAL: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\bootstrap.php [ 135 ] in file:line
2015-01-13 10:13:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-13 10:14:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '')->getWrappedConnection();' (T_ENCAPSED_AND_WHITESPACE) ~ APPPATH\classes\Database.php [ 29 ] in file:line
2015-01-13 10:14:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-13 10:14:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '')->getWrappedConnection();' (T_ENCAPSED_AND_WHITESPACE) ~ APPPATH\classes\Database.php [ 29 ] in file:line
2015-01-13 10:14:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-13 11:40:45 --- CRITICAL: ErrorException [ 8 ]: Undefined index: payment_detail_from ~ APPPATH\classes\Controller\Change.php [ 19 ] in D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php:19
2015-01-13 11:40:45 --- DEBUG: #0 D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 19, Array)
#1 D:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_Change->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Change))
#4 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php:19
2015-01-13 11:40:56 --- CRITICAL: Propel\Runtime\Exception\RuntimeException [ 0 ]: No connection defined for database "kino". Did you forget to define a connection or is it wrong written? ~ DOCROOT\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php [ 279 ] in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php:345
2015-01-13 11:40:56 --- DEBUG: #0 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php(345): Propel\Runtime\ServiceContainer\StandardServiceContainer->getConnectionManager('kino')
#1 D:\OpenServer\domains\obmennik\application\classes\Model\Base\ExchangesPrepare.php(885): Propel\Runtime\ServiceContainer\StandardServiceContainer->getWriteConnection('kino')
#2 D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php(27): Model\Base\ExchangesPrepare->save()
#3 D:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_Change->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Change))
#6 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php:345
2015-01-13 11:41:37 --- CRITICAL: Propel\Runtime\Exception\RuntimeException [ 0 ]: No connection defined for database "kino". Did you forget to define a connection or is it wrong written? ~ DOCROOT\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php [ 279 ] in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php:345
2015-01-13 11:41:37 --- DEBUG: #0 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php(345): Propel\Runtime\ServiceContainer\StandardServiceContainer->getConnectionManager('kino')
#1 D:\OpenServer\domains\obmennik\application\classes\Model\Base\ExchangesPrepare.php(885): Propel\Runtime\ServiceContainer\StandardServiceContainer->getWriteConnection('kino')
#2 D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php(27): Model\Base\ExchangesPrepare->save()
#3 D:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_Change->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Change))
#6 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php:345
2015-01-13 11:42:06 --- CRITICAL: Propel\Runtime\Exception\RuntimeException [ 0 ]: No connection defined for database "obmenni2k". Did you forget to define a connection or is it wrong written? ~ DOCROOT\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php [ 279 ] in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php:345
2015-01-13 11:42:06 --- DEBUG: #0 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php(345): Propel\Runtime\ServiceContainer\StandardServiceContainer->getConnectionManager('obmenni2k')
#1 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php(327): Propel\Runtime\ServiceContainer\StandardServiceContainer->getWriteConnection('obmenni2k')
#2 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\Propel.php(204): Propel\Runtime\ServiceContainer\StandardServiceContainer->getConnection('obmenni2k', 'write')
#3 D:\OpenServer\domains\obmennik\application\classes\Database.php(29): Propel\Runtime\Propel::getConnection('obmenni2k')
#4 D:\OpenServer\domains\obmennik\application\classes\Database.php(19): Database::getConnection()
#5 D:\OpenServer\domains\obmennik\application\bootstrap.php(135): Database::init()
#6 D:\OpenServer\domains\obmennik\index.php(102): require('D:\OpenServer\d...')
#7 {main} in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php:345
2015-01-13 11:42:09 --- CRITICAL: Propel\Runtime\Exception\RuntimeException [ 0 ]: No connection defined for database "kino". Did you forget to define a connection or is it wrong written? ~ DOCROOT\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php [ 279 ] in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php:345
2015-01-13 11:42:09 --- DEBUG: #0 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php(345): Propel\Runtime\ServiceContainer\StandardServiceContainer->getConnectionManager('kino')
#1 D:\OpenServer\domains\obmennik\application\classes\Model\Base\ExchangesPrepare.php(885): Propel\Runtime\ServiceContainer\StandardServiceContainer->getWriteConnection('kino')
#2 D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php(27): Model\Base\ExchangesPrepare->save()
#3 D:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_Change->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Change))
#6 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php:345
2015-01-13 11:42:17 --- CRITICAL: Propel\Runtime\Exception\RuntimeException [ 0 ]: No connection defined for database "kino". Did you forget to define a connection or is it wrong written? ~ DOCROOT\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php [ 279 ] in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php:345
2015-01-13 11:42:17 --- DEBUG: #0 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php(345): Propel\Runtime\ServiceContainer\StandardServiceContainer->getConnectionManager('kino')
#1 D:\OpenServer\domains\obmennik\application\classes\Model\Base\ExchangesPrepare.php(885): Propel\Runtime\ServiceContainer\StandardServiceContainer->getWriteConnection('kino')
#2 D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php(27): Model\Base\ExchangesPrepare->save()
#3 D:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_Change->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Change))
#6 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php:345
2015-01-13 11:42:20 --- CRITICAL: Propel\Runtime\Connection\Exception\ConnectionException [ 0 ]: Unable to open connection ~ DOCROOT\vendor\propel\propel\src\Propel\Runtime\Connection\ConnectionFactory.php [ 43 ] in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\Connection\ConnectionManagerSingle.php:76
2015-01-13 11:42:20 --- DEBUG: #0 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\Connection\ConnectionManagerSingle.php(76): Propel\Runtime\Connection\ConnectionFactory::create(Array, Object(Propel\Runtime\Adapter\Pdo\MysqlAdapter))
#1 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php(345): Propel\Runtime\Connection\ConnectionManagerSingle->getWriteConnection(Object(Propel\Runtime\Adapter\Pdo\MysqlAdapter))
#2 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php(327): Propel\Runtime\ServiceContainer\StandardServiceContainer->getWriteConnection('obmennik')
#3 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\Propel.php(204): Propel\Runtime\ServiceContainer\StandardServiceContainer->getConnection('obmennik', 'write')
#4 D:\OpenServer\domains\obmennik\application\classes\Database.php(29): Propel\Runtime\Propel::getConnection('obmennik')
#5 D:\OpenServer\domains\obmennik\application\classes\Database.php(19): Database::getConnection()
#6 D:\OpenServer\domains\obmennik\application\bootstrap.php(135): Database::init()
#7 D:\OpenServer\domains\obmennik\index.php(102): require('D:\OpenServer\d...')
#8 {main} in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\Connection\ConnectionManagerSingle.php:76
2015-01-13 11:42:24 --- CRITICAL: Propel\Runtime\Exception\RuntimeException [ 0 ]: No connection defined for database "kino". Did you forget to define a connection or is it wrong written? ~ DOCROOT\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php [ 279 ] in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php:345
2015-01-13 11:42:24 --- DEBUG: #0 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php(345): Propel\Runtime\ServiceContainer\StandardServiceContainer->getConnectionManager('kino')
#1 D:\OpenServer\domains\obmennik\application\classes\Model\Base\ExchangesPrepare.php(885): Propel\Runtime\ServiceContainer\StandardServiceContainer->getWriteConnection('kino')
#2 D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php(27): Model\Base\ExchangesPrepare->save()
#3 D:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_Change->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Change))
#6 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php:345
2015-01-13 11:43:22 --- CRITICAL: Propel\Runtime\Exception\RuntimeException [ 0 ]: No connection defined for database "kino". Did you forget to define a connection or is it wrong written? ~ DOCROOT\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php [ 279 ] in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php:345
2015-01-13 11:43:22 --- DEBUG: #0 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php(345): Propel\Runtime\ServiceContainer\StandardServiceContainer->getConnectionManager('kino')
#1 D:\OpenServer\domains\obmennik\application\classes\Model\Base\ExchangesPrepare.php(885): Propel\Runtime\ServiceContainer\StandardServiceContainer->getWriteConnection('kino')
#2 D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php(27): Model\Base\ExchangesPrepare->save()
#3 D:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_Change->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Change))
#6 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php:345
2015-01-13 11:43:24 --- CRITICAL: Propel\Runtime\Exception\RuntimeException [ 0 ]: No connection defined for database "kino". Did you forget to define a connection or is it wrong written? ~ DOCROOT\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php [ 279 ] in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php:345
2015-01-13 11:43:24 --- DEBUG: #0 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php(345): Propel\Runtime\ServiceContainer\StandardServiceContainer->getConnectionManager('kino')
#1 D:\OpenServer\domains\obmennik\application\classes\Model\Base\ExchangesPrepare.php(885): Propel\Runtime\ServiceContainer\StandardServiceContainer->getWriteConnection('kino')
#2 D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php(27): Model\Base\ExchangesPrepare->save()
#3 D:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_Change->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Change))
#6 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php:345
2015-01-13 11:43:30 --- CRITICAL: Propel\Runtime\Exception\RuntimeException [ 0 ]: No connection defined for database "obmennik2". Did you forget to define a connection or is it wrong written? ~ DOCROOT\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php [ 279 ] in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php:345
2015-01-13 11:43:30 --- DEBUG: #0 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php(345): Propel\Runtime\ServiceContainer\StandardServiceContainer->getConnectionManager('obmennik2')
#1 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php(327): Propel\Runtime\ServiceContainer\StandardServiceContainer->getWriteConnection('obmennik2')
#2 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\Propel.php(204): Propel\Runtime\ServiceContainer\StandardServiceContainer->getConnection('obmennik2', 'write')
#3 D:\OpenServer\domains\obmennik\application\classes\Database.php(29): Propel\Runtime\Propel::getConnection('obmennik2')
#4 D:\OpenServer\domains\obmennik\application\classes\Database.php(19): Database::getConnection()
#5 D:\OpenServer\domains\obmennik\application\bootstrap.php(135): Database::init()
#6 D:\OpenServer\domains\obmennik\index.php(102): require('D:\OpenServer\d...')
#7 {main} in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php:345
2015-01-13 11:43:33 --- CRITICAL: Propel\Runtime\Exception\RuntimeException [ 0 ]: No connection defined for database "kino". Did you forget to define a connection or is it wrong written? ~ DOCROOT\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php [ 279 ] in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php:345
2015-01-13 11:43:33 --- DEBUG: #0 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php(345): Propel\Runtime\ServiceContainer\StandardServiceContainer->getConnectionManager('kino')
#1 D:\OpenServer\domains\obmennik\application\classes\Model\Base\ExchangesPrepare.php(885): Propel\Runtime\ServiceContainer\StandardServiceContainer->getWriteConnection('kino')
#2 D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php(27): Model\Base\ExchangesPrepare->save()
#3 D:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_Change->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Change))
#6 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php:345
2015-01-13 11:43:44 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be of the type array, integer given, called in D:\OpenServer\domains\obmennik\system\classes\Kohana\Arr.php on line 439 and defined ~ SYSPATH\classes\Kohana\Arr.php [ 30 ] in D:\OpenServer\domains\obmennik\system\classes\Kohana\Arr.php:30
2015-01-13 11:43:44 --- DEBUG: #0 D:\OpenServer\domains\obmennik\system\classes\Kohana\Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\OpenServer\d...', 30, Array)
#1 D:\OpenServer\domains\obmennik\system\classes\Kohana\Arr.php(439): Kohana_Arr::is_assoc(1)
#2 D:\OpenServer\domains\obmennik\system\classes\Kohana\Config\File\Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 D:\OpenServer\domains\obmennik\system\classes\Kohana\Config.php(130): Kohana_Config_File_Reader->load('database')
#4 D:\OpenServer\domains\obmennik\application\classes\Database.php(7): Kohana_Config->load('database')
#5 D:\OpenServer\domains\obmennik\application\bootstrap.php(135): Database::init()
#6 D:\OpenServer\domains\obmennik\index.php(102): require('D:\OpenServer\d...')
#7 {main} in D:\OpenServer\domains\obmennik\system\classes\Kohana\Arr.php:30
2015-01-13 11:43:49 --- CRITICAL: ErrorException [ 8 ]: Undefined index: database ~ APPPATH\classes\Database.php [ 13 ] in D:\OpenServer\domains\obmennik\application\classes\Database.php:13
2015-01-13 11:43:49 --- DEBUG: #0 D:\OpenServer\domains\obmennik\application\classes\Database.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 13, Array)
#1 D:\OpenServer\domains\obmennik\application\bootstrap.php(135): Database::init()
#2 D:\OpenServer\domains\obmennik\index.php(102): require('D:\OpenServer\d...')
#3 {main} in D:\OpenServer\domains\obmennik\application\classes\Database.php:13
2015-01-13 11:43:55 --- CRITICAL: Propel\Runtime\Connection\Exception\ConnectionException [ 0 ]: Unable to open connection ~ DOCROOT\vendor\propel\propel\src\Propel\Runtime\Connection\ConnectionFactory.php [ 43 ] in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\Connection\ConnectionManagerSingle.php:76
2015-01-13 11:43:55 --- DEBUG: #0 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\Connection\ConnectionManagerSingle.php(76): Propel\Runtime\Connection\ConnectionFactory::create(Array, Object(Propel\Runtime\Adapter\Pdo\MysqlAdapter))
#1 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php(345): Propel\Runtime\Connection\ConnectionManagerSingle->getWriteConnection(Object(Propel\Runtime\Adapter\Pdo\MysqlAdapter))
#2 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php(327): Propel\Runtime\ServiceContainer\StandardServiceContainer->getWriteConnection('obmennik')
#3 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\Propel.php(204): Propel\Runtime\ServiceContainer\StandardServiceContainer->getConnection('obmennik', 'write')
#4 D:\OpenServer\domains\obmennik\application\classes\Database.php(29): Propel\Runtime\Propel::getConnection('obmennik')
#5 D:\OpenServer\domains\obmennik\application\classes\Database.php(19): Database::getConnection()
#6 D:\OpenServer\domains\obmennik\application\bootstrap.php(135): Database::init()
#7 D:\OpenServer\domains\obmennik\index.php(102): require('D:\OpenServer\d...')
#8 {main} in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\Connection\ConnectionManagerSingle.php:76
2015-01-13 11:43:58 --- CRITICAL: Propel\Runtime\Exception\RuntimeException [ 0 ]: No connection defined for database "kino". Did you forget to define a connection or is it wrong written? ~ DOCROOT\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php [ 279 ] in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php:345
2015-01-13 11:43:58 --- DEBUG: #0 D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php(345): Propel\Runtime\ServiceContainer\StandardServiceContainer->getConnectionManager('kino')
#1 D:\OpenServer\domains\obmennik\application\classes\Model\Base\ExchangesPrepare.php(885): Propel\Runtime\ServiceContainer\StandardServiceContainer->getWriteConnection('kino')
#2 D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php(27): Model\Base\ExchangesPrepare->save()
#3 D:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_Change->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Change))
#6 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\obmennik\vendor\propel\propel\src\Propel\Runtime\ServiceContainer\StandardServiceContainer.php:345
2015-01-13 11:52:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'create' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\Controller\Change.php [ 18 ] in file:line
2015-01-13 11:52:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-13 11:59:30 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model\Settings::$getwmr ~ APPPATH\classes\Controller\Change.php [ 20 ] in D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php:20
2015-01-13 11:59:30 --- DEBUG: #0 D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OpenServer\d...', 20, Array)
#1 D:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_Change->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Change))
#4 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php:20
2015-01-13 11:59:47 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model\Settings::$getWmr ~ APPPATH\classes\Controller\Change.php [ 20 ] in D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php:20
2015-01-13 11:59:47 --- DEBUG: #0 D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OpenServer\d...', 20, Array)
#1 D:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_Change->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Change))
#4 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php:20
2015-01-13 12:02:00 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model\Settings::$getWmr ~ APPPATH\classes\Controller\Change.php [ 20 ] in D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php:20
2015-01-13 12:02:00 --- DEBUG: #0 D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OpenServer\d...', 20, Array)
#1 D:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_Change->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Change))
#4 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php:20
2015-01-13 12:07:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'create' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\Controller\Change.php [ 18 ] in file:line
2015-01-13 12:07:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-13 12:16:14 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model\Settings::$getWmr ~ APPPATH\classes\Controller\Change.php [ 20 ] in D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php:20
2015-01-13 12:16:14 --- DEBUG: #0 D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OpenServer\d...', 20, Array)
#1 D:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_Change->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Change))
#4 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php:20
2015-01-13 12:16:30 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model\Settings::$getWmr ~ APPPATH\classes\Controller\Change.php [ 20 ] in D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php:20
2015-01-13 12:16:30 --- DEBUG: #0 D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OpenServer\d...', 20, Array)
#1 D:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_Change->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Change))
#4 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php:20
2015-01-13 12:16:56 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model\Settings::$getWmr ~ APPPATH\classes\Controller\Change.php [ 20 ] in D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php:20
2015-01-13 12:16:56 --- DEBUG: #0 D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OpenServer\d...', 20, Array)
#1 D:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_Change->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Change))
#4 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php:20
2015-01-13 12:52:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Privat24' not found ~ APPPATH\classes\Controller\Change.php [ 39 ] in file:line
2015-01-13 12:52:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-13 12:52:50 --- CRITICAL: ErrorException [ 1 ]: Class 'Privat24' not found ~ APPPATH\classes\Controller\Change.php [ 39 ] in file:line
2015-01-13 12:52:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-13 12:53:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Privat24' not found ~ APPPATH\classes\Controller\Change.php [ 39 ] in file:line
2015-01-13 12:53:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-13 12:59:43 --- CRITICAL: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH\classes\Controller\Change.php [ 49 ] in D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php:49
2015-01-13 12:59:43 --- DEBUG: #0 D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php(49): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\OpenServer\d...', 49, Array)
#1 D:\OpenServer\domains\obmennik\system\classes\Kohana\Controller.php(84): Controller_Change->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Change))
#4 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\obmennik\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\obmennik\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\obmennik\application\classes\Controller\Change.php:49