<?php

namespace NtSchool\Action;

use Psr\Http\Message\ServerRequestInterface;
use Timur\Notifier\NotifierAdapterInterface;
use Timur\Notifier\ObserverAdapterInterface;

final class AdminSignInAction
{
    protected $renderer;
    /** @var Factory */
    protected $validator;

    public function __construct($view, $validator)
    {
        $this->renderer = $view;
        $this->validator = $validator;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        $messages = null;
        $data = [];

        if ($request->getMethod() == 'POST') {
            $data = $request->getParsedBody();

            try {
                $this->validator->validate(
                    $data,
                    [
                        'email' => ['required', 'email', 'unique:users,email'],
                        'password' => ['required', 'min:8', 'confirmed'],
                        'password_confirmation' => ['required', 'min:8'],
                    ]
                );


                header('Location: /');
            } catch (ValidationException $e) {
                $messages = $e->validator->errors();
            }
        }

//
        return $this->renderer->make('admin.adminSignIn', array_merge([
            'messages' => $messages,
            'title' => 'PetShop Registration',
            'pageName' => 'Registration',
            'url' => '/products',
            'labelForUrl' => 'Shop',
        ]), $data);
    }
}
