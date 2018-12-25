<?php

namespace NtSchool\Action;

use Illuminate\Support\MessageBag;
use NtSchool\Model\User;
use Psr\Http\Message\ServerRequestInterface;
use Illuminate\Validation\Factory;
use Illuminate\Validation\ValidationException;




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
        $messages = new MessageBag();
        $data = [];
        $passwordHash = null;

        if ($request->getMethod() == 'POST') {
            $data = $request->getParsedBody();
            $userData = User::where('email',$data['email'])->first();
            if ($data['email']=== $userData['email']){
                $passwordHash = $userData['password'];
            }

            try {
                $this->validator->validate(
                    $data,
                    [
                        'email' => ['required', 'email', 'exists:users,email'],
                        'password' => ['required', 'min:8']
                    ]
                );
                if(!password_verify($data['password'],$passwordHash)){
                    $messages->add('email','Введен не верный пароль');
                }
                $_SESSION['user'] = $data;
                header('Location: /admin-posts');
            } catch (ValidationException $e) {
                $messages = $e->validator->errors();
            }
        }

//
        return $this->renderer->make('admin.adminSignIn', array_merge([
            'messages' => $messages,
            'title' => 'PetShop Registration',
        ]), $data);
    }
}
