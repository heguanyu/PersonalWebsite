<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-31 12:11:38 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(G:/gitprojects/PersonalWebsite/www/assets/json/menu.json): failed to open stream: No such file or directory ~ G:\gitprojects\PersonalWebsite\package\package.php [ 44 ] in file:line
2014-08-31 12:11:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'G:\\gitprojects\\...', 44, Array)
#1 G:\gitprojects\PersonalWebsite\package\package.php(44): file_get_contents('G:/gitprojects/...')
#2 G:\gitprojects\PersonalWebsite\package\package.php(50): Package->getList('css', Array)
#3 G:\gitprojects\PersonalWebsite\package\package.php(13): Package->getList('css', Array)
#4 G:\gitprojects\PersonalWebsite\package\package.php(22): Package->getCssList()
#5 G:\gitprojects\PersonalWebsite\package\include.php(7): Package->getCssHtml()
#6 G:\gitprojects\PersonalWebsite\www\application\views\index.php(9): Inclusion::includeCss('/www/assets/jso...')
#7 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(61): include('G:\\gitprojects\\...')
#8 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(357): Kohana_View::capture('G:\\gitprojects\\...', Array)
#9 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#10 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#11 G:\gitprojects\PersonalWebsite\www\application\classes\Controller\Welcome.php(9): Kohana_Response->body(Object(View))
#12 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#13 [internal function]: Kohana_Controller->execute()
#14 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#15 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 G:\gitprojects\PersonalWebsite\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 G:\gitprojects\PersonalWebsite\www\index.php(119): Kohana_Request->execute()
#18 {main} in file:line