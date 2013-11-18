<?php
print "<h2>";
printf(_("To get all sources"));
print "</h2>";
print "<pre>";
print "wget https://github.com/Open-UDC/open-udc/archive/v0.2.0.tar.gz" ;
print "</pre>";
print "<h2>";
printf(_("Install Lud: OpenUDC Client"));
print "</h2>";
print "<p>";
printf(_("Get sources"));
print "</p>";
print "<pre>";
print "git clone https://github.com/Open-UDC/lud" ;
print "</pre>";
print "<p>";
printf(_("Install"));
print "</p>";
print "<pre>";
print "cd lud" ;
print "</pre>";
print "<pre>";
print "make install" ;
print "</pre>";
print "<p>";
printf(_("Now you can launch lud main menu:"));
print "</p>";
print "<pre>";
print "lud.sh" ;
print "</pre>";
print "<p>";
printf(_("Now you can choose in the menu : "));
print "</p>";
print "<ul>";
print "<li>";
printf(_("It asks you informations (place of birth, date of birth, last name, first name) in order to generate a UDID2 certificate needed to be with you unique OpenGPG/OpenUDC key ID."));
print "</li>";
print "<li>";
printf(_("When your certificate is generated, it shows a menu. "));
print "</li>";
print "<li>";
printf(_("Launching the programm \"seahorse\" you can check your unique UDID2-OpenUDC key is on the window \"My personnal keys\". "));
print "</li>";
print "<li>";
printf(_("Share your KEY with an OpenUDC community Node "));
print "</li>";
print "</ul>";
print "<h2>";
printf(_("Install OpenUDC Node (ludd)"));
print "</h2>";
print "<p>";
printf(_("Prepare depends"));
print "</p>";
print "<pre>";
print "apt-get install libgpgme11-dev" ;
print "</pre>";
print "<p>";
printf(_("Get sources"));
print "</p>";
print "<pre>";
print "git clone https://github.com/Open-UDC/thttpgpd" ;
print "</pre>";
print "<p>";
printf(_("Install"));
print "</p>";
print "<pre>";
print "cd thttpgpd" ;
print "</pre>";
print "<pre>";
print "./configure --enable-OpenUDC" ;
print "</pre>";
print "<pre>";
print "make" ;
print "</pre>";
print "<pre>";
print "make install" ;
print "</pre>";
print "<p>";
printf(_("Check that /usr/local/var/ludd is created (show hidden file to see it) "));
print "</p>";
print "<pre>";
print "ls -a /usr/local/var/ludd" ;
print "</pre>";
print "<p>";
printf(_("Type the command :"));
print "</p>";
print "<pre>";
print "ludd_init.sh" ;
print "</pre>";
print "<pre>";
print "ludd" ;
print "</pre>";
print "<p>";
printf(_("You can check your local adress : http://127.0.0.1:11371/ and so access to your OpenUDC LUDD node "));
print "</p>";
print "<p>";
printf(_("You can always retrying the process of compiling / installing with the commands :"));
print "</p>";
print "<pre>";
print "sudo make distclean " ;
print "</pre>";
print "<pre>";
print "./configure && make " ;
print "</pre>";
print "<pre>";
print "sudo make uninstall" ;
print "</pre>";
print "<pre>";
print "sudo make install" ;
print "</pre>";
?>
