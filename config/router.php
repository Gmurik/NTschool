<?php

$routerContainer = new \Aura\Router\RouterContainer();
$router = $routerContainer->getMap();

$router->get('home', '/', \NtSchool\Action\HomeAction::class);
$router->get('products','/products', \NtSchool\Action\ProductsAction::class);
$router->get('singleProduct','/product', \NtSchool\Action\SingleProduct::class);
$router->get('cart','/cart', \NtSchool\Action\CartAction::class);
$router->get('contacts','/contacts', \NtSchool\Action\ContactsAction::class);
$router->get('checkout','/checkout', \NtSchool\Action\CheckoutAction::class);
$router->get('registration','/registration', \NtSchool\Action\RegistrationAction::class);
$router->get('schedule','/schedule', \NtSchool\Action\ScheduleAction::class);
$router->get('team','/team', \NtSchool\Action\TeamAction::class);
$router->get('teamMember','/team-member', \NtSchool\Action\TeamMemberAction::class);
$router->get('services','/services', \NtSchool\Action\ServicesAction::class);
$router->get('service','/single-service', \NtSchool\Action\SingleServicesAction::class);
$router->get('faq','/faq', \NtSchool\Action\FaqAction::class);
$router->get('404','/404', \NtSchool\Action\NotFoundAction::class);
