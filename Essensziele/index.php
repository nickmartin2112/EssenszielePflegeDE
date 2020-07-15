<?php
use classes\commands\OverlayCommand;
spl_autoload_register();

$command = new OverlayCommand();
$command->execute();