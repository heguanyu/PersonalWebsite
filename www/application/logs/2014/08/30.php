<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-30 01:02:46 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(/www/assets/packages/style.json): failed to open stream: No such file or directory ~ G:\gitprojects\PersonalWebsite\package\package.php [ 44 ] in file:line
2014-08-30 01:02:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'G:\\gitprojects\\...', 44, Array)
#1 G:\gitprojects\PersonalWebsite\package\package.php(44): file_get_contents('/www/assets/pac...')
#2 G:\gitprojects\PersonalWebsite\package\package.php(13): Package->getList('css', Array)
#3 G:\gitprojects\PersonalWebsite\package\package.php(22): Package->getCssList()
#4 G:\gitprojects\PersonalWebsite\package\include.php(7): Package->getCssHtml()
#5 G:\gitprojects\PersonalWebsite\www\application\views\index.php(8): Inclusion::includeCss('/www/assets/pac...')
#6 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(61): include('G:\\gitprojects\\...')
#7 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(357): Kohana_View::capture('G:\\gitprojects\\...', Array)
#8 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#10 G:\gitprojects\PersonalWebsite\www\application\classes\Controller\Welcome.php(9): Kohana_Response->body(Object(View))
#11 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 G:\gitprojects\PersonalWebsite\www\index.php(119): Kohana_Request->execute()
#17 {main} in file:line
2014-08-30 01:03:03 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(/./assets/packages/style.json): failed to open stream: No such file or directory ~ G:\gitprojects\PersonalWebsite\package\package.php [ 44 ] in file:line
2014-08-30 01:03:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'G:\\gitprojects\\...', 44, Array)
#1 G:\gitprojects\PersonalWebsite\package\package.php(44): file_get_contents('/./assets/packa...')
#2 G:\gitprojects\PersonalWebsite\package\package.php(13): Package->getList('css', Array)
#3 G:\gitprojects\PersonalWebsite\package\package.php(22): Package->getCssList()
#4 G:\gitprojects\PersonalWebsite\package\include.php(7): Package->getCssHtml()
#5 G:\gitprojects\PersonalWebsite\www\application\views\index.php(8): Inclusion::includeCss('./assets/packag...')
#6 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(61): include('G:\\gitprojects\\...')
#7 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(357): Kohana_View::capture('G:\\gitprojects\\...', Array)
#8 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#10 G:\gitprojects\PersonalWebsite\www\application\classes\Controller\Welcome.php(9): Kohana_Response->body(Object(View))
#11 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 G:\gitprojects\PersonalWebsite\www\index.php(119): Kohana_Request->execute()
#17 {main} in file:line
2014-08-30 01:03:26 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(/G:\gitprojects\PersonalWebsite\www\/www/assets/packages/style.json): failed to open stream: Invalid argument ~ G:\gitprojects\PersonalWebsite\package\package.php [ 44 ] in file:line
2014-08-30 01:03:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'G:\\gitprojects\\...', 44, Array)
#1 G:\gitprojects\PersonalWebsite\package\package.php(44): file_get_contents('/G:\\gitprojects...')
#2 G:\gitprojects\PersonalWebsite\package\package.php(13): Package->getList('css', Array)
#3 G:\gitprojects\PersonalWebsite\package\package.php(22): Package->getCssList()
#4 G:\gitprojects\PersonalWebsite\package\include.php(7): Package->getCssHtml()
#5 G:\gitprojects\PersonalWebsite\www\application\views\index.php(8): Inclusion::includeCss('G:\\gitprojects\\...')
#6 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(61): include('G:\\gitprojects\\...')
#7 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(357): Kohana_View::capture('G:\\gitprojects\\...', Array)
#8 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#10 G:\gitprojects\PersonalWebsite\www\application\classes\Controller\Welcome.php(9): Kohana_Response->body(Object(View))
#11 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 G:\gitprojects\PersonalWebsite\www\index.php(119): Kohana_Request->execute()
#17 {main} in file:line
2014-08-30 01:03:39 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(/G:\gitprojects\PersonalWebsite\www\www/assets/packages/style.json): failed to open stream: Invalid argument ~ G:\gitprojects\PersonalWebsite\package\package.php [ 44 ] in file:line
2014-08-30 01:03:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'G:\\gitprojects\\...', 44, Array)
#1 G:\gitprojects\PersonalWebsite\package\package.php(44): file_get_contents('/G:\\gitprojects...')
#2 G:\gitprojects\PersonalWebsite\package\package.php(13): Package->getList('css', Array)
#3 G:\gitprojects\PersonalWebsite\package\package.php(22): Package->getCssList()
#4 G:\gitprojects\PersonalWebsite\package\include.php(7): Package->getCssHtml()
#5 G:\gitprojects\PersonalWebsite\www\application\views\index.php(8): Inclusion::includeCss('G:\\gitprojects\\...')
#6 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(61): include('G:\\gitprojects\\...')
#7 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(357): Kohana_View::capture('G:\\gitprojects\\...', Array)
#8 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#10 G:\gitprojects\PersonalWebsite\www\application\classes\Controller\Welcome.php(9): Kohana_Response->body(Object(View))
#11 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 G:\gitprojects\PersonalWebsite\www\index.php(119): Kohana_Request->execute()
#17 {main} in file:line
2014-08-30 01:03:45 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(/G:\gitprojects\PersonalWebsite\www\/assets/packages/style.json): failed to open stream: Invalid argument ~ G:\gitprojects\PersonalWebsite\package\package.php [ 44 ] in file:line
2014-08-30 01:03:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'G:\\gitprojects\\...', 44, Array)
#1 G:\gitprojects\PersonalWebsite\package\package.php(44): file_get_contents('/G:\\gitprojects...')
#2 G:\gitprojects\PersonalWebsite\package\package.php(13): Package->getList('css', Array)
#3 G:\gitprojects\PersonalWebsite\package\package.php(22): Package->getCssList()
#4 G:\gitprojects\PersonalWebsite\package\include.php(7): Package->getCssHtml()
#5 G:\gitprojects\PersonalWebsite\www\application\views\index.php(8): Inclusion::includeCss('G:\\gitprojects\\...')
#6 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(61): include('G:\\gitprojects\\...')
#7 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(357): Kohana_View::capture('G:\\gitprojects\\...', Array)
#8 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#10 G:\gitprojects\PersonalWebsite\www\application\classes\Controller\Welcome.php(9): Kohana_Response->body(Object(View))
#11 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 G:\gitprojects\PersonalWebsite\www\index.php(119): Kohana_Request->execute()
#17 {main} in file:line
2014-08-30 01:03:47 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(/G:\gitprojects\PersonalWebsite\www\assets/packages/style.json): failed to open stream: Invalid argument ~ G:\gitprojects\PersonalWebsite\package\package.php [ 44 ] in file:line
2014-08-30 01:03:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'G:\\gitprojects\\...', 44, Array)
#1 G:\gitprojects\PersonalWebsite\package\package.php(44): file_get_contents('/G:\\gitprojects...')
#2 G:\gitprojects\PersonalWebsite\package\package.php(13): Package->getList('css', Array)
#3 G:\gitprojects\PersonalWebsite\package\package.php(22): Package->getCssList()
#4 G:\gitprojects\PersonalWebsite\package\include.php(7): Package->getCssHtml()
#5 G:\gitprojects\PersonalWebsite\www\application\views\index.php(8): Inclusion::includeCss('G:\\gitprojects\\...')
#6 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(61): include('G:\\gitprojects\\...')
#7 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(357): Kohana_View::capture('G:\\gitprojects\\...', Array)
#8 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#10 G:\gitprojects\PersonalWebsite\www\application\classes\Controller\Welcome.php(9): Kohana_Response->body(Object(View))
#11 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 G:\gitprojects\PersonalWebsite\www\index.php(119): Kohana_Request->execute()
#17 {main} in file:line
2014-08-30 01:03:56 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(/G:\gitprojects\PersonalWebsite\www\assets\packages\style.json): failed to open stream: Invalid argument ~ G:\gitprojects\PersonalWebsite\package\package.php [ 44 ] in file:line
2014-08-30 01:03:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'G:\\gitprojects\\...', 44, Array)
#1 G:\gitprojects\PersonalWebsite\package\package.php(44): file_get_contents('/G:\\gitprojects...')
#2 G:\gitprojects\PersonalWebsite\package\package.php(13): Package->getList('css', Array)
#3 G:\gitprojects\PersonalWebsite\package\package.php(22): Package->getCssList()
#4 G:\gitprojects\PersonalWebsite\package\include.php(7): Package->getCssHtml()
#5 G:\gitprojects\PersonalWebsite\www\application\views\index.php(8): Inclusion::includeCss('G:\\gitprojects\\...')
#6 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(61): include('G:\\gitprojects\\...')
#7 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(357): Kohana_View::capture('G:\\gitprojects\\...', Array)
#8 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#10 G:\gitprojects\PersonalWebsite\www\application\classes\Controller\Welcome.php(9): Kohana_Response->body(Object(View))
#11 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 G:\gitprojects\PersonalWebsite\www\index.php(119): Kohana_Request->execute()
#17 {main} in file:line
2014-08-30 01:04:00 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(/G:\gitprojects\PersonalWebsite\www\assets/packages/style.json): failed to open stream: Invalid argument ~ G:\gitprojects\PersonalWebsite\package\package.php [ 44 ] in file:line
2014-08-30 01:04:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'G:\\gitprojects\\...', 44, Array)
#1 G:\gitprojects\PersonalWebsite\package\package.php(44): file_get_contents('/G:\\gitprojects...')
#2 G:\gitprojects\PersonalWebsite\package\package.php(13): Package->getList('css', Array)
#3 G:\gitprojects\PersonalWebsite\package\package.php(22): Package->getCssList()
#4 G:\gitprojects\PersonalWebsite\package\include.php(7): Package->getCssHtml()
#5 G:\gitprojects\PersonalWebsite\www\application\views\index.php(8): Inclusion::includeCss('G:\\gitprojects\\...')
#6 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(61): include('G:\\gitprojects\\...')
#7 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(357): Kohana_View::capture('G:\\gitprojects\\...', Array)
#8 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#10 G:\gitprojects\PersonalWebsite\www\application\classes\Controller\Welcome.php(9): Kohana_Response->body(Object(View))
#11 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 G:\gitprojects\PersonalWebsite\www\index.php(119): Kohana_Request->execute()
#17 {main} in file:line
2014-08-30 01:04:22 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(/G:\gitprojects\PersonalWebsite\www\assets/json/style.json): failed to open stream: Invalid argument ~ G:\gitprojects\PersonalWebsite\package\package.php [ 44 ] in file:line
2014-08-30 01:04:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'G:\\gitprojects\\...', 44, Array)
#1 G:\gitprojects\PersonalWebsite\package\package.php(44): file_get_contents('/G:\\gitprojects...')
#2 G:\gitprojects\PersonalWebsite\package\package.php(13): Package->getList('css', Array)
#3 G:\gitprojects\PersonalWebsite\package\package.php(22): Package->getCssList()
#4 G:\gitprojects\PersonalWebsite\package\include.php(7): Package->getCssHtml()
#5 G:\gitprojects\PersonalWebsite\www\application\views\index.php(8): Inclusion::includeCss('G:\\gitprojects\\...')
#6 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(61): include('G:\\gitprojects\\...')
#7 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(357): Kohana_View::capture('G:\\gitprojects\\...', Array)
#8 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#10 G:\gitprojects\PersonalWebsite\www\application\classes\Controller\Welcome.php(9): Kohana_Response->body(Object(View))
#11 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 G:\gitprojects\PersonalWebsite\www\index.php(119): Kohana_Request->execute()
#17 {main} in file:line
2014-08-30 01:04:27 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(/G:\gitprojects\PersonalWebsite\www\assets/json/style.json): failed to open stream: Invalid argument ~ G:\gitprojects\PersonalWebsite\package\package.php [ 44 ] in file:line
2014-08-30 01:04:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'G:\\gitprojects\\...', 44, Array)
#1 G:\gitprojects\PersonalWebsite\package\package.php(44): file_get_contents('/G:\\gitprojects...')
#2 G:\gitprojects\PersonalWebsite\package\package.php(13): Package->getList('css', Array)
#3 G:\gitprojects\PersonalWebsite\package\package.php(22): Package->getCssList()
#4 G:\gitprojects\PersonalWebsite\package\include.php(7): Package->getCssHtml()
#5 G:\gitprojects\PersonalWebsite\www\application\views\index.php(8): Inclusion::includeCss('G:\\gitprojects\\...')
#6 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(61): include('G:\\gitprojects\\...')
#7 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(357): Kohana_View::capture('G:\\gitprojects\\...', Array)
#8 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#10 G:\gitprojects\PersonalWebsite\www\application\classes\Controller\Welcome.php(9): Kohana_Response->body(Object(View))
#11 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 G:\gitprojects\PersonalWebsite\www\index.php(119): Kohana_Request->execute()
#17 {main} in file:line
2014-08-30 01:12:21 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(G:/gitprojects/PersonalWebsite/G:\gitprojects\PersonalWebsite\www\assets/json/style.json): failed to open stream: Invalid argument ~ G:\gitprojects\PersonalWebsite\package\package.php [ 44 ] in file:line
2014-08-30 01:12:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'G:\\gitprojects\\...', 44, Array)
#1 G:\gitprojects\PersonalWebsite\package\package.php(44): file_get_contents('G:/gitprojects/...')
#2 G:\gitprojects\PersonalWebsite\package\package.php(13): Package->getList('css', Array)
#3 G:\gitprojects\PersonalWebsite\package\package.php(22): Package->getCssList()
#4 G:\gitprojects\PersonalWebsite\package\include.php(7): Package->getCssHtml()
#5 G:\gitprojects\PersonalWebsite\www\application\views\index.php(8): Inclusion::includeCss('G:\\gitprojects\\...')
#6 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(61): include('G:\\gitprojects\\...')
#7 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(357): Kohana_View::capture('G:\\gitprojects\\...', Array)
#8 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#10 G:\gitprojects\PersonalWebsite\www\application\classes\Controller\Welcome.php(9): Kohana_Response->body(Object(View))
#11 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 G:\gitprojects\PersonalWebsite\www\index.php(119): Kohana_Request->execute()
#17 {main} in file:line