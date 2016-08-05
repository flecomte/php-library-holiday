<?php

/*
 * This file is part of the Holiday Library.
 *
 * (c) Michał Mańko <github@michalmanko.com>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Michalmanko\Holiday\Test\Provider;

use Michalmanko\Holiday\Holiday;
use Michalmanko\Holiday\Provider\France;

/**
 * @author Fabrice Lecomte <fabrice.lecomte.be@gmail.com>
 */
class FranceTest extends AbstractTestProvider
{
    public function getProviderCountryCode()
    {
        return 'FR';
    }

    public function getProviderCountryName()
    {
        return 'France';
    }

    public function getProviderInstanceOf()
    {
        return France::class;
    }

    public function dataProvider()
    {
        return array(
            array(
                'Jour de l\'an',
                Holiday::TYPE_HOLIDAY,
                array('2016-01-01', '2017-01-01')
            ),
            array(
                'Lundi de Pâques',
                Holiday::TYPE_HOLIDAY,
                array('2016-03-28', '2017-04-17'),
            ),
            array(
                'Fête du Travail',
                Holiday::TYPE_HOLIDAY,
                array('2016-05-01', '2017-05-01'),
            ),
            array(
                'Fête de la Victoire',
                Holiday::TYPE_HOLIDAY,
                array('2016-05-08', '2017-05-08'),
            ),
            array(
                'Jeudi de l\'Ascension',
                Holiday::TYPE_HOLIDAY,
                array('2016-05-05', '2017-05-25'),
            ),
            array(
                'Lundi de Pentecôte',
                Holiday::TYPE_HOLIDAY,
                array('2016-05-16', '2017-06-05'),
            ),
            array(
                'Fête nationale',
                Holiday::TYPE_HOLIDAY,
                array('2016-07-14', '2017-07-14'),
            ),
            array(
                'Assomption',
                Holiday::TYPE_HOLIDAY,
                array('2016-08-15', '2017-08-15'),
            ),
            array(
                'Toussaint',
                Holiday::TYPE_HOLIDAY,
                array('2016-11-01', '2017-11-01'),
            ),
            array(
                'Armistice de 1918',
                Holiday::TYPE_HOLIDAY,
                array('2016-11-11', '2017-11-11'),
            ),
            array(
                'Noël',
                Holiday::TYPE_HOLIDAY,
                array('2016-12-25', '2017-12-25'),
            ),
        );
    }
}
