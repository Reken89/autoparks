<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use App\Models\AuthModel;

class AuthModelTest extends TestCase
{
    //Запуск тестов vendor/bin/phpunit tests
    private string $password = "r12345";
    
    //Тест на авторизацию
    public function testAuth()
    {
        $auth = new AuthModel;
        $result = $auth->ExaminAuth('admin', md5($this->password));
        self::assertIsArray($result);        
    }
    
}