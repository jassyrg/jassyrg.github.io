<link rel="shortcut icon" href="http://musicfamily.org/realm/Factions/picks/favicon.ico">
<link rel="shortcut icon" href="http://musicfamily.org/realm/Factions/picks/favicon.ico">
<link rel="stylesheet" type="text/css" href="/realm/scripts/common.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="http://musicfamily.org/realm/scripts/jquery.style-my-tooltips.js"></script>
<title>G00F's Not a Wiki </title>
<meta charset="UTF-8">
<meta name="keywords" content="Realm Grinder, Game, Artifact, Artifacts, Factions, Reincarnation, Challenges, Mercenary Builds, Mercenary, Research Builds, Research, Upgrades, Spells, Ascension, Ascension Builds, Prestige Research, Prestige, Prestige Builds, Kongregate, Trophies, Trophy, Faction Champion, Games, Coins, Treasure, Mana, Assistants, Gem, Gems,  Archaeology, Excavation, Ruby, Rubies, Lore Artifacts, Quest Artifacts, Fairy, Elf, Angel, Goblin, Undead, Demon, Titan, Druid, Faceless, Dwarf, Drow, Research, Notation, Premium Upgrades, Requirements, Final Reward, Reward"/>
<style>
        table.Faction {
            border-collapse: collapse;
        }
        .Faction th,.Faction td {
            border: 2px solid black;
        padding: 3px;
        }
        .Faction td {
            font-weight: bold
        padding: 10px;
        }
       .gsc-cursor-page  {
        padding-right: 10px;
       }
    </style>
<style>
        table.ManaColors {
            border-collapse: collapse;
        }
        .ManaColors th,.ManaColors td {
            border: 3px solid black;
        }
        .ManaColors td {
            font-weight: bold
        }
       .gsc-cursor-page  {
        padding: 4px;
       }
</style>
<style>
        table.numtable {
            border-collapse: collapse;
        }
        .numtable tr:hover {
            background-color: #ffffff
        }
        .numtable tr:hover {
            background-color: #ffffff
        }
        .numtable th,.numtable td {
            border: 3px solid #4c5b86;
        }
        .numtable td {
            font-weight: bold
        }
       .gsc-cursor-page  {
        padding: 4px;
       }
    </style>
<style>
    .black_overlay {
        display: none;
        position: absolute;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        background-color: black;
        z-index: 1001;
        -moz-opacity: 0.8;
        opacity: .80;
        filter: alpha(opacity=80);
    }

    .white_content {
        display: none;
        position: absolute;
        top: 0%;
        left: 0%;
        width: 99%;
        height: 50%;
        padding: 16px;
        border: 1px solid orange;
        background-color: white;
        z-index: 1002;
        overflow: auto;
    }
</style>

<script>
    $(document).ready(function () {
        $("#Expand").on("hide.bs.collapse", function () {
            $(".btn").html('<span class="glyphicon glyphicon-collapse-down"></span> Expand');
        });
        $("#Expand").on("show.bs.collapse", function () {
            $(".btn").html('<span class="glyphicon glyphicon-collapse-up"></span> Collapse');
        });
    });
</script>
<script>
    (function ($) {
        $(document).ready(function () {
            $("[research]").style_my_tooltips();
        });
    })(jQuery);
</script>
<script type="text/javascript">
    function shohid(e) {
        //$('.autohide').not(e.next()).hide();
        $(e).parents('.autohide').show();
        $(e).next().toggle();
    }
