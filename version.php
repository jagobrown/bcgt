<?php

//Each time the upgrade process is to be run this should be the date of the day when the 
//code and database changes are made!!!!!!
    $plugin->version = 2014080400;  // YYYYMMDDHH (year, month, day, 24-hr time)
    $plugin->requires = 2010112400; // YYYYMMDDHH (This is the release version for Moodle 2.0)
    //$plugin->cron = 60; - This would be every 60 seconds..................
    $plugin->cron = 3600;
