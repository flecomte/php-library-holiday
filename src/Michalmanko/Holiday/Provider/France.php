<?php

/*
 * This file is part of the Holiday Library.
 *
 * (c) Michał Mańko <github@michalmanko.com>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Michalmanko\Holiday\Provider;

use ArrayObject;
use Michalmanko\Holiday\Holiday;

/**
 * French Holidays Provider.
 *
 * @author Michał Mańko <github@michalmanko.com>
 */
class France extends AbstractProvider
{
    /**
     * {@inheritdoc}
     */
    protected function prepareHolidays($year)
    {
        $data = new ArrayObject();

        // New Year's Day
        $data->append($this->createHoliday(
            'Jour de l\'an',
            $year . '-01-01',
            Holiday::TYPE_HOLIDAY
        ));

        // Easter Monday
        $data->append($this->createHoliday(
            'Lundi de Pâques',
            $this->getEaster($year)->modify('+1 day'),
            Holiday::TYPE_HOLIDAY
        ));

        // Labour Day
        $data->append($this->createHoliday(
            'Fête du Travail',
            $year . '-05-01',
            Holiday::TYPE_HOLIDAY
        ));

        // Victory in Europe Day (End of hostilities in Europe in World War II)
        $data->append($this->createHoliday(
            'Fête de la Victoire',
            $year . '-05-08',
            Holiday::TYPE_HOLIDAY
        ));

        $data->append($this->createHoliday(
            'Jeudi de l\'Ascension',
            $this->getEaster($year)->modify('+39 day'),
            Holiday::TYPE_HOLIDAY
        ));

        // Pentecost Sunday
        $data->append($this->createHoliday(
            'Lundi de Pentecôte',
            $this->getEaster($year)->modify('+50 day'),
            Holiday::TYPE_HOLIDAY
        ));

        $data->append($this->createHoliday(
            'Fête nationale',
            $year . '-07-14',
            Holiday::TYPE_HOLIDAY
        ));

        // Assumption of Mary to Heaven
        $data->append($this->createHoliday(
            'Assomption',
            $year . '-08-15',
            Holiday::TYPE_HOLIDAY
        ));

        // All Saints' Day
        $data->append($this->createHoliday(
            'Toussaint',
            $year . '-11-01',
            Holiday::TYPE_HOLIDAY
        ));

        // Armistice Day (End of World War I)
        $data->append($this->createHoliday(
            'Armistice de 1918',
            $year . '-11-11',
            Holiday::TYPE_HOLIDAY
        ));

        // Christmas Day
        $data->append($this->createHoliday(
            'Noël',
            $year . '-12-25',
            Holiday::TYPE_HOLIDAY
        ));

        return $data->getArrayCopy();
    }
}