</script>
<div id="outer">
    <div id="parent">
        <div id="header" align="center">
        </div>
    </div>
    <div id="navbox">
        <div class="menu">
            <ul>
                <li><a href="/realm/Challenges" research="A complete list of Challenges and their requirements in image map form">Challenges</a>
                    <!--[if lte IE 6]>
                    <a href="#">Category one
                        <table>
                            <tr>
                                <td>
                    <![endif]-->
                    <ul>
                        <li><a href="/realm/Fairy" research="All Fairy Challenges">Fairy</a>
                        <li><a href="/realm/Elf" research="All Elf Challenges">Elf</a>
                        <li><a href="/realm/Angel" research="All Angel Challenges">Angel</a>
                        <li><a href="/realm/Goblin" research="All Goblin Challenges">Goblin</a>
                        <li><a href="/realm/Undead" research="All Undead Challenges">Undead</a>
                        <li><a href="/realm/Demon" research="All Demon Challenges">Demon</a>
                        <li><a href="/realm/Titan" research="All Titan Challenges">Titan</a>
                        <li><a href="/realm/Druid" research="All Druid Challenges">Druid</a>
                        <li><a href="/realm/Faceless" research="All Faceless Challenges">Faceless</a>
                        <li><a href="/realm/Dwarf" research="All Dwarf Challenges">Dwarfs</a>
                        <li><a href="/realm/Drow" research="All Drow Challenges">Drow</a>
                        <li><a href="/realm/Dragons" research="All Dragon Challenges">Dragons</a>
                        <li><a href="/realm/Archon" research="All Archon Challenges">Archon</a>
                        <li><a href="/realm/Djinn" research="All Djinn Challenges">Djinn</a>
                        <li><a href="/realm/Makers" research="All Makers Challenges">Makers</a>
                            <ul>
                            </ul>
                            <!--[if lte IE 6]>
                            </td></tr></table>
                            </a>
                            <![endif]-->
                        </li>
                    </ul>
                    <!--[if lte IE 6]>
                    </td></tr></table>
                    </a>
                    <![endif]-->
                </li>
                <li><a href="/realm/TrophyPage" research="A complete list of Trophies and their requirements in image map form">Trophies</a>
                    <!--[if lte IE 6]>
                    <a href="#">Category two
                        <table>
                            <tr>
                                <td>
                    <![endif]-->
                    <ul>
                        <!--<li><a href="/realm/TipsHints" research="Tips & Hints">Tips & Hints</a></li>-->
                        <li><a href="/realm/Coins" research="Coin Trophies">Coins</a></li>
                        <li><a href="/realm/Treasure" research="Treasure Trophies">Treasure</a></li>
                        <li><a href="/realm/ClickTrophies" research="Click Trophies">Clicks</a></li>
                        <li><a href="/realm/EachBuilding" research="Each Building Trophies">Each Building</a></li>
                        <li><a href="/realm/TotalBuildings" research="Total Buildings">Total Buildings</a></li>
                        <li><a href="/realm/Mana" research="Mana, Arcane, Spell Upgrade Trophies">Magic</a></li>
                        <li><a href="/realm/Spelltrophy" research="Spells Cast Trophies">Spell</a></li>
                        <li><a href="/realm/FactionCoin" research="Faction Coin Trophies">Faction Coin</a></li>
                        <li><a href="/realm/Assistant" research="Assistant Trophies">Assistant</a></li>
                        <li><a href="/realm/TArtifacts" research="Artifact Trophies">Artifact</a></li>
                        <li><a href="/realm/Gem" research="Gem Trophies">Gem</a></li>
                        <li><a href="/realm/Ruby" research="Ruby Trophies">Ruby</a></li>
                        <li><a href="/realm/Upgradetrophy" research="Upgrade Trophies">Upgrade</a></li>
                        <li><a href="/realm/FactionChampion" research="Faction Champion Trophies">Faction Champion</a></li>
                        <li><a href="/realm/GrandChampion" research="Grand Champion Trophies">Grand Champion</a></li>
                        <li><a href="/realm/MercOath" research="Oath of the Mercenary">Merc Oath</a></li>
                        <li><a href="/realm/RTrophies" research="Reincarnation Trophies">Reincarnation</a></li>
                        <li><a href="/realm/Archaeology" research="Archaeology Trophies">Archaeology</a></li>
                        <li><a href="/realm/Secret" research="Secret Trophies">Secret</a></li>
                    </ul>
                    <!--[if lte IE 6]>
                    </td></tr></table>
                    </a>
                    <![endif]-->
                </li>
                <li><a href="/realm/Factions">Factions</a>
                    <!--[if lte IE 6]>
                    <a href="#">CATEGORY THREE
                        <table>
                            <tr>
                                <td>
                    <![endif]-->
                    <ul>
                        <li><a href="/realm/FairyFaction" research="Fairy">Fairy</a></li>
                        <li><a href="/realm/ElfFaction" research="Elf">Elf</a></li>
                        <li><a href="/realm/AngelFaction" research="Angel">Angel</a></li>
                        <li><a href="/realm/GoblinFaction" research="Goblin">Goblin</a></li>
                        <li><a href="/realm/UndeadFaction" research="Undead">Undead</a></li>
                        <li><a href="/realm/DemonFaction" research="Demon">Demon</a></li>
                        <li><a href="/realm/TitanFaction" research="Titan">Titan</a></li>
                        <li><a href="/realm/DruidFaction" research="Druid">Druid</a></li>
                        <li><a href="/realm/FacelessFaction" research="Faceless">Faceless</a></li>
                        <li><a href="/realm/DwarfFaction" research="Dwarf">Dwarf</a></li>
                        <li><a href="/realm/DrowFaction" research="Drow">Drow</a></li>
                        <li><a href="/realm/DragonFaction" research="Dragon">Dragons</a></li>
                        <li><a href="/realm/MercenaryFaction" research="Mercenary">Mercenary</a></li>
                        <li><a href="/realm/ArchonFaction" research="Archon">Archon</a></li>
                        <li><a href="/realm/DjinnFaction" research="Djinn">Djinn</a></li>
                        <li><a href="/realm/MakersFaction" research="Makers">Makers</a></li>
                    </ul>
                    <!--[if lte IE 6]>
                    </td></tr></table>
                    </a>
                    <![endif]-->
                </li>
                <li><a href="/realm/Artifacts" research="A complete list of Artifacts and their requirements in image map form">Artifacts</a>
                    <!--[if lte IE 6]>
                    <a href="#">category 4
                        <table>
                            <tr>
                                <td>
                    <![endif]-->
                    <ul>
                        <li><a href="/realm/QuestArtifacts/" research="Quest Artifacts">Quest Artifacts</a></li>
                        <li><a href="/realm/LoreArtifacts/" research="Lore Artifacts">Lore Artifacts</a></li>
                    </ul>
                    <!--[if lte IE 6]>
                    </td></tr></table>
                    </a>
                    <![endif]-->
                </li>
                <li><a href="/realm/Research">Research</a>
                    <!--[if lte IE 6]>
                    <a href="#">EXPLORER
                        <table>
                            <tr>
                                <td>
                    <![endif]-->
                    <ul>
                        <li><a href="/realm/ResearchFacilities" research="Research Facilities">Research</a>
                            <ul>
                                <li><a href="/realm/Spellcraft" research="Spellcraft">Spellcraft</a></li>
                                <li><a href="/realm/Craftsmanship" research="Craftsmanship">Craftsmanship</a></li>
                                <li><a href="/realm/Divine" research="Divine">Divine</a></li>
                                <li><a href="/realm/Economics" research="Economics">Economics</a></li>
                                <li><a href="/realm/Alchemy" research="Alchemy">Alchemy</a></li>
                                <li><a href="/realm/Warfare" research="Warfare">Warfare</a></li>
                            </ul>
                        <li><a href="/realm/Researchtree" research="Researchtree">Research Tree</a></li>
                        <li><a href="/realm/UniqueBuilding" research="UniqueBuilding">Unique Buildings</a></li>
                        <li><a href="/realm/ResearchUpgrades" research="Research Upgrades">Upgrades</a>
                            <ul>
                                <li><a href="/realm/ResearchAssistantUpgrades" research="Assistant Upgrades">Assistant</a></li>
                                <li><a href="/realm/ResearchManaUpgrades" research="Mana Upgrades">Mana</a></li>
                                <li><a href="/realm/ResearchSpellUpgrades" research="Spell Upgrades">Spell</a></li>
                                <li><a href="/realm/ResearchFactionCoinUpgrades" research="Faction Coin Find Chance Upgrades">Faction Coin Find Chance</a></li>
                                <li><a href="/realm/ResearchUniqueBuildingUpgrades/" research="Unique Building Upgrades">Unique Building</a>
                                <li><a href="/realm/ResearchBuildingBasedOnUB/" research="Building Upgrades based on Unique Buildings">Building-UB</a>
                                <li><a href="/realm/ResearchNonUniqueUpgrades/" research="Non-Unique Building Upgrades slots">Non-Unique Building</a>
                                <li><a href="/realm/ResearchNeutralBuildingUpgrades/" research="Neutral Building Upgrades">Neutral Building</a>
                                <li><a href="/realm/ResearchAllBuildingUpgrades/" research="All other Building Upgrades">All Building</a>
                                <li><a href="/realm/ResearchClickRewardUpgrades/" research="Click Reward Upgrades">Click Reward</a>
                                <li><a href="/realm/ResearchGemBonusUpgrades/" research="Gem Upgrades">Gem Upgrades</a>
                            </ul>
                    </ul>
                    <!--[if lte IE 6]>
                    </td></tr></table>
                    </a>
                    <![endif]-->
                </li>
                <li><a href="/realm/Notation">Notation</a>
                    <!--[if lte IE 6]>
                    </td></tr></table>
                    </a>
                    <![endif]-->
                </li>
                <li><a href="/realm/PremiumUpgrades/">Premium</a>
                    <!--[if lte IE 6]>
                    </td></tr></table>
                    </a>
                    <![endif]-->
                </li>
            </ul>
        </div>
    </div>

    <div id="parent">
        <div id="leftcolumn">
            <div id="leftbox">
            </div>
            <div id="navcontainer">
                <ul id="navlist">
                  <li id="active"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
                    <li id="active"><a href="/realm" id="current">Home</a></li>
                    <li id="active"><a href="/realm/GuestBook/gbook.php" id="current">G00F's not a Guest Book</a></li>
                    <li id="active"><a href="/realm/SiteMap/" id="current">Sitemap</a></li>
                    <li id="active"><a href="/realm/RNG/" id="current">Random Number Generator</a></li>
                    <li id="active"><a href="/realm/Changes/" id="current">Latest Major Patch</a></li>
                    <li id="active"><a href="https://discord.gg/cq6zmQX" id="current">Official Realm Grinder Discord</a></li>
                    <P align="center"><b>The Game</b>
                      <li id="active"><a href="/realm/Terminology">Terminology HotKeys</a></li>
                    <li id="active"><a href="/realm/GameWindow">Game Window</a></li>
                    <li id="active"><a href="/realm/Reset">Abdication<br/>Reincarnation<br/>Ascension</a></li>
                    <li id="active"><a href="/realm/TrophyPage" reserach="A complete list of Trophies">Trophy Page</a></li>
                    <li id="active"><a href="/realm/TrophyGuide">Trophy Guide</a></li>
                    <li id="active"><a target="_blank" href="https://steamcommunity.com/sharedfiles/filedetails/?id=1118498519">Beginners Guide </a></li>
                    <li id="active"><a href="/realm/R16Guide">R16 Research Guide</a></li>
                    <li id="active"><a href="/realm/UsefulTables">Useful Tables</a></li>
                    <li id="active"><a target="_blank" research="R0 - R39 Guide" href="/realm/A0_Plot.png">A0 Plot</a></li>
                    <li id="active"><a target="_blank" research="R40 - R99 Guide" href="/realm/A1_Plot.png">A1 Plot</a></li>
                    <li id="active"><a href="/realm/Rubies">Rubies</a></li>
                    <li id="active"><a href="/realm/Events">Events</a></li>
                    <li id="active"><a href="/realm/BuildingAlignments">Building Alignments</a></li>
                    <li id="active"><a href="/realm/Changelog">Changelog</a></li>
                    <li id="active"><a href="/realm/PremiumUpgrades">Premium Upgrades</a></li>
                    <li id="active"><a href="/realm/Notation">Notation</a></li>
                    <li id="active"><a href="/realm/Kong">Kongregate Links</a></li>
                    <li id="active"><a href="/realm/Tools">Realm Grinder Tools</a></li>
                    <li id="active"><a href="/realm/BrowserIssues">Browser Issues</a></li>
                    <li id="active"><a href="/realm/WallofShame">Wall of Shame</a></li>
                    <P align="center">Upgrades
                    <li id="active"><a href="/realm/Upgrades">Upgrades</a></li>
                    <li id="active"><a href="/realm/BuildingUpgrades">Building Upgrades</a></li>
                    <li id="active"><a href="/realm/Factions">Factions</a></li>
                    <li id="active"><a href="/realm/FactionUpgrades">Faction Upgrades</a></li>
                    <li id="active"><a href="/realm/Heritages">Heritages</a></li>
                    <li id="active"><a href="/realm/Artifacts/">Artifacts</a></li>
                    <li id="active"><a href="/realm/Challenges/">Challenges</a></li>
                    <li id="active"><a href="/realm/Bloodline">Bloodlines</a></li>
                    <li id="active"><a href="/realm/Research">Research</a></li>
                    <li id="active"><a href="/realm/Researchtree">Research Tree</a></li>
                    <li id="active"><a href="/realm/Lineages">Lineages</a></li>
                    <li id="active"><a href="/realm/MercResearch">Mercenary Research</a></li>
                    <li id="active"><a href="/realm/Ascension2">Ascension 2</a></li>
                    <li id="active"><a href="/realm/ArtifactSet">Artifact Sets</a></li>
                    <li id="active"><a href="/realm/Spells">Spells and Tier Upgrades</a></li>
                    <li id="active"><a href="/realm/SunForce">Sun Force</a></li>
                    <P align="center">Builds
                    <li id="active"><a href="/realm/MercBuilds">Mercenary Builds</a></li>
                    <li id="active"><a href="/realm/ResearchBuilds" research="R16-R29">Research Builds</a></li>
                    <li id="active"><a href="/realm/PBuilds" research="R29-R39">Prestige Builds</a></li>
                    <li id="active"><a href="/realm/R40-R46" research="Ascension 1">R40-R46 Builds</a></li>
                    <li id="active"><a href="/realm/R47-R60" research="Dragons">R47-R59 Builds</a></li>
                    <li id="active"><a href="/realm/R60-R75" research="Lineages">R60-R75 Builds</a></li>
                    <li id="active"><a href="/realm/R75Plus" research="Mercenary Research">R75-R99 Builds</a></li>
                    <!--<li id="active"><a href="/realm/R90Plus" research="Veteran Figurine">R90-99 Builds</a></li>-->
                    <li id="active"><a href="/realm/R100Plus" research="Ascension 2">R100-R115 Builds</a></li>
                    <li id="active"><a href="/realm/R116Plus" research="Prestige Ascension 2">R116-R125 Builds</a></li>
                    <li id="active"><a href="/realm/R125Plus" research="Elite Factions">R125-R135 Builds</a></li>
                    <li id="active"><a href="/realm/R135Plus" research="Elite Challenges">R135-R159 Builds</a></li>
                    <li id="active"><a href="/realm/R160Plus" research="A3 Mercenaries">R160+ Builds</a></li>

                    </ul>
                    </div>
                    </div>
                    <div id="rightcolumn">
                    <div class="rightbox">
                  <div class="rightboxcontent">
                        <a href="https://discord.gg/cq6zmQX" research="Click to join Realm Grinder Chat on Discord"><img src="http://musicfamily.org/realm/Factions/picks/RealmGrinderGameRL.png"></img></a>
                    </div>
                    </div>
