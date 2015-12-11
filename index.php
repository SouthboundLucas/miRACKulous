<?php
// require_once('./inc/db.php');

// Fire up session for user.
session_start();

//Page Commands NYI
if(isset($_GET["cmd"])) {
    $cmd = $_GET["cmd"];
    switch ($cmd) {
        case "load":
            // Invoke Database Retreival
            break;
        case "save":
            // Invoke Database Storage
            break;
        case "delete":
            // Invoke Database Delete
    }
}

if(isset($_GET["rack"])) {
    // Data Structure for Racks -- Could be much better!
    $rackdata = array(
        "rack" => $_GET["rack"],
        "rackname" => $_GET["rackname"],
        "racksize" => $_GET["racksize"],
        "d01" => $_GET["d01"],
        "d01name" => $_GET["d01name"],
        "d01ip" => $_GET["d01ip"],
        "d02" = $_GET["d02"];
        "d02name" = $_GET["d02name"];
        "d02ip" = $_GET["d02ip"];
        "d03" = $_GET["d03"];
        "d03name" = $_GET["d03name"];
        "d03ip" = $_GET["d03ip"];
        "d04" = $_GET["d04"];
        "d04name" = $_GET["d04name"];
        "d04ip" = $_GET["d04ip"];
        "d05" = $_GET["d05"];
        "d05name" = $_GET["d05name"];
        "d05ip" = $_GET["d05ip"];
        "d06" = $_GET["d06"];
        "d06name" = $_GET["d06name"];
        "d06ip" = $_GET["d06ip"];
        "d07" = $_GET["d07"];
        "d07name" = $_GET["d07name"];
        "d07ip" = $_GET["d07ip"];
        "d08" = $_GET["d08"];
        "d08name" = $_GET["d08name"];
        "d08ip" = $_GET["d08ip"];
        "d09" = $_GET["d09"];
        "d09name" = $_GET["d09name"];
        "d09ip" = $_GET["d09ip"];
        "d10" = $_GET["d10"];
        "d10name" = $_GET["d10name"];
        "d10ip" = $_GET["d10ip"];
        "d11" = $_GET["d11"];
        "d11name" = $_GET["d11name"];
        "d11ip" = $_GET["d11ip"];
        "d12" = $_GET["d12"];
        "d12name" = $_GET["d12name"];
        "d12ip" = $_GET["d12ip"];
        "d13" = $_GET["d13"];
        "d13name" = $_GET["d13name"];
        "d13ip" = $_GET["d13ip"];
        "d14" = $_GET["d14"];
        "d14name" = $_GET["d14name"];
        "d14ip" = $_GET["d14ip"];
        "d15" = $_GET["d15"];
        "d15name" = $_GET["d15name"];
        "d15ip" = $_GET["d15ip"];
        "d16" = $_GET["d16"];
        "d16name" = $_GET["d16name"];
        "d16ip" = $_GET["d16ip"];
        "d17" = $_GET["d17"];
        "d17name" = $_GET["d17name"];
        "d17ip" = $_GET["d17ip"];
        "d18" = $_GET["d18"];
        "d18name" = $_GET["d18name"];
        "d18ip" = $_GET["d18ip"];
        "d19" = $_GET["d19"];
        "d19name" = $_GET["d19name"];
        "d19ip" = $_GET["d19ip"];
        "d20" = $_GET["d20"];
        "d20name" = $_GET["d20name"];
        "d20ip" = $_GET["d20ip"];
    )
}

// Get css style(size) from the racksize value
if(isset($_GET["racksize"])) {
    switch($racksize) {
        case "8":
            $rackstyle = "rack8u";
            break;
        case "10":
            $rackstyle = "rack10u";
            break;
        default:
            $rackstyle = "rack20u";
    }
}

include_once('./inc/header.php'); // Just HTML Stuff
?>
    <div class="control"> <!-- The page Control, for setting values -->
        <h4>Rack Designer</h4>
        <form action="." method="get">
            <!--Initial form view :-->
            <?php
                if(!isset($_GET["rack"])) {
                    print "<input type=\"hidden\" name=\"rack\" value=\"1\"><br />";
                }
                if(!isset($_GET["rackname"]) && !isset($_GET["rack"])) {
                    print "Rack Name: <input type=\"text\" name=\"rackname\"><br />";
                }
                if(!isset($_GET["racksize"])) {
                    print "Rack Size: <input type=\"text\" name=\"racksize\"><br />";
                }
            ?>
            <!--End initial form view :-->
            <!--Device add form view :
            Need: More fields and to flesh this out
            -->
            <?php
                if(isset($_GET["rack"])) {
                    print "Device Size: <input type=\"text\" name=\"d01\"><br />";
                }
            ?>
            <!--End Device add form view
            Need: Device Edit view
            need: way to delete a device
            -->
            <input class="btn" type="submit" value="Submit">
        </form>
    </div> <!-- End of page Control, for setting values -->
    
    <!-- Diagram Drawing handled by logic below -->
    <?php
        if(isset($_GET["rack"])) {print "<h2 class=\"racklabel\">$rackname</h2>";}
        if(isset($_GET["rack"])) {print "<div class=\"rack $rackstyle\"></div>";}
        // Need to nest more DIVs in here for each value in the array.
    ?>
    
<?php
include_once('./inc/footer.php'); // Just HTML Stuff
?>