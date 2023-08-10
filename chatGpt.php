<?php

$baseFolder = 'Backups';

// Get the current day of the week (0 for Sunday, 6 for Saturday)
$currentDay = date('w');

// Map the day of the week to the corresponding folder name
$dayFolders = [
    0 => 'Sunday',
    1 => 'Monday',
    2 => 'Tuesday',
    3 => 'Wednesday',
    4 => 'Thursday',
    5 => 'Friday',
    6 => 'Saturday'
];

// Get the folder name for today's backups
$todayFolder = $dayFolders[$currentDay];

// Construct the full path to today's backup folder
$backupFolderPath = $baseFolder . '/' . $todayFolder;

// Get the current date in the format 'YYYY-MM-DD'
$currentDate = date('Y-m-d');

// Construct the filename for today's backup file
$backupFileName = 'file.bak';

// Construct the full path to today's backup file
$backupFilePath = $backupFolderPath . '/' . $backupFileName;

// Check if the backup file exists and was modified today
if (file_exists($backupFilePath)) {
    $lastModified = date('Y-m-d', filemtime($backupFilePath));
    if ($lastModified === $currentDate) {
        echo "Today's backup exists and was modified today.\n";
    }
}