<link href="./templates/default/style.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript"><!--
    function openSmiley() {
        w = window.open("smileys.php", "smileys", "fullscreen=no,toolbar=no,status=no,menubar=no,scrollbars=yes,resizable=yes,directories=no,location=no,width=500,height=300");
        if (!w.opener) {
            w.opener = self;
        }
    }
    //-->
</script>
<h6>&nbsp&nbsp&nbsp<img src="http://musicfamily.org/realm/Factions/picks/book.png"></h6>
<div id="gbook_header">
    <b align="center"> </b>
    <br/>
    <br/>
    <div id="gbook_header">
        <b align="center"> <p>G00F's not a Guest book<p><center>Leave a comment.<p>Private messages will no longer be answered.<p>If you have a question ask in chat or on discord.</center></b>
        <!--TOP LINKS -->
        <div align="center">
            <a href="gbook.php">View guestbook</a> |
            <a href="gbook.php?a=sign">Sign guestbook</a>
            <br class="clear"/>

            <b><span class="gbook_entries_top">Number of entries: 202 | Number of pages: 21</span></b>
            <br class="clear"/>
             <b>1</b>  <a href="gbook.php?page=2">2</a>  <a href="gbook.php?page=3">3</a>  <a href="gbook.php?page=4">4</a>  <a href="gbook.php?page=5">5</a>  <a href="gbook.php?page=6">6</a>  <a href="gbook.php?page=2">Next &rsaquo;</a> <a href="gbook.php?page=21">Last &raquo;</a>        </div>
        <!--TOP LINKS -->
    </div>
    <!--HEADER END -->

    <!--NOTICE -->
        <!--NOTICE END -->

<!--COMMENT BOX -->
<div class="gbook_commentbox">

	<!--LEFT BOX -->
	<div class="gbook_left_box">
	<span class="gbook_submitted">Submitted by</span><br class="clear" />
	<span class="gbook_submitted_by">Name: <b>Jordan</b></span><br class="clear" />
	<span class="gbook_submitted_by">From: South Dakota</span><br class="clear" /><span class="gbook_submitted_by">E-mail: <a href="gbook.php?a=viewEmail&amp;num=0" class="gbook_submitted">Contact</a></span><br class="clear" />	</div>
	<!--LEFT BOX END -->

	<!--RIGHT BOX -->
	<div class="gbook_right_box">
	<span class="gbook_comments">Comments:</span><br class="clear" />
	<span class="gbook_comment">Thanks for a great up to date guide!!</span><br class="clear" />
	<hr align="left" />

		<!--RIGHT BOX 1 -->
		<div class="gbook_right_box_1">
		<span class="gbook_added"><i>Added: December 9, 2019</i></span>
		</div>
		<!--RIGHT BOX 1 END -->

		<!--RIGHT BOX 2 -->
		<div class="gbook_right_box_2" align="right">
		<a href="gbook.php?a=delete&amp;num=0"><img src="./templates/default/images/delete.gif" alt="Delete this entry" class="gbook_nobrd" title="Delete this entry" /></a>
		<a href="gbook.php?a=reply&amp;num=0"><img src="./templates/default/images/reply.gif" alt="Reply to entry" class="gbook_nobrd" title="Reply to entry" /></a>
		<a href="gbook.php?a=viewIP&amp;num=0"><img src="./templates/default/images/ip.gif" alt="View IP address" class="gbook_nobrd" title="View IP address" /></a>
		</div>
		<!--RIGHT BOX 2 END -->
	</div>
	<!--RIGHT BOX END -->

