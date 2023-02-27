<?php
/**
 * Magento Customer AccountController tests
 *
 * @package    Mage_CatalogSearch
 * @copyright  Copyright (c) 2010 Ibuildings
 * @version    $Id$
 */

/**
 * Mage_Customer_AccountControllerTest
 *
 * @package    Mage_Customer
 * @subpackage Mage_Customer_Test
 *
 *
 * @uses PHPUnit_Framework_Magento_TestCase
 */
class Mage_Customer_AccountControllerTest extends MageTest_PHPUnit_Framework_ControllerTestCase {

    /**
     * indexActionIsSecureAndRequiresLogin
     * @test
     */
    public function indexActionIsSecureAndRequiresLogin()
    {
        $this->dispatch('customer/account/index');
        $this->markTestIncomplete(
                  'This test has not been implemented yet.'
                );
    } // indexActionIsSecureAndRequiresLogin

    /**
     * indexActionReturnsDashboardToLoggedInUser
     * @author Alistair Stead
     * @test
     */
    public function indexActionReturnsDashboardToLoggedInUser()
    {
        // Log in with the fixtures user
        $this->_login('foo', 'bar');
        // Attempt to access the account page
        $this->dispatch('customer/account/index');
        $this->markTestIncomplete(
                  'This test has not been implemented yet.'
                );
    } // indexActionReturnsDashboardToLoggedInUser


    /**
     * Internal helper method to streamline the process of user login
     *
     * @return void
     * @author Alistair Stead
     **/
    protected function _login($username, $password)
    {
        // TODO add method body
    }
}
