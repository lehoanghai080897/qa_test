<?php
namespace Page\Acceptance;

class CrudPage
{
    // include url of current page
    public static $URL = '';

    /**
     * @var string of create new Reservation
     */
    public static   $newReservation =   '//a[text()="New Reservation"]';

    /**
     * @var string of reload before data
     */
    public static   $reloadData     =   '//a[text()="Reload Data"]';

    /**
     * @var string of delete chose data
     */
    public static   $deleteData     =   '//a[text()="Delete"]';

    /**
     * @var string of edit data
     */
    public static   $editData       =   '(//a[text()="Edit"])[2]';





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
