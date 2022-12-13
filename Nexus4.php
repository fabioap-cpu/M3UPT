<?

if (empty($_REQUEST["serial"]) || ($_REQUEST["serial"] != "Nexus4_"))
{
    header("HTTP/1.0 401 The serial number is not valid");
    // error message to be displayed in installer
    echo "The serial number is not valid";
}