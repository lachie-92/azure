<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Create Practitioner from Patient Registration as Admin');
$I->login('13533test@gmail.com', 'admin2d42#4baeo43@');
$I->amonPage('/account/patient-registration');

$I->click('//a[@href="/account/patient-registration/1" and contains(., "View")]');
$I->see('New Patient Registration');

$I->click('//a[@href="/account/practitioner-registration/new/1" and contains(., "Create a New Practitioner")]');
$I->see('New Practitioner Registration');

$I->fillField('email', 'regpractitioneremailtest321@gmail.com');
$I->selectOption('title', 'Mr');
$I->fillField('first_name', 'Practitioner');
$I->fillField('last_name', 'Codeception');

$I->fillField('provider_number', '21412341');

$I->fillField('telephone', '341414');
$I->fillField('mobile_phone', '13414141');
$I->fillField('password', 'testtest');
$I->fillField('password_confirmation', 'testtest');

$I->selectOPtion('#company_state_select', 'NSW');
$I->click('#find_company_btn');
$I->waitForJS("return $.active == 0;", 10);
$I->selectOption('//input[@type="radio" and @name="company_id"]', '1');

$I->click('//button[@title="Register" and contains(., "Create Practitioner Account")]');
$I->seeCurrentUrlEquals('/account/practitioner-registration');
$I->see('Account has been created');

$I->seeInDatabase('practitioner_registrations', array(
    'id' => 2,
    'email' => 'regpractitioneremailtest321@gmail.com',
    'title' => 'Mr',
    'first_name' => 'Practitioner',
    'last_name' => 'Codeception',
    'company_id' => 1,
    'clinic_name' => 'company one',
    'business_type' => 'company',
    'business_number' => '01234',
    'provider_number' => '21412341',
    'street' => '123 Fake Street',
    'suburb' => 'Hornsby',
    'city' => 'Sydney',
    'state' => 'NSW',
    'country' => 'Australia',
    'postcode' => '2077',
    'telephone' => '341414',
    'mobile_phone' => '13414141'
));

$I->dontSeeInDatabase('practitioner_registrations', array(
    'id' => 2,
    'approval' => null,
));

$I->seeInDatabase('customers', array(
    'id' => 4,
    'title' => 'Mr',
    'name' => 'Practitioner Codeception',
    'first_name' => 'Practitioner',
    'last_name' => 'Codeception',
    'country' => 'Australia',
));

$I->seeInDatabase('customer_addresses', array(
    'id' => 3,
    'type' => 'Account',
    'address' => '123 Fake Street Hornsby',
    'street' => '123 Fake Street',
    'suburb' => 'Hornsby',
    'city' => 'Sydney',
    'state' => 'NSW',
    'country' => 'Australia',
    'postcode' => '2077',
    'customer_id' => 4
));

$I->seeInDatabase('customer_numbers', array(
    'id' => 5,
    'type' => 'Account Phone',
    'number' => '341414',
    'customer_id' => 4
));

$I->seeInDatabase('customer_numbers', array(
    'id' => 6,
    'type' => 'Account Mobile',
    'number' => '13414141',
    'customer_id' => 4
));

$I->seeInDatabase('users', array(
    'id' => 4,
    'email' => 'regpractitioneremailtest321@gmail.com',
    'group' => 'Practitioner',
    'newsletter_subscription' => false,
    'approved_by' => 'Admin',
    'status' => 'Active',
    'timezone' => 'Australia',
    'customer_id' => 4
));

$I->seeInDatabase('practitioners', array(
    'id' => 2,
    'practitioner_license' => '21412341',
    'user_id' => 4,
    'company_id' => 1
));
