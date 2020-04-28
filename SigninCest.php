<?php


class SigninCest
{
    public function tryToTest(AcceptanceTester $I)
    {
      $I->amOnPage('/login');
      $I->click('//*[@id="loggedInUser"]');
      $I->fillField('//*[@id="login-email"]','djpapstar@yahoo.com');
      $I->fillField('//*[@id="password"]','Pavel123$%');
      $I->click(['class'=>'btn']);
}
}
