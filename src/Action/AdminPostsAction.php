<?php

namespace NtSchool\Action;

use Psr\Http\Message\ServerRequestInterface;
use Illuminate\Validation\Factory;
use Illuminate\Validation\ValidationException;
use NtSchool\Model\User;
use NtSchool\Action\AdminAuthTrait;
final class AdminPostsAction
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
        AdminAuthTrait::checkAuth();
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
                header('Location: /sign-in');

            } catch (ValidationException $e) {
                $messages = $e->validator->errors();
            }
        }

//
        return $this->renderer->make('admin.adminPosts', array_merge([
            'messages' => $messages,
            'title' => 'Admin Posts',
        ]), $data);
    }
}