</div>
<!--COMMENT BOX END -->
<!--COMMENT BOX -->
<div class="gbook_commentbox">

	<!--LEFT BOX -->
	<div class="gbook_left_box">
	<span class="gbook_submitted">Submitted by</span><br class="clear" />
	<span class="gbook_submitted_by">Name: <b>Chuck</b></span><br class="clear" />
	<span class="gbook_submitted_by">From: Akron, OH, USA</span><br class="clear" /><span class="gbook_submitted_by">E-mail: <a href="gbook.php?a=viewEmail&amp;num=1" class="gbook_submitted">Contact</a></span><br class="clear" />	</div>
	<!--LEFT BOX END -->

	<!--RIGHT BOX -->
	<div class="gbook_right_box">
	<span class="gbook_comments">Comments:</span><br class="clear" />
	<span class="gbook_comment">Thanks for having all sorts of great information. As a new player I really struggled, but this gave me all sorts of helpful tips and necessary information that made the game worlds easier.</span><br class="clear" />
	<hr align="left" />

		<!--RIGHT BOX 1 -->
		<div class="gbook_right_box_1">
		<span class="gbook_added"><i>Added: October 7, 2019</i></span>
		</div>
		<!--RIGHT BOX 1 END -->

		<!--RIGHT BOX 2 -->
		<div class="gbook_right_box_2" align="right">
		<a href="gbook.php?a=delete&amp;num=1"><img src="./templates/default/images/delete.gif" alt="Delete this entry" class="gbook_nobrd" title="Delete this entry" /></a>
		<a href="gbook.php?a=reply&amp;num=1"><img src="./templates/default/images/reply.gif" alt="Reply to entry" class="gbook_nobrd" title="Reply to entry" /></a>
		<a href="gbook.php?a=viewIP&amp;num=1"><img src="./templates/default/images/ip.gif" alt="View IP address" class="gbook_nobrd" title="View IP address" /></a>
		</div>
		<!--RIGHT BOX 2 END -->
	</div>
	<!--RIGHT BOX END -->

</div>
<!--COMMENT BOX END -->
<!--COMMENT BOX -->
<div class="gbook_commentbox">

	<!--LEFT BOX -->
	<div class="gbook_left_box">
	<span class="gbook_submitted">Submitted by</span><br class="clear" />
	<span class="gbook_submitted_by">Name: <b>Lana</b></span><br class="clear" />
	<span class="gbook_submitted_by">From: Indiana</span><br class="clear" /><span class="gbook_submitted_by">E-mail: <a href="gbook.php?a=viewEmail&amp;num=2" class="gbook_submitted">Contact</a></span><br class="clear" />	</div>
	<!--LEFT BOX END -->

	<!--RIGHT BOX -->
	<div class="gbook_right_box">
	<span class="gbook_comments">Comments:</span><br class="clear" />
	<span class="gbook_comment">You guys have so much information in the best layout! Thanks &lt;3</span><br class="clear" />
	<hr align="left" />

		<!--RIGHT BOX 1 -->
		<div class="gbook_right_box_1">
		<span class="gbook_added"><i>Added: October 6, 2019</i></span>
		</div>
		<!--RIGHT BOX 1 END -->

		<!--RIGHT BOX 2 -->
		<div class="gbook_right_box_2" align="right">
		<a href="gbook.php?a=delete&amp;num=2"><img src="./templates/default/images/delete.gif" alt="Delete this entry" class="gbook_nobrd" title="Delete this entry" /></a>
		<a href="gbook.php?a=reply&amp;num=2"><img src="./templates/default/images/reply.gif" alt="Reply to entry" class="gbook_nobrd" title="Reply to entry" /></a>
		<a href="gbook.php?a=viewIP&amp;num=2"><img src="./templates/default/images/ip.gif" alt="View IP address" class="gbook_nobrd" title="View IP address" /></a>
		</div>
		<!--RIGHT BOX 2 END -->
	</div>
	<!--RIGHT BOX END -->

</div>
<!--COMMENT BOX END -->
<!--COMMENT BOX -->
<div class="gbook_commentbox">

	<!--LEFT BOX -->
	<div class="gbook_left_box">
	<span class="gbook_submitted">Submitted by</span><br class="clear" />
	<span class="gbook_submitted_by">Name: <b>Zere</b></span><br class="clear" />
	<span class="gbook_submitted_by">From: Are-Kansas</span><br class="clear" /><span class="gbook_submitted_by">E-mail: <a href="gbook.php?a=viewEmail&amp;num=3" class="gbook_submitted">Contact</a></span><br class="clear" />	</div>
	<!--LEFT BOX END -->

	<!--RIGHT BOX -->
	<div class="gbook_right_box">
	<span class="gbook_comments">Comments:</span><br class="clear" />
	<span class="gbook_comment">Honestly, the main wiki should shut down and just redirect here. Some insanely useful info here, appreciate everyone who helped make it. Cheers.</span><br class="clear" />
	<hr align="left" />

		<!--RIGHT BOX 1 -->
		<div class="gbook_right_box_1">
		<span class="gbook_added"><i>Added: October 6, 2019</i></span>
		</div>
		<!--RIGHT BOX 1 END -->

		<!--RIGHT BOX 2 -->
		<div class="gbook_right_box_2" align="right">
		<a href="gbook.php?a=delete&amp;num=3"><img src="./templates/default/images/delete.gif" alt="Delete this entry" class="gbook_nobrd" title="Delete this entry" /></a>
		<a href="gbook.php?a=reply&amp;num=3"><img src="./templates/default/images/reply.gif" alt="Reply to entry" class="gbook_nobrd" title="Reply to entry" /></a>
		<a href="gbook.php?a=viewIP&amp;num=3"><img src="./templates/default/images/ip.gif" alt="View IP address" class="gbook_nobrd" title="View IP address" /></a>
		</div>
		<!--RIGHT BOX 2 END -->
	</div>
	<!--RIGHT BOX END -->

</div>
<!--COMMENT BOX END -->
<!--COMMENT BOX -->
<div class="gbook_commentbox">

	<!--LEFT BOX -->
	<div class="gbook_left_box">
	<span class="gbook_submitted">Submitted by</span><br class="clear" />
	<span class="gbook_submitted_by">Name: <b>JibsterGamez</b></span><br class="clear" />
	<span class="gbook_submitted_by">From: KongregateLand</span><br class="clear" /><span class="gbook_submitted_by">E-mail: <a href="gbook.php?a=viewEmail&amp;num=4" class="gbook_submitted">Contact</a></span><br class="clear" />	</div>
	<!--LEFT BOX END -->

	<!--RIGHT BOX -->
	<div class="gbook_right_box">
	<span class="gbook_comments">Comments:</span><br class="clear" />
	<span class="gbook_comment">Hellooooooooooo, loving this place, better than any wiki evar</span><br class="clear" />
	<hr align="left" />

		<!--RIGHT BOX 1 -->
		<div class="gbook_right_box_1">
		<span class="gbook_added"><i>Added: October 5, 2019</i></span>
		</div>
		<!--RIGHT BOX 1 END -->

		<!--RIGHT BOX 2 -->
		<div class="gbook_right_box_2" align="right">
		<a href="gbook.php?a=delete&amp;num=4"><img src="./templates/default/images/delete.gif" alt="Delete this entry" class="gbook_nobrd" title="Delete this entry" /></a>
		<a href="gbook.php?a=reply&amp;num=4"><img src="./templates/default/images/reply.gif" alt="Reply to entry" class="gbook_nobrd" title="Reply to entry" /></a>
		<a href="gbook.php?a=viewIP&amp;num=4"><img src="./templates/default/images/ip.gif" alt="View IP address" class="gbook_nobrd" title="View IP address" /></a>
		</div>
		<!--RIGHT BOX 2 END -->
	</div>
	<!--RIGHT BOX END -->

