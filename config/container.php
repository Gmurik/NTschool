<?php

/** @var $renderer \Illuminate\View\Factory */

use Aura\Di\ContainerBuilder;

$builder = new ContainerBuilder();
$container = $builder->newInstance();

$container->set(\NtSchool\Action\HomeAction::class, function () use ($renderer) {
    return new \NtSchool\Action\HomeAction($renderer);
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