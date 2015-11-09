<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel 5');
    }

    /**
     *
     *
     * @return void
     */
    public function testLoginPage()
    {
        $this->visit('auth.login')
            ->see('LOGIN');

    }

    /**
     *
     *
     * @return void
     */
    public function testUserWithoutAccesToLogin()
    {
        $this->unlogged();
        $this->visit('/resource')
            ->seePages(route('auth.login'))
            ->see('Login')
            ->dontSee('Logout');

    }

    /**
     *
     *
     * @return void
     */
    public function testUserWithoutAccesToResource()
    {
        $this->logged();
        $this->visit('/resource')
            ->seePageId('/resource');
    }


    private function logged(){
        session::set('authenticated', true);
    }

    private function unlogged(){
        session::set('authenticated', false);
    }

    public function testLoginPageHaveRegisterLink()
    {
        $this->visit('/login')
            ->type('rogermelich@gmail.com', 'email')
            ->type('123456789', 'password')
            ->click('Register')
            ->seePageIs('/register');
    }
}