</div>
<!--COMMENT BOX END -->
<!--COMMENT BOX -->
<div class="gbook_commentbox">

	<!--LEFT BOX -->
	<div class="gbook_left_box">
	<span class="gbook_submitted">Submitted by</span><br class="clear" />
	<span class="gbook_submitted_by">Name: <b>WAK</b></span><br class="clear" />
	<span class="gbook_submitted_by">From: St.Louis of the USA</span><br class="clear" /><span class="gbook_submitted_by">E-mail: <a href="gbook.php?a=viewEmail&amp;num=5" class="gbook_submitted">Contact</a></span><br class="clear" />	</div>
	<!--LEFT BOX END -->

	<!--RIGHT BOX -->
	<div class="gbook_right_box">
	<span class="gbook_comments">Comments:</span><br class="clear" />
	<span class="gbook_comment">Goof is a great place great people who make this country great</span><br class="clear" />
	<hr align="left" />

		<!--RIGHT BOX 1 -->
		<div class="gbook_right_box_1">
		<span class="gbook_added"><i>Added: September 26, 2019</i></span>
		</div>
		<!--RIGHT BOX 1 END -->

		<!--RIGHT BOX 2 -->
		<div class="gbook_right_box_2" align="right">
		<a href="gbook.php?a=delete&amp;num=5"><img src="./templates/default/images/delete.gif" alt="Delete this entry" class="gbook_nobrd" title="Delete this entry" /></a>
		<a href="gbook.php?a=reply&amp;num=5"><img src="./templates/default/images/reply.gif" alt="Reply to entry" class="gbook_nobrd" title="Reply to entry" /></a>
		<a href="gbook.php?a=viewIP&amp;num=5"><img src="./templates/default/images/ip.gif" alt="View IP address" class="gbook_nobrd" title="View IP address" /></a>
		</div>
		<!--RIGHT BOX 2 END -->
	</div>
	<!--RIGHT BOX END -->

</div>
<!--COMMENT BOX END -->
<!--COMMENT BOX -->
<div class="gbook_commentbox">

	<!--LEFT BOX -->
	<div class="gbook_left_box">
	<span class="gbook_submitted">Submitted by</span><br class="clear" />
	<span class="gbook_submitted_by">Name: <b>Kantalot</b></span><br class="clear" />
	<span class="gbook_submitted_by">From: Cuba</span><br class="clear" /><span class="gbook_submitted_by">E-mail: <a href="gbook.php?a=viewEmail&amp;num=6" class="gbook_submitted">Contact</a></span><br class="clear" />	</div>
	<!--LEFT BOX END -->

	<!--RIGHT BOX -->
	<div class="gbook_right_box">
	<span class="gbook_comments">Comments:</span><br class="clear" />
	<span class="gbook_comment">great site, great people, Wall Of Shame gave me some good laughs  <img src="./templates/default/images/emoticons/bigsmile.gif" border="0" alt=":D" title=":D" />, plan to use this site the whole way through my playthrough, thanks for everything here!</span><br class="clear" />
	<hr align="left" />

		<!--RIGHT BOX 1 -->
		<div class="gbook_right_box_1">
		<span class="gbook_added"><i>Added: August 12, 2019</i></span>
		</div>
		<!--RIGHT BOX 1 END -->

		<!--RIGHT BOX 2 -->
		<div class="gbook_right_box_2" align="right">
		<a href="gbook.php?a=delete&amp;num=6"><img src="./templates/default/images/delete.gif" alt="Delete this entry" class="gbook_nobrd" title="Delete this entry" /></a>
		<a href="gbook.php?a=reply&amp;num=6"><img src="./templates/default/images/reply.gif" alt="Reply to entry" class="gbook_nobrd" title="Reply to entry" /></a>
		<a href="gbook.php?a=viewIP&amp;num=6"><img src="./templates/default/images/ip.gif" alt="View IP address" class="gbook_nobrd" title="View IP address" /></a>
		</div>
		<!--RIGHT BOX 2 END -->
	</div>
	<!--RIGHT BOX END -->

</div>
<!--COMMENT BOX END -->
<!--COMMENT BOX -->
<div class="gbook_commentbox">

	<!--LEFT BOX -->
	<div class="gbook_left_box">
	<span class="gbook_submitted">Submitted by</span><br class="clear" />
	<span class="gbook_submitted_by">Name: <b>Herrerosaurus</b></span><br class="clear" />
	<span class="gbook_submitted_by">From: Argentina</span><br class="clear" /><span class="gbook_submitted_by">E-mail: <a href="gbook.php?a=viewEmail&amp;num=7" class="gbook_submitted">Contact</a></span><br class="clear" />	</div>
	<!--LEFT BOX END -->

	<!--RIGHT BOX -->
	<div class="gbook_right_box">
	<span class="gbook_comments">Comments:</span><br class="clear" />
	<span class="gbook_comment">Gracias por todo. Se nota tu dedicacion y todos los que pasamos por aqui lo apreciamos<br /> (perdon por escribir en español, my english is horrible) <img src="./templates/default/images/emoticons/wink.gif" border="0" alt=";)" title=";)" /></span><br class="clear" />
	<hr align="left" />

		<!--RIGHT BOX 1 -->
		<div class="gbook_right_box_1">
		<span class="gbook_added"><i>Added: August 5, 2019</i></span>
		</div>
		<!--RIGHT BOX 1 END -->

		<!--RIGHT BOX 2 -->
		<div class="gbook_right_box_2" align="right">
		<a href="gbook.php?a=delete&amp;num=7"><img src="./templates/default/images/delete.gif" alt="Delete this entry" class="gbook_nobrd" title="Delete this entry" /></a>
		<a href="gbook.php?a=reply&amp;num=7"><img src="./templates/default/images/reply.gif" alt="Reply to entry" class="gbook_nobrd" title="Reply to entry" /></a>
		<a href="gbook.php?a=viewIP&amp;num=7"><img src="./templates/default/images/ip.gif" alt="View IP address" class="gbook_nobrd" title="View IP address" /></a>
		</div>
		<!--RIGHT BOX 2 END -->
	</div>
	<!--RIGHT BOX END -->

</div>
<!--COMMENT BOX END -->
<!--COMMENT BOX -->
<div class="gbook_commentbox">

	<!--LEFT BOX -->
	<div class="gbook_left_box">
	<span class="gbook_submitted">Submitted by</span><br class="clear" />
	<span class="gbook_submitted_by">Name: <b>Theuz Dragon</b></span><br class="clear" />
	<span class="gbook_submitted_by">From: Brazil</span><br class="clear" /><span class="gbook_submitted_by">E-mail: <a href="gbook.php?a=viewEmail&amp;num=8" class="gbook_submitted">Contact</a></span><br class="clear" />	</div>
	<!--LEFT BOX END -->

	<!--RIGHT BOX -->
	<div class="gbook_right_box">
	<span class="gbook_comments">Comments:</span><br class="clear" />
	<span class="gbook_comment">The job done here in this site is amazing. Congratulations!!!<br />and thank you. <img src="./templates/default/images/emoticons/smile.gif" border="0" alt=":)" title=":)" /></span><br class="clear" />
	<hr align="left" />

		<!--RIGHT BOX 1 -->
		<div class="gbook_right_box_1">
		<span class="gbook_added"><i>Added: July 25, 2019</i></span>
		</div>
		<!--RIGHT BOX 1 END -->

		<!--RIGHT BOX 2 -->
		<div class="gbook_right_box_2" align="right">
		<a href="gbook.php?a=delete&amp;num=8"><img src="./templates/default/images/delete.gif" alt="Delete this entry" class="gbook_nobrd" title="Delete this entry" /></a>
		<a href="gbook.php?a=reply&amp;num=8"><img src="./templates/default/images/reply.gif" alt="Reply to entry" class="gbook_nobrd" title="Reply to entry" /></a>
		<a href="gbook.php?a=viewIP&amp;num=8"><img src="./templates/default/images/ip.gif" alt="View IP address" class="gbook_nobrd" title="View IP address" /></a>
		</div>
		<!--RIGHT BOX 2 END -->
	</div>
	<!--RIGHT BOX END -->

