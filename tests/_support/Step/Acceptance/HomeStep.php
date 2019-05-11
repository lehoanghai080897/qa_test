<?php
namespace Step\Acceptance;
use Page\Acceptance\CrudPage as Crud;
use Page\Acceptance\FormPage as NewR;
class HomeStep extends \AcceptanceTester
{
    /**
     * go to page creat new data
     */
    public function goToCreate()
    {
        $I = $this;
        $I->amOnPage(Crud::$URL);
        $I->waitForElementVisible(Crud::$newReservation,'20');
        $I->click(Crud::$newReservation);

    }

    /**
     * creat new data
     */
    public function AddNewReservation($Id, $num, $date, $descip, $stTime)
    {
        $I = $this;
        $I->waitForElementVisible(NewR::$tableIdInput,'10');
        $I->fillField(NewR::$tableIdInput,$Id);
        $I->fillField(NewR::$numOfPerInput,$num);
        $I->fillField(NewR::$dateInput,$date);
        $I->fillField(NewR::$decripInput,$descip);
        $I->fillField(NewR::$startTimeInput,$stTime);
        $I->click(NewR::$btnAddEdit);
    }

    /**
     * edit
     */
    public function goToEdit()
    {
        $I = $this;
        $I->amOnPage(Crud::$URL);
        $I->wantToTest('I want to go to Edit Page');
        $I->waitForElementVisible(Crud::$editData,'20');
        $I->click(Crud::$editData);
        $I->wait(3);
    }

    /**
     * read load data
     */
    public function reloadData()
    {
        $I = $this;
        $I->amOnPage(Crud::$URL);
        $I->wantToTest('I want to reload data of Page');
        $I->waitForElementVisible(Crud::$reloadData,'20');
        $I->click(Crud::$reloadData);
    }

    /**
     * detelet data
     */

    public function deleteData()
    {
        $I = $this;
        $I->amOnPage(Crud::$URL);
        $I->wantToTest('I want to delete data chosen');
        $I->waitForElementVisible(Crud::$deleteData,'20');
        $I->click(Crud::$deleteData);
    }

    /**
     * clear data
     */

    public function clearData()
    {
        $I = $this;
        $I->amOnPage(NewR::$URL);
        $I->wantToTest('I want to clear data input');
        $I->waitForElementVisible(NewR::$clear,'20');
        $I->click(NewR::$clear);
    }

}