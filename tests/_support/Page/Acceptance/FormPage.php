<?php
namespace Page\Acceptance;

class FormPage
{
    // include url of current page
    public static $URL = '/QATest/reservationform';
    /**
     * @var string of inputs in the Form
     */
    public static $tableIdInput     =   '//input[@id="tableID"]';
    public static $numOfPerInput    =   '//input[@id="numberofperson"]';
    public static $dateInput        =   '//input[@id="date"]';
    public static $decripInput      =   '//textarea[@id="description"]';
    public static $startTimeInput   =   '//input[@id="startTime"]';

    /**
     * @var string of Icon when enter incorrect value
     */
    public static $errorTableIdIcon   =   '(//img[@class="t-error-icon"])[1]';
    public static $errorNumOfPerIcon  =   '(//img[@class="t-error-icon"])[2]';
    public static $errorStartTimeIcon =   '(//img[@class="t-error-icon"])[3]';

    /**
     * @var string of label when enter incorrect value
     */
    public static $idErrorLabel       =   '//label[@id="tableID:label"]';
    public static $numOfPerErrorLabel =   '//label[@id="numberofperson:label"]';
    public static $stTimeErrorLabel   =   '//label[@id="startTime:label"]';

    /**
     * @var string of [add/edit] button
     */
    public static $btnAddEdit   =   '//input[@class="t-beaneditor-submit"]';

    /**
     * @var string of clear tag
     */
    public static $clear        =   "//a[text()=\"clear\"]";

    /**
     * @param $param
     * @return string
     */
    public static $textForm     =   '//h1[text()=" Table Booking Form"]';

    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