</div>
<!--COMMENT BOX END -->
<!--COMMENT BOX -->
<div class="gbook_commentbox">

	<!--LEFT BOX -->
	<div class="gbook_left_box">
	<span class="gbook_submitted">Submitted by</span><br class="clear" />
	<span class="gbook_submitted_by">Name: <b>saqriphrx</b></span><br class="clear" />
	<span class="gbook_submitted_by">From: merica</span><br class="clear" />	</div>
	<!--LEFT BOX END -->

	<!--RIGHT BOX -->
	<div class="gbook_right_box">
	<span class="gbook_comments">Comments:</span><br class="clear" />
	<span class="gbook_comment">The amount of work you put into this site is amazing, cant wait to see what more there is with the new patch</span><br class="clear" />
	<hr align="left" />

		<!--RIGHT BOX 1 -->
		<div class="gbook_right_box_1">
		<span class="gbook_added"><i>Added: July 19, 2019</i></span>
		</div>
		<!--RIGHT BOX 1 END -->

		<!--RIGHT BOX 2 -->
		<div class="gbook_right_box_2" align="right">
		<a href="gbook.php?a=delete&amp;num=9"><img src="./templates/default/images/delete.gif" alt="Delete this entry" class="gbook_nobrd" title="Delete this entry" /></a>
		<a href="gbook.php?a=reply&amp;num=9"><img src="./templates/default/images/reply.gif" alt="Reply to entry" class="gbook_nobrd" title="Reply to entry" /></a>
		<a href="gbook.php?a=viewIP&amp;num=9"><img src="./templates/default/images/ip.gif" alt="View IP address" class="gbook_nobrd" title="View IP address" /></a>
		</div>
		<!--RIGHT BOX 2 END -->
	</div>
	<!--RIGHT BOX END -->

</div>
<!--COMMENT BOX END -->
<div class="clear"></div><div style="text-align:center">Powered by <a href="http://www.phpjunkyard.com/php-guestbook-script.php"  target="_blank" title="Guestbook">PHP Guestbook</a> - brought to you by <a href="http://www.phpjunkyard.com/"  target="_blank" title="Free PHP Scripts">PHP Scripts</a></div><div class="clear">&nbsp;</div>

<div align="center" class="gbook_bottom">
 <b>1</b>  <a href="gbook.php?page=2">2</a>  <a href="gbook.php?page=3">3</a>  <a href="gbook.php?page=4">4</a>  <a href="gbook.php?page=5">5</a>  <a href="gbook.php?page=6">6</a>  <a href="gbook.php?page=2">Next &rsaquo;</a> <a href="gbook.php?page=21">Last &raquo;</a></div>

<!--NOSPAM BANNER -->
<!--NOSPAM BANNER END -->
</div></div>
<div id="footer">
</div>
</div>
 </div>
<table style="width:100%; margin-top:1em; border:1px solid #; font-size:90%; text-align:center;">
<tbody>
<tr>
<td style="padding:0.2em 0.5em;">
<FONT color=#98AFC7> | <a href="/realm/Resources" research="Mana - Coins - Faction Coins - Gems - Rubies - Kreds"><FONT color=#98AFC7>Resources</a> | <a href="/realm/Reset" research="Reset - Abdication - Reincarnation"><FONT color=#98AFC7>Soft Resets</a> | <a href="/realm/BuildingAlignments" research="Building Alignments"><FONT color=#98AFC7>Buildings</a> | <a href="/realm/Heritages" research="Faction Heritages"><FONT color=#98AFC7>Heritages</a> | <a href="/realm/Bloodline" research="Faction Bloodlines" class="mw-redirect"><FONT color=#98AFC7>Bloodlines</a>
 | <a href="/realm/Spells" research="Spells and Tier unlock Times"><FONT color=#98AFC7>Spells</a> | <a href="/realm/Artifacts" research="Excavations"><FONT color=#98AFC7>Excavations</a>  | <a href="/realm/Challenges" research="Complete list of Challenges and descriptions"><FONT color=#98AFC7>Challenges</a> | <a href="/realm/Upgrades" research="Upgrades"><FONT color=#98AFC7>Upgrades</a> | <a href="/realm/TrophyPage" research="Complete list of Trophies and descriptions"><FONT color=#98AFC7>Trophies</a>
 | <a href="/realm/Factions" research="Factions"><FONT color=#98AFC7>Factions</a> | <a href="/realm/Research" research="The Research Facilities - Short and long names"><FONT color=#98AFC7>Research</a> |
<p> | <a href="/realm/MercBuilds" research="Mercenary Builds"><FONT color=#98AFC7>Merc Builds</a> | <a href="/realm/ResearchBuilds" research="Research Builds"><FONT color=#98AFC7>Research Builds</a> | <a href="/realm/PBuilds" research="Evil and Good Prestige Builds"><FONT color=#98AFC7>Prestige Builds</a> | <a href="/realm/R40-R46" research="Ascension Builds"><FONT color=#98AFC7>Dragon Unlock</a> | <a href="/realm/R47-R60" research="Neutral Prestige Builds"><FONT color=#98AFC7>Neutral Prestige Builds</a> | <a href="/realm/Researchtree" research="Complete list of Research and descriptions"><FONT color=#98AFC7>Research Tree</a> |
</p>
<p>  |  <span style="display:inline-block; padding:1px 0;border-bottom:5px solid #f1e9d1;"> <a research="Vanilla Factions<p><FONT color=Blue>Good</font>: <FONT color=#efbbf0>Fairy, <FONT color=#46bd53>Elf</font>, <FONT color=#b1f4f1>Angel<p><FONT color=DarkRed>Evil</font>: <FONT color=#b8b87b>Goblin</font>, <FONT color=#62269d>Undead</font>, <FONT color=#e55131>Demon</font><p><FONT color=DarkGoldenRod>Neutral</font>: <FONT color=#eed835>Titan</font>, <FONT color=#876137>Druid</font>, <FONT color=#ac94ec>Faceless"><FONT color=#98AFC7>Vanilla Factions</a> </span>
  |  <span style="display:inline-block; padding:1px 0;border-bottom:5px solid #4db1e8;"> <a research="Good Factions<p><FONT color=#efbbf0>Fairy<p><FONT color=#46bd53>Elf<p><FONT color=#b1f4f1>Angel<p>"><FONT color=#98AFC7>Good Factions</a> </span>
  |  <span style="display:inline-block; padding:1px 0;border-bottom:5px solid #a0000d;"> <a research="Evil Factions<p><FONT color=#b8b87b>Goblin<p><FONT color=#62269d>Undead<p><FONT color=#e55131>Demon"><FONT color=#98AFC7>Evil Factions</a> </span>
  |  <span style="display:inline-block; padding:1px 0;border-bottom:5px solid #dcdcdc;"> <a research="Neutral Factions<p><FONT color=#eed835>Titan<p><FONT color=#876137>Druid<p><FONT color=#ac94ec>Faceless"><FONT color=#98AFC7>Neutral Factions</a> </span>
  |  <span style="display:inline-block; padding:1px 0;border-bottom:5px solid #000000;"> <a research="Prestige Factions<p><FONT color=#3333e6>Dwarf<p><FONT color=#9a0368>Drow<p><FONT color=#006400>Dragon"><FONT color=#98AFC7>Prestige Factions</a> </span>
  |  <span style="display:inline-block; padding:1px 0;border-bottom:5px solid #000000;"> <a research="A2 Elite Factions<p><FONT color=#B0C4DE>Archon<p><FONT color=#483D8B>Djinn<p><FONT color=#C0C0C0>Makers"><FONT color=#98AFC7>A2 Elite Factions</a> </span> |
</p>
 | <a href="/realm/Events" research="Events"><FONT color=#98AFC7>Events</a>  | <a href="/realm/Changes" research="Latest Major Patch"><FONT color=#98AFC7>Latest Major Patch</a> | <a href="/realm/Changelog" research="Changelog"><FONT color=#98AFC7>Changelog</a> | <a href="/realm/Notation" research="Short - Scientific - Engineering"><FONT color=#98AFC7>Notation</a> |  <a href="/realm/Terminology" research="Commonly used terms and abbreviations"><FONT color=#98AFC7>Terminology</a> | <a href="/realm/Tools" research="Realm Weather Service - pastebin - auto clicker - Royal Scribe - Lara Crypt - imgur.com - Realm Grinder Wiki"><FONT color=#98AFC7>Tools</a> | <a href="/realm/Kong" research="Help"><FONT color=#98AFC7>Kongregate Links</a>  |
