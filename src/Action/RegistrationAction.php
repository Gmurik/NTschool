<?php


namespace NtSchool\Action;


use Illuminate\Validation\Factory;
use Illuminate\Validation\ValidationException;
use NtSchool\Model\User;
use Psr\Http\Message\ServerRequestInterface;

class RegistrationAction
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

                $user = new User();
                $user->email = $data['email'];
                $user->password = password_hash($data['password'], PASSWORD_ARGON2I);
                $user->save();
                header('Location: /');
            } catch (ValidationException $e) {
                $messages = $e->validator->errors();
            }
        }

//
        return $this->renderer->make('registration', array_merge([
            'messages' => $messages,
            'title' => 'PetShop Registration',
            'pageName' => 'Registration',
            'url' => '/products',
            'labelForUrl' => 'Shop',
        ]), $data);
    }
}