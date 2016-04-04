<?php

/**
 * Class CivibuildCreateTest
 *
 * Execute "civibuild create" and ensure it prodcues a website.
 *
 * @todo Check if an instance named "civibuild-test" already exist before creating it
 * @todo Destroy created test intance after run "civibuild create ..." test
 */
class CivibuildCreateTest extends PHPUnit_Framework_TestCase {

  /**
   * Create a test instance name Civibuild-test
   * (assumes no one will have created such an instance)
   */
  public function testCiviBuildCreate() {
    $createCommand = 'civibuild create civibuild-test --force --type wp-demo --civi-ver master' .
      ' --url http://civibuild-test.localhost';

    system($createCommand, $commandStatus);
    $this->assertEquals(0, $commandStatus);
  }

}