<p>  |  <span style="display:inline-block; padding:1px 0;border-bottom:5px solid #efbbf0;"> <a href="/realm/FairyFaction" research="Fairy (Good)"><FONT color=#98AFC7>Fairy </a></span>
  |  <span style="display:inline-block; padding:1px 0;border-bottom:5px solid #46bd53;"> <a href="/realm/ElfFaction" research="Elf (Good)"><FONT color=#98AFC7>Elf</a> </span>
  |  <span style="display:inline-block; padding:1px 0;border-bottom:5px solid #b1f4f1;"> <a href="/realm/AngelFaction" research="Angel (Good)"><FONT color=#98AFC7>Angel</a> </span>
  |  <span style="display:inline-block; padding:1px 0;border-bottom:5px solid #b8b87b;"> <a href="/realm/GoblinFaction" research="Goblin (Evil)"><FONT color=#98AFC7>Goblin</a> </span>
  |  <span style="display:inline-block; padding:1px 0;border-bottom:5px solid #62269d;"> <a href="/realm/UndeadFaction" research="Undead (Evil)"><FONT color=#98AFC7>Undead</a> </span>
  |  <span style="display:inline-block; padding:1px 0;border-bottom:5px solid #e55131;"> <a href="/realm/DemonFaction" research="Demon (Evil)"><FONT color=#98AFC7>Demon</a> </span>
  |  <span style="display:inline-block; padding:1px 0;border-bottom:5px solid #eed835;"> <a href="/realm/TitanFaction" research="Titan (Neutral)"><FONT color=#98AFC7>Titan</a> </span>
  |  <span style="display:inline-block; padding:1px 0;border-bottom:5px solid #876137;"> <a href="/realm/DruidFaction" research="Druid (Neutral)"><FONT color=#98AFC7>Druid</a> </span>
  |  <span style="display:inline-block; padding:1px 0;border-bottom:5px solid #ac94ec;"> <a href="/realm/FacelessFaction" research="Faceless (Neutral)"><FONT color=#98AFC7>Faceless</a> </span> |
</p>
<p> | <span style="display:inline-block; padding:1px 0;border-bottom:5px solid #000000;"> <a href="/realm/MercenaryFaction" research="Mercenary"><FONT color=#98AFC7>Mercenary</a> </span>
  |  <span style="display:inline-block; padding:1px 0;border-bottom:5px solid #3333e6;"> <a href="/realm/DwarfFaction" research="Dwarf (Good Prestige)"><FONT color=#98AFC7>Dwarf</a> </span>
  |  <span style="display:inline-block; padding:1px 0;border-bottom:5px solid #9a0368;"> <a href="/realm/DrowFaction" research="Drow (Evil Prestige)"><FONT color=#98AFC7>Drow</a> </span>
  |  <span style="display:inline-block; padding:1px 0;border-bottom:5px solid #006400;"> <a href="/realm/DragonFaction" research="Dragon (Neutral Prestige)"><FONT color=#98AFC7>Dragon</a> </span>
  |  <span style="display:inline-block; padding:1px 0;border-bottom:5px solid #B0C4DE;"> <a href="/realm/ArchonFaction" research="Archon (A2 Elite)"><FONT color=#98AFC7>Archon</a> </span>
  |  <span style="display:inline-block; padding:1px 0;border-bottom:5px solid #483D8B;"> <a href="/realm/DjinnFaction" research="Djinn (A2 Elite)"><FONT color=#98AFC7>Djinn</a> </span>
  |  <span style="display:inline-block; padding:1px 0;border-bottom:5px solid #C0C0C0;"> <a href="/realm/MakersFaction" research="Makers (A2 Elite)"><FONT color=#98AFC7>Makers</a> </span> |
