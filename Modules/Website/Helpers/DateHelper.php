<?php


namespace Modules\Website\Helpers;

use Carbon\Carbon;

class DateHelper
{
    private $date;
    private $quarter;
    private $day;
    private $month;
    private $year;
    private $firstQuarterDate;
    private $lastQuarterDate;
    private $dayOfTheWeek;
    private $dateFormat;

    /**
     * DateHelper constructor.
     * @param $date
     * @param $dateFormat
     */
    public function __construct($date, $dateFormat)
    {
        $this->date = Carbon::createFromFormat($dateFormat, $date);
        $this->dateFormat = $dateFormat;

        $this->quarter = $date->quarter;
        $this->day = $date->day;
        $this->month = $date->month;
        $this->year = $date->year;
        $this->dayOfTheWeek = $date->dayOfWeek;

        if($this->quarter == 1) {
            $this->firstQuarterDate = "{$this->year}-01-01";
            $this->lastQuarterDate = "{$this->year}-03-31";
        } else if($this->quarter == 2) {
            $this->firstQuarterDate = "{$this->year}-04-01";
            $this->lastQuarterDate = "{$this->year}-06-30";
        } else if($this->quarter == 3) {
            $this->firstQuarterDate = "{$this->year}-07-01";
            $this->lastQuarterDate = "{$this->year}-09-30";
        } else if($this->quarter == 4) {
            $this->firstQuarterDate = "{$this->year}-10-01";
            $this->lastQuarterDate = "{$this->year}-12-31";
        }
    }

    //get methods
    public function getDate()
    {
        return $this->date->toDateString();
    }

    public function getQuarter()
    {
        return $this->quarter;
    }

    public function getDay()
    {
        return $this->day;
    }

    public function getMonth()
    {
        return $this->month;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getFirstQuarterDate()
    {
        return $this->firstQuarterDate;
    }

    public function getLastQuarterDate()
    {
        return $this->lastQuarterDate;
    }

    public function getDayOfTheWeek()
    {
        return $this->dayOfTheWeek;
    }

    public function getDateFormat()
    {
        return $this->dateFormat;
    }


    //static methods for date format
    static function DATE_FORMAT_1()
    {
        return 'Y-m-d';
    }

    static function DATE_FORMAT_2()
    {
        return 'Y-d-m';
    }

    static function DATE_FORMAT_3()
    {
        return 'd-m-Y';
    }

    static function DATE_FORMAT_4()
    {
        return 'Y/m/d';
    }

    static function DATE_FORMAT_5()
    {
        return 'Y/d/m';
    }

    static function DATE_FORMAT_6()
    {
        return 'd/m/Y';
    }
}
