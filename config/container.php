<?php

/** @var $renderer \Illuminate\View\Factory */

use Aura\Di\ContainerBuilder;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
$builder = new ContainerBuilder();
$container = $builder->newInstance();

//$container->set('logger', function (){
//$logger = new Logger('name');
//$logger->pushHandler(new StreamHandler(__DIR__ . '/../resources/logs/main.logger'));
//return $logger;
//});

//$container->set('logger', function (){
//    // create a log channel
//    $log = new Logger('name');
//    $log->pushHandler(new StreamHandler(__DIR__ . '/../resources/logs/main.log'));
//
//    $logger = new \NtSchool\MonologAdapter($log);
//
//    return $logger;
//});

$container->set('logger', function (){
   $log = new \Wa72\SimpleLogger\FileLogger(__DIR__ . '/../resources/logs/main.log');
   $logger = new \NtSchool\SimpleLoggerAdapter($log);
   return $logger;
});

$container->set(\NtSchool\Action\HomeAction::class, function () use ($renderer,$container) {
    return new \NtSchool\Action\HomeAction($renderer ,$container->get('logger') );
});

$container->set(\NtSchool\Action\ProductsAction::class, function () use ($renderer){
    return new \NtSchool\Action\ProductsAction($renderer);
});
$container->set(\NtSchool\Action\SingleProduct::class, function () use ($renderer){
    return new \NtSchool\Action\SingleProduct($renderer);
});
$container->set(\NtSchool\Action\CartAction::class, function () use ($renderer){
    return new \NtSchool\Action\CartAction($renderer);
});
$container->set(\NtSchool\Action\ContactsAction::class, function () use ($renderer){
    return new \NtSchool\Action\ContactsAction($renderer);
});
$container->set(\NtSchool\Action\CheckoutAction::class, function () use ($renderer){
    return new \NtSchool\Action\CheckoutAction($renderer);
});
$container->set(\NtSchool\Action\RegistrationAction::class, function () use ($renderer){
    return new \NtSchool\Action\RegistrationAction($renderer);
});
$container->set(\NtSchool\Action\ScheduleAction::class, function () use ($renderer){
    return new \NtSchool\Action\ScheduleAction($renderer);
});
$container->set(\NtSchool\Action\TeamAction::class, function () use ($renderer){
    return new \NtSchool\Action\TeamAction($renderer);
});
$container->set(\NtSchool\Action\TeamMemberAction::class, function () use ($renderer){
    return new \NtSchool\Action\TeamMemberAction($renderer);
});
$container->set(\NtSchool\Action\ServicesAction::class, function () use ($renderer){
    return new \NtSchool\Action\ServicesAction($renderer);
});
$container->set(\NtSchool\Action\SingleServicesAction::class, function () use ($renderer){
    return new \NtSchool\Action\SingleServicesAction($renderer);
});
$container->set(\NtSchool\Action\FaqAction::class, function () use ($renderer){
    return new \NtSchool\Action\FaqAction($renderer);
});
$container->set(\NtSchool\Action\NotFoundAction::class, function () use ($renderer){
    return new \NtSchool\Action\NotFoundAction($renderer);
});
$container->set(\NtSchool\Action\BlogPostsAction::class, function () use ($renderer){
    return new \NtSchool\Action\BlogPostsAction($renderer);
});