</p>
</td></tr></tbody></table>
<P align="center"><FONT color=#98AFC7> Contact me <a target="_blank" href="http://www.kongregate.com/accounts/G00FBALL/"><FONT color=#98AFC7><b>G00FBALL</b></font></a></P>
<div align="center"><FONT color=#98AFC7> <b>Thank You!!! for all your help.</b></a></p>
<marquee class="html-marquee" direction="up" behavior="scroll" scrollamount="2">
<P align="center">Aaborg</p>
<P align="center">Cyden</p>
<P align="center">Eltro</p>
<P align="center">primal cradily</p>
<P align="center">ARTEZZ</p>
<P align="center">somarilnos</p>
<P align="center">Grazloth</p>
<P align="center">hiimahotdog</p>
<P align="center">mrothorr</p>
<P align="center">AKL</p>
<P align="center">mangafreak140</p>
<P align="center">acer4321</p>
<P align="center">Mysticman89</p>
<P align="center">Sas Assassin</p>
<P align="center">LeoC.II</p>
<P align="center">Lollipop</p>
<P align="center">Geno</p>
<P align="center">Liraso</p>
<P align="center">Magnusly</p>
<P align="center">pseudobyte</p>
<P align="center">Igorogi</p>
<P align="center">Fonzoland</p>
<P align="center">ivanovichkoslov</p>
<P align="center">dox4242</p>
<P align="center">capito27</p>
<P align="center">Necrodoom</p>
<P align="center">Lapare</p>
<P align="center">Curunur</p>
<P align="center">Tskami_ek</p>
<P align="center">Sum Yung Gai</p>
<P align="center">oholoko</p>
<P align="center">Damxacer1</p>
<P align="center">websterguy</p>
<P align="center">LeoB516</p>
<P align="center">CluelessWonder</p>
<P align="center">Doubleshoe</p>
<P align="center">Sc0rp</p>
<P align="center">Heronimo2</p>
<P align="center">RastlinV</p>
<P align="center">Uni</p>
<P align="center">chaosmarine4226</p>
<P align="center">Namelessname</p>
<P align="center">iam10ninjas</p>
<P align="center">Kanra</p>
<P align="center">myogin</p>
<P align="center">Okami</p>
<P align="center">Parasitez83</p>
<P align="center">Dienes</p>
<P align="center">apocal_88</p>
<P align="center">KRIEG</p>
<P align="center">Sheer</p>
<P align="center">Xorious</p>
<P align="center">The Homa</p>
<P align="center">Chaos</p>
<P align="center">Kurt-bookboy</p>
<P align="center">xemima</p>
<P align="center">Boffo</p>
<P align="center">Luio2revenge</p>
<P align="center">6000j</p>
<P align="center">Yarilo</p>
<P align="center">PseudonymousBosh</p>
<P align="center">UndeadAbbys</p>
<P align="center">Max Schradin</p>
<P align="center">jonny0panic</p>
<P align="center">AJZ3</p>
<P align="center">Slakkarn</p>
<P align="center">noonomoon</p>
<P align="center">Jenetikitty</p>
<P align="center">Suranis</p>
<P align="center">saitenhieb</p>
<P align="center">Slakkarn</p>
<P align="center">MrGerman</p>
<P align="center">WaitingIdly</p>
<P align="center">Zange</p>
<P align="center">eleganceseraph</p>
<P align="center">magnanimousCynic</p>
<P align="center">pkal</p>
<P align="center">tangyifei</p>
<P align="center">torskenn</p>
<P align="center">Exsanguine</p>
<P align="center">xXRochforteXx</p>
<P align="center">Zyllyn</p>
<P align="center">Spanosa</p>
<P align="center">grelf</p>
<P align="center">jabberok</p>
<P align="center">Lavi04</p>
<P align="center">McguyverZero</p>
<P align="center">aviv</p>
<P align="center">TrostNi</p>
<P align="center">Zariars</p>
<P align="center">toifel131</p>
<P align="center">johny_blaze</p>
<P align="center">ThePeon</p>
<P align="center">djones0823</p>
<P align="center">CheeseWitch</p>
<P align="center">Ghorre</p>
<P align="center">BioRules</p>
<P align="center">NTWgrinder</p>
<P align="center">Reknot</p>
<P align="center">Freakomant</p>
<P align="center">lordulster</p>
<P align="center">shayner12</p>
<P align="center">DainDwarf</p>
<P align="center">Wlerin</p>
<P align="center">xeperiset</p>
<P align="center">ehyder</p>
<P align="center">brc48632</p>
<P align="center">WynneYilmaz</p>
<P align="center">Keben</p>
<P align="center">BillK14</p>
<P align="center">ColdDrake13</p>
<P align="center">arintayn2</p>
<P align="center">Shantie</p>
<P align="center">ErrolErrolson</p>
<P align="center">ydc1017902176</p>
<P align="center">Milkopilko</p>
<P align="center">Mechaflood</p>
<P align="center">Wolf415</p>
<P align="center">ThatGuy</p>
<P align="center">drseilzug</p>
<P align="center">ash1soccer</p>
<P align="center">Just1pirate</p>
<P align="center">Space Troll</p>
<P align="center">jgchan29</p>
<P align="center">bobbert</p>
<P align="center">Soulrift</p>
<P align="center">MarioFanaticXV</p>
<P align="center">mangaking118</p>
<P align="center">Franelas</p>
<P align="center">Delichtig</p>
<P align="center">Anathah</p>
<P align="center">KuraTheDog</p>
<P align="center">Tanny</p>
<P align="center">Ck</p>
<P align="center">Lavi04</p>
<P align="center">johnharveybc</p>
<P align="center">Essigschurke</p>
<P align="center">masteff</p>
<P align="center">Merp</p>
<P align="center">Дикий Речной Пёс</p>
<P align="center">Ach3ck</p>
<P align="center">Sho Phaune</p>
<P align="center">Xikre</p>
<P align="center">Just1pirate</p>
<P align="center">Maya</p>
<P align="center">Sandworm</p>
<P align="center">Paah</p>
<P align="center">Redd</p>
<P align="center">5ku||3d</p>
<P align="center">johnleprude</p>
<P align="center">Goholtramor</p>
<P align="center">Matrix4767</p>
<P align="center">GreenMJ13</p>
<P align="center">Bearpaws</p>
<P align="center">Palamazzi</p>
<P align="center">Redd</p>
<P align="center">ManDude33</p>
<P align="center">JezuzLizard</p>
<P align="center">heyitsdross</p>
<P align="center">Fire</p>
<P align="center">Archmage</p>
<P align="center">Proxy</p>
<P align="center">lesdruides</p>
<P align="center">Guy</p>
<P align="center">FastHit</p>
<P align="center">FedeJossa</p>
<P align="center">Masterzan</p>
<P align="center">Ryonir</p>
<P align="center">Cromieplays</p>
<P align="center">bigshawnt</p>
<P align="center">Tyler</p>
<P align="center">RageBall</p>
<P align="center">Xpt14</p>
<P align="center">XenTwo</p>
<P align="center">uwnim</p>
<P align="center">Da Banana Man</p>
<P align="center">DED SERVER</p>
<P align="center">Kacper</p>
<P align="center">homebrewer54</p>
<P align="center">JGChan</p>
<P align="center">Zeen</p>
<P align="center">RebelKeithy</p>
<P align="center">CamoBrie</p>
<P align="center">Zepto</p>
<P align="center">7636kei</p>
<P align="center">Kaos</p>
<P align="center">Ashthar</p>
<P align="center">Cromedome</p>
<P align="center">Coal_CC</p>
<P align="center">Ebilkill</p>
<P align="center">Evengrey</p>
<P align="center">Tenebricosus</p>
<P align="center">Chaosmancer7</p>
<P align="center">Nizidramaniiyt</p>
<P align="center">onianinara</p>
<P align="center">Zelphh1</p>
<P align="center">Synthini</p>
<P align="center">Rustle Crowe</p>
<P align="center">NTWgreatest</p>
<P align="center">spamtraprus</p>
<P align="center">CafeMaker</p>
<P align="center">waterfire425</p>
<P align="center">btzeroes</p>
<P align="center">HeinQuek</p>
<P align="center">Alright</p>
<P align="center">Versine</p>
<P align="center">Fryguy9</p>
<P align="center">raato</p>
<P align="center">escalon</p>
<P align="center">Onoxious</p>
<P align="center">BionicFrog</p>
<P align="center">Ignus</p>
<P align="center">EagleAgg03</p>
<P align="center">Teabagger Vance</p>
<P align="center">Ilya</p>
<P align="center">lvl 1 crook</p>
<P align="center">Seyliz</p>
<P align="center">Zylon</p>
<P align="center">j8ner</p>
<P align="center">Antendren</p>
<P align="center">SomeoneLucas</p>
<P align="center">Boyo</p>
<P align="center">DR</p>
<P align="center">plaaosert</p>
<P align="center">XenosHg</p>
<P align="center">oswarlan</p>
<P align="center">Joa</p>
<P align="center">pizza_troll</p>
<P align="center">NateMcCloud</p>
<P align="center">boss_mc</p>
<P align="center">lesd</p>
<P align="center">Technosaurus</p>
<P align="center">Blackeye</p>
<P align="center">cralo</p>
<P align="center">Weedheter</p>
<P align="center">art-of-dom</p>
<P align="center">Popington</p>
<P align="center">Username</p>
<P align="center">MythWiz_</p>
<P align="center">pacmanlite</p>
<P align="center">Hotspot</p>
<P align="center">gvaiou</p>
<P align="center">tbrown30</p>
<P align="center">Glitchstorm</p>
<P align="center">RetroDerpSquid9</p>
<P align="center">Sythen2014</p>
<P align="center">Lead Luigi</p>
<P align="center">Aaron Cook</p>
<P align="center">gamemasterty</p>
<P align="center">Trewq_</p>
<P align="center">rhaek7</p>
<P align="center">fwbx529</p>
<P align="center">waga baba bobo</p>
<P align="center">Polibus</p>
<P align="center">ukulelejongetje<p>
<P align="center">q1235<p>
<P align="center">kiluh</p>
<P align="center">KyonLevic</p>
<P align="center">Tenyasha</p>
<P align="center">Altoscholto</p>
<P align="center">trevYT</p>
<P align="center">Amirin</p>
<P align="center">NeutralPotato</p>
<P align="center">Vince</p>
<P align="center">BuzzMarzz</p>
<P align="center">Drogor</p>
<P align="center">wolfsblood</p>
<P align="center">blackbird</p>
<P align="center">slantfer</p>
<P align="center">Kroll</p>
<P align="center">Dariof4</p>
<P align="center">furkannnO</p>
<P align="center">Neutral Potato</p>
<P align="center">Taxiway</p>
<P align="center">aurora</p>
<P align="center">Book909</p>
<P align="center">solidifiedmind</p>
<P align="center">StAUG</p>
<P align="center">chrispi</p>
<P align="center">arcanmster</p>
<P align="center">Azua</p>
<P align="center">Zeckenschwarm</p>
 </marquee>
<style>
.html-marquee {
  height:14px;
  width:160px;
  background-color:Black;
  font-family:Cursive;
  font-size:14px;
  color:#98AFC7;
  font-weight:bold;
  border-width:1;
  border-style:solid;
  border-color:Black;
}
</style>
<script>
function myFunction(e) {
  var copyText = e.next();
  if (isOS()) {
        var textElement = copyText[0];
        var editable = textElement.contentEditable;
        var readOnly = textElement.readOnly;
        textElement.contentEditable = true;
        textElement.readOnly = false;
        var range = document.createRange();
        range.selectNodeContents(textElement);
        var selection = window.getSelection();
        selection.removeAllRanges();
        selection.addRange(range);
        textElement.setSelectionRange(0, 999999);
        textElement.contentEditable = editable;
        textElement.readOnly = readOnly;
    } else {
        copyText.select();
    }
  document.execCommand('copy');
}
 function isOS() {
    return navigator.userAgent.match(/ipad|iphone/i);
}
</script>
<div align="center">
<a href="https://www.cutercounter.com/" target="_blank"><img src="https://www.cutercounter.com/hits.php?id=geqcfpc&nd=9&style=39" border="0" alt="visitor counter"></a>
</body>
</html>
