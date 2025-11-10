<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        $session = session();
        $request = service('request');
        $validation = \Config\Services::validation();

        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required');

        $post = $request->getPost();

        if (! $validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        $email = $post['email'];
        $userModel = new UsersModel();
        $user = $userModel->where('email', $email)->first();

        if (! $user) {
            $session->setFlashdata('errors', ['email' => 'No account found for that email']);
            return redirect()->back()->withInput();
        }

        $userArr = $user->toArray();

        if (! password_verify($post['password'], $userArr['password_hash'])) {
            $session->setFlashdata('errors', ['password' => 'Incorrect password']);
            return redirect()->back()->withInput();
        }

        $session->set('user', [
            'id' => $userArr['id'],
            'email' => $userArr['email'],
            'first_name' => $userArr['first_name'],
            'last_name' => $userArr['last_name'],
            'type' => $userArr['type'],
            'display_name' => trim(($userArr['first_name'][0] ?? '') . ' ' . ($userArr['middle_name'][0] ?? '') . ' ' . ($userArr['last_name'] ?? '')),
        ]);

        $type = strtolower($userArr['type'] ?? 'client');
        return $type === 'manager' ? redirect()->to('/admin/dashboard') : redirect()->to('/');
    }

    public function logout()
    {
        session()->destroy();
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 3600, $params['path'] ?? '/', $params['domain'] ?? '', isset($_SERVER['HTTPS']), true);
        return redirect()->to('/');
    }

    public function signup()
    {
        $session = session();
        $request = service('request');
        $validation = \Config\Services::validation();

        $validation->setRule('first_name', 'First Name', 'required');
        $validation->setRule('last_name', 'Last Name', 'required');
        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required|min_length[6]');

        $post = $request->getPost();

        if (! $validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        $userModel = new UsersModel();
        $data = [
            'first_name' => $post['first_name'],
            'middle_name' => $post['middle_name'] ?? null,
            'last_name' => $post['last_name'],
            'email' => $post['email'],
            'password_hash' => password_hash($post['password'], PASSWORD_DEFAULT),
            'type' => 'client',
            'account_status' => 1,
            'email_activated' => 0,
        ];

        $userModel->insert($data);
        return redirect()->to('/login')->with('success', 'Account created successfully!');
    }
}
