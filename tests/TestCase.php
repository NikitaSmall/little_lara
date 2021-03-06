<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }

    public function setUp()
    {
      parent::setUp();
      $this->prepareForTests();
    }

    /**
    * Migrates the database and set the mailer to 'pretend'.
    * This will cause the tests to run quickly.
    *
    */
    private function prepareForTests()
    {
      // Config::set('database.default', 'sqlite_testing');
      Artisan::call('migrate');
      Mail::pretend(true);
    }
}
