<?php

namespace Mpt\Model;

abstract class AbstractPrayerData implements PrayerData
{
    public function getExtraAttributes()
    {
        return [];
    }
}
