<?php
print "<h2>";
printf(_("OpenUDC project"));
print "</h2>";
print "<p>";
printf(_("OpenUDC is a set of free softwares designed to create a free money system based on a decentralised human P2P network."));
print "</p>";
print "<p>";
printf(_("The softwares are under <a title=\"WikiPedia\" href=\"http://en.wikipedia.org/wiki/AGPL\">AGPL</a> et <a title=\"WikiPedia\" href=\"http://en.wikipedia.org/wiki/LGPL\">LGPL</a>."));
print "</p>";
$coment=sprintf(_("Convergence of skills OpenUDC"));
get_image_in_langage("graph/all_jobs","svg","100%", $coment);
print "<h3>";
printf(_("Free Money system"));
print "</h3>";
print "<p>";
printf(_("The OpenUDC softwares are designed to manage a free money system as described by the TRM (Théorie Relative de la Monnaie), that means a money system where no human has privileges in front of money creation either in time or in space."));
print "</p>";
print "<p>";
printf(_("These money systems solutions are Universal Dividend based money systems. Every member in the community create (equal to receive) the same Universal Dividend per period of time. "));
print "</p>";
print "<p>";
printf(_("OpenUDC development chosen rule is described in the FAQ."));
print "</p>";
print "<p>";
printf(_("OpenUDC allow each community who want to use it's own free money to describe it's own Universal Dividend set of rules."));
print "</p>";
print "<h3>";
printf(_("Human P2P network"));
print "</h3>";
$coment=sprintf(_("A web of trust in a human community"));
get_image("graph/mens","svg","80%",$coment );
print "<p>";
printf(_("The OpenUDC human P2P network is based on <a href=\"http://en.wikipedia.org/wiki/OpenPGP\">OpenPGP</a>. There is an OpenPGP Web of Trust which identify the members of one OpenUDC community sharing the same free money."));
print "</p>";
print "<p>";
printf(_("A new member entering the money system has to be signed by a determined (paramater of the money system) number of existing members. A member yet existing in the money system has to renew periodicly signing in a period of time (other parameter of the money system), as a renewable proof of life. "));
print "</p>";
print "<p>";
printf(_("So there is no center, no centralised organism in an OpenUDC money system."));
print "</p>";
print "<h3>";
printf(_("Exchanges"));
print "</h3>";
print "<p>";
printf(_("Exchanges are made directly from person to person in \"digital coins\". The sender announce to the system the amount and and the receiver, he signs it, and then send it to one node. The node makes a propagation of the information, and when the whole system fully validate the transaction, the receiver has the information."));
print "</p>";
$coment=sprintf(_("A gives money to B (mode1 transaction)"));
get_image_in_langage("graph/pay1","svg","80%",$coment );
print "<h3>";
printf(_("OpenUDC nodes"));
print "</h3>";
print "<p>";
printf(_("A node is an instance of OpenUDC software, connected to other nodes. All thoses P2P connected nodes know the OpenUDC Web of Trust, and share the same database in a synchronised way. So the database itself is a P2P shared database containing the whole Monetary Mass. So each member of an OpenUDC money system canhave it's own node and own copy of the updated OpenUDC Web of Trust and OpenUDC Monetary Mass. "));
print "</p>";
$coment=sprintf(_("A Network nodes"));
get_image("graph/node","svg","80%",$coment );
print "<h2>";
printf(_("Technical choices "));
print "</h2>";
print "<h3>";
printf(_("Digital coins "));
print "</h3>";
print "<p>";
printf(_("Each digital coin is identified in an unique way. It contains the information of it's date of creation, creation owner (the member who was the base of that unit creation), and of course the up-to-date owner of that coin. These digital coins are technically available in different sizes as powers of 2 : 2^0, or 2^1, or 2^2, 2^3 etc... This choice is due to optimisation of memory space, and also due to growing quantitative monetary mass. "));
print "</p>";
print "<p>";
printf(_("Note1 : OpenUDC system has to show always the information on a relative units, so quantative units can be seen only for technical base. On it's own account a member has a number a quantitive units Q, he can count on number of Universal Dividend making the calculation account : Q / UD."));
print "</p>";
print "<p>";
printf(_("In relative units the monetary Mass don't grow in number of UD units, there is always a maximum average of 1 / c Universal Dividend per member, so in the relative unit UD there is not really monetary growth."));
print "</p>";
print "<p>";
printf(_("Note2 : The OpenUDC digital coins are all in the P2P shared database, and so there is no possibility for those coins to be lost (you could lose your private OpenUDC Web of Trust Key, but that problem can be solved by other ways than the OpenUDC system itself). "));
print "</p>";
print "<h3>";
printf(_("Accounts are \"keys\""));
print "</h3>";
print "<p>";
printf(_("To obtain an account, it is enough to create it, and then to be signed by a determined number of existing members. Account will be activated only when the system rules will be fully ok.Practically you create an OpenUDC WoT private key, and an OpenUDC WoT public key, associated with a specific OpenUDC information named UDID2 information. "));
print "</p>";
print "<p>";
printf(_("With those keys you can access to transactions of your own account, send to or receive from others. You sign and encrypt a \"digital order\" to send, and then the node recognise you, and make the job. When it's fully ok, the receiver has the complete information and some digital coins have change of owner. Work of the nodes When a node receive an encrypted \"digital order\" it recognised the sender, and he is able to decrypt it and work on it. The node makes verifications that the sender is the owner of each digital coins of the digital order."));
print "</p>";
$coment=sprintf(_("A gives money to B (mode1 transaction)"));
get_image_in_langage("graph/pay1","svg","80%",$coment );
$coment=sprintf(_("A gives money to B (mode2 transaction)"));
get_image_in_langage("graph/pay2","svg","80%",$coment );
print "<h3>";
printf(_("Communication between nodes"));
print "</h3>";
print "<p>";
printf(_("When a node collect a transaction, it informs immediately two other nodes. Then these others nodes inform two other nodes and so on. It's an exponential speed. Each node know before the nodes it has to inform. When a new node connect or disconnect to the system, new communication rules are automatically calculated."));
print "</p>";
print "<div class=\"carousel\"><ul><li><img src=\"graph/node.svg\" width=\"80%\" alt=\"node\" /></li><li><img src=\"graph/node1.svg\" alt=\"node1\" /></li><li><img src=\"graph/node2.svg\" width=\"80%\" alt=\"node2\" /></li><li><img src=\"graph/node3.svg\" alt=\"node3\" width=\"80%\" /></li><li><img src=\"graph/node4.svg\" width=\"80%\" alt=\"node4\" /></li><li><img src=\"graph/node5.svg\" alt=\"node5\" width=\"80%\"/></li></ul></div>";
?>
