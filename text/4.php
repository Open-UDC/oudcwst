<?php
print "</ul>";
print "<h2>";
printf(_("Frequently asked questions"));
print "</h2>";
print "<h3>";
printf(_("What are the step needed to join an Open-UDC community ?"));
print "</h3>";
print "<ol>";
print "<li>";
printf(_("Create a OpenPGP key with the Open-UDC command line client. Also you can use \"gpg\" with a special <a href =\"http://node1.openudc.org:11371/udid2/\" >OpenUDC UDID2</a>."));
print "</li>";
print "<li>";
printf(_("Your key must be signed by 5 or more known yet registered users within the community (at least enough to be valid with GnuPG's default criteria)"));
print "</li>";
print "<li>";
printf(_("You learn to use LUD or GLUD client to connect to a LUDD node."));
print "</li>";
print "<li>";
printf(_("You are in."));
print "</li>";
print "</ol>";
print "<h3>";
printf(_("What mean M, N, c in OpenUDC concepts ?"));
print "</h3>";
print "<p>";
printf(_("M or M(t) means the whole monetary Mass, the sum of all unit coins within the community at the date \"t\". N or N(t) mean the total of registered users inside the community at the date \"t\". The parameter \"c\" is used as the &#37; of monetary mass growth per time unit (ex : &#37; per year or &#37; per month)."));
print "</p>";
print "<h3>";
printf(_("What are LUD, GLUD, LUDD, UDID2 ?"));
print "</h3>";
print "<ul>";
print "<li>";
printf(_("LUDD is the free software that run an OpenUDC P2P node."));
print "</li>";
print "<li>";
printf(_("LUD is the free software OpenUDC standard command line client. LUD means \"LUD Universal Dividend\" able to connect to a LUDD node. You must install LUD on your own machine."));
print "</li>";
print "<li>";
printf(_("GLUD is a graphical web interface for LUD with a development version here : http://node1.openudc.org:11371/udid2/ "));
print "</li>";
print "<li>";
printf(_("UDID2 is OpenUDC information needed to add to OpenPGP keys to become candidate to OpenUDC PGP keys. (see more information in technical specifications for developers)."));
print "</li>";
print "</ul>";
print "<h3>";
printf(_("What are the rules of OpenUDC Universal Dividend creation ?"));
print "</h3>";
print "<p>";
printf(_("The rules (for the development standard) are defined as a time function UD(t), defined following Relative Money Theory (TRM in french) as a differential dividend : The quantitative dividend must change with only differential (small) adds, reaching in relative amount \"c\" for the average long term growth."));
print "</p>";
print "<ul>";
print "<li>";
printf(_("UD(0) = 100 Q "));
print "</li>";
print "<li>";
printf(_("UD(t+1) = MAX [UD(t) ; c*M(t)/N(t)]"));
print "</li>";
print "</ul>";
print "<p>";
printf(_("Where \"t\" is the past month. UD(t) is the UD of past month. \"c\" is the minimal &#37; UD growth as defined in the 4th rule. M(t) is the existing monetary mass, and N(t) is the total amount of members. All are values just before calculation of new monthly UD(t+1):"));
print "</p>";
print "<ul>";
print "<li>";
printf(_("c = ln(ev:2) / (ev:2)"));
print "</li>";
print "</ul>";
print "<p>";
printf(_("c is defined here as the quantitative average monetary mass growth based on human average life expectancy. For a 80 years average life expectancy we have:"));
print "</p>";
print "<ul>";
print "<li>";
printf(_("c = ln(40) / 40 = 9&#37; / year."));
print "</li>";
print "</ul>";
print "<p>";
printf(_("As those rules are parameters of OpenUDC, one community can use OpenUDC with other set of rules. OpenUDC is totally independant of the rules chosen by a money community. "));
print "</p>";
print "<h3>";
printf(_("Why OpenUDC contributors say \"there is no inflation\" since we have a Monetary growth ?"));
print "</h3>";
print "<p>";
printf(_("Because inflation is a false conclusion due to ignorance relatively to a bad unit of money because the Quantative units of money growth due to Universal Dividend is not the Relative one."));
print "</p>";
print "<p>";
printf(_("An OpenUDC community use the relative unit 1 UD, and not the quantitative 1 Q. So there is still in the money system the same number of money units N / c UD. And then the number of UD money units only depend of the number of members, and the average amount of money per member is always fixed or limited by 1 / c UD."));
print "</p>";
print "<p>";
printf(_("So inflation is not a problem in Universal Dividend money system, because there is Quantitative creation but not Relative money creation and we count in number of Universal Dividend, the Relative Unit. "));
print "</p>";
print "<p>";
printf(_("Inflation is only a problem in non-free money system when some individuals create money for their own benefit and to the detriment of others, and so the problem is due to that non-free money model."));
print "</p>";
?>
