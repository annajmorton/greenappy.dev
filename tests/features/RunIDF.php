<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\ServiceProvider;

class RunIDF extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */

    public function testOScall()
    {
        $idf = 

        $OSrun = new OSrun();
        $OSrun->flag('--help');
        $OSrun->run();

        $this->visit('/testOScall')
             ->see('help output text here');
    }


    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel 5');
    }
}
