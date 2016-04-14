<?php

use Libs\MvcContext;

$routes[] = new MvcContext(array('/', '/admin(/)'), 'GET', "Apps\\Cores\\Controllers\\HomeCtrl", 'index');

$routes[] = new MvcContext('/admin/config.js', 'GET', "Apps\\Cores\\Controllers\\HomeCtrl", 'configJS');

$routes[] = new MvcContext('/admin/user', 'GET', "Apps\\Cores\\Controllers\\UserCtrl", 'index');
$routes[] = new MvcContext('/admin/usermanager', '*', "Apps\\Cores\\Controllers\\UserCtrl", 'userManager');
$routes[] = new MvcContext('/admin/user/import', 'GET,POST', "Apps\\Cores\\Controllers\\UserCtrl", 'importUser');
$routes[] = new MvcContext('/admin/group', 'GET', "Apps\\Cores\\Controllers\\UserCtrl", 'group');

$routes[] = new MvcContext('/admin/application', 'GET', "Apps\\Cores\\Controllers\\SettingCtrl", 'application');
$routes[] = new MvcContext('/admin/setting', 'GET', "Apps\\Cores\\Controllers\\SettingCtrl", 'setting');
$routes[] = new MvcContext('/admin/setting/update', 'POST', "Apps\\Cores\\Controllers\\SettingCtrl", 'update');


$routes[] = new MvcContext('/rest/department/move', 'PUT', "Apps\\Cores\\Controllers\\Rest\\UserCtrl", 'moveDepartments');
$routes[] = new MvcContext('/rest/department/:id', 'GET', "Apps\\Cores\\Controllers\\Rest\\UserCtrl", 'getDepartment');
$routes[] = new MvcContext('/rest/department/:id', 'PUT', "Apps\\Cores\\Controllers\\Rest\\UserCtrl", 'updateDepartment');
$routes[] = new MvcContext('/rest/department', 'DELETE', "Apps\\Cores\\Controllers\\Rest\\UserCtrl", 'deleteDepartments');

$routes[] = new MvcContext('/rest/group', 'GET', "Apps\\Cores\\Controllers\\Rest\\UserCtrl", 'getGroups');
$routes[] = new MvcContext('/rest/group/:id/user', 'GET', "Apps\\Cores\\Controllers\\Rest\\UserCtrl", 'getGroupUsers');
$routes[] = new MvcContext('/rest/group/:id', 'PUT', "Apps\\Cores\\Controllers\\Rest\\UserCtrl", 'updateGroup');
$routes[] = new MvcContext('/rest/group', 'DELETE', "Apps\\Cores\\Controllers\\Rest\\UserCtrl", 'deleteGroups');

$routes[] = new MvcContext('/rest/basePermission', 'GET', "Apps\\Cores\\Controllers\\Rest\\UserCtrl", 'getBasePermissions');

$routes[] = new MvcContext('/rest/user/search', 'GET', "Apps\\Cores\\Controllers\\Rest\\UserCtrl", 'search');
$routes[] = new MvcContext('/rest/user/move', 'PUT', "Apps\\Cores\\Controllers\\Rest\\UserCtrl", 'moveUsers');
$routes[] = new MvcContext('/rest/user/checkUniqueAccount', 'POST', "Apps\\Cores\\Controllers\\Rest\\UserCtrl", 'checkUniqueAccount');
$routes[] = new MvcContext('/rest/user/:id', 'PUT', "Apps\\Cores\\Controllers\\Rest\\UserCtrl", 'updateUser');
$routes[] = new MvcContext('/rest/user', 'DELETE', "Apps\\Cores\\Controllers\\Rest\\UserCtrl", 'deleteUsers');

$routes[] = new MvcContext('/admin/login/changePassword', 'GET,POST', "Apps\\Cores\\Controllers\\LoginCtrl", 'changePassword');
$routes[] = new MvcContext('/admin/login', 'GET,POST', "Apps\\Cores\\Controllers\\LoginCtrl", 'index');

//toan
$routes[] = new MvcContext('/admin/cms', '*', "Apps\\CMS\\Controllers\\CategoriesCtrl", 'index');
$routes[] = new MvcContext('/admin/cms/angularjs', 'GET', "Apps\\CMS\\Controllers\\CategoriesCtrl", 'angularjs');
$routes[] = new MvcContext('/admin/cms/video', 'GET', "Apps\\CMS\\Controllers\\CategoriesCtrl", 'video');
$routes[] = new MvcContext('/admin/cms/add', 'POST', "Apps\\CMS\\Controllers\\CategoriesCtrl", 'add');
$routes[] = new MvcContext('/admin/cms/delete', 'POST', "Apps\\CMS\\Controllers\\CategoriesCtrl", 'delete');
$routes[] = new MvcContext('/admin/cms/edit', 'POST', "Apps\\CMS\\Controllers\\CategoriesCtrl", 'edit');
$routes[] = new MvcContext('/admin/cms/test', '*', "Apps\\CMS\\Controllers\\CategoriesCtrl", 'test');
$routes[] = new MvcContext('/admin/cms/mp3', '*', "Apps\\CMS\\Controllers\\CategoriesCtrl", 'mp3');
$routes[] = new MvcContext('/admin/cms/user', '*', "Apps\\CMS\\Controllers\\CategoriesCtrl", 'user');
$routes[] = new MvcContext('/admin/menu', '*', "Apps\\CMS\\Controllers\\MenuCtrl", 'index2');

$routes[] = new MvcContext('/admin/calculator', '*', "Apps\\CMS\\Controllers\\CategoriesCtrl", 'calculator');

$routes[] = new MvcContext('/admin/cms/angularjs/getdata', '*', "Apps\\CMS\\Controllers\\CategoriesCtrl", 'getData');
$routes[] = new MvcContext('/uploads', '*', "Apps\\CMS\\Controllers\\CategoriesCtrl", 'upload');
$routes[] = new MvcContext('/admin/cms/user/getuser', '*', "Apps\\CMS\\Controllers\\UserCtrl", 'getUser');
$routes[] = new MvcContext('/admin/cms/user/edit', '*', "Apps\\CMS\\Controllers\\UserCtrl", 'edit');
$routes[] = new MvcContext('/admin/cms/user/delete', '*', "Apps\\CMS\\Controllers\\UserCtrl", 'delete');
$routes[] = new MvcContext('/admin/cms/user/add', '*', "Apps\\CMS\\Controllers\\UserCtrl", 'add');
