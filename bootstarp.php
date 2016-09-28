<?php
include_once('AutoLoader.php');
// Register the directory to your include files
#AutoLoader::registerDirectory('../classes');
AutoLoader::registerDirectory('/home/bp/sharingan_box/sharingan/backend/controllers');
print "kssd";
print_r(get_included_files());
AutoLoader::printLodaedCalss('/home/bp/sharingan_box/sharingan/backend/controllers');

