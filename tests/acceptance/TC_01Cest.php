<?php 
use Step\Acceptance\HomeStep as Home;
use Faker\Factory;
class TC_01Cest
{
    /**
     * @var int
     */
    protected $tableID;
    protected $emptyTableID;
    protected $invalidTableId1;
    protected $invalidTableId2;
    protected $number;
    protected $emptyNumber;
    protected $incorrectNumber;
    protected $date;
    protected $emptyDate;
    protected $invalidDate;
    protected $descr;
    protected $emptyDescr;
    protected $stTime;
    protected $emptyStTime;
    protected $invalidStTime;
    protected $erroMes;

    /**
     *  constructor.
     */
    public function __construct()
    {
        $this->faker             =   Factory::create();
        $this->tableID           =   $this->faker->numberBetween(1,7);
        $this->emptyTableID      =   '';
        $this->invalidTableId1   =   $this->faker->text(5);
        $this->invalidTableId2   =   '12ab';
        $this->number            =   $this->faker->numberBetween(0,500);
        $this->incorrectNumber   =   'hai';
        $this->emptyNumber       =   '';
        $this->date              =   $this->faker->date('d/m/Y','now');
        $this->emptyDate         =   ' ';
        $this->invalidDate       =   '10/30/1000';
        $this->descrip           =   $this->faker->text(20);
        $this->emptyDescr        =   '';
        $this->stTime            =   $this->faker->numberBetween(17,23);
        $this->emptyStTime       =   ' ';
        $this->invalidDate       =   $this->faker->numberBetween('0','100');

    }

    /**
     * creat new data
     */
    public function creatnew(Home $I)
    {
        $I->wantToTest('I want to go to new Reservation Page');
        $I->goToCreate();
        $I->AddNewReservation($this->tableID,$this->number,$this->date,$this->descrip,$this->stTime);
    }

    /**
     * edit data
     */
    public function edit(Home $I)
    {
        $I->goToEdit();
        $I->$I->AddNewReservation($this->tableID,$this->number,$this->date,$this->descrip,$this->stTime);
    }

    /**
     * detele data
     */
    public function delete(Home $I)
    {
        $I->deleteData();
    }

    /**
     * clear data
     */
    public function cleardata(Home $I)
    {
        $I->clearData();
    }

    /**
     * readload data
     */
    public function readload(Home $I)
    {
        $I->reloadData();
    }


}
