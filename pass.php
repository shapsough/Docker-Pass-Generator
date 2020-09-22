<?php
// Random Pass Generator By Eslam Shapsough
// Set Chars For Each Group
$char_set_numbers_only = "0123456789";
$char_set_small_only = "abcdefghijklmnopqrstuvwxyz";
$char_set_cap_only = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$char_set_symb ="!#^&<>()_=";
$char_set_small_num = $char_set_small_only.$char_set_numbers_only;
$char_set_cap_num = $char_set_cap_only.$char_set_numbers_only;
$char_set_small_cap = $char_set_small_only.$char_set_cap_only;
$char_set_small_cap_num = $char_set_small_only.$char_set_cap_only.$char_set_numbers_only;
$char_set_all = $char_set_small_only.$char_set_cap_only.$char_set_numbers_only.$char_set_symb;
/////////////////////////////////////////////
// Generator Function
function generate($set,$length){
        $str = "";
        $max = strlen($set) - 1;
        for ($i = 0; $i < $length; ++$i)
        {
                $str .= $set[random_int(0, $max)];
        }
        echo $str."\n";
}
echo "################################################\n";
echo "### Random Pass Generator By Eslam Shapsough ###\n";
echo "################################################\n";
echo "------------------------------------------------\n";
echo "Small-Num : 20 - 30 Chars\n";
echo "------------------------------------------------\n";
for($loop = 20; $loop <= 30; ++$loop)
{
        echo "Length = ".$loop." : ";
        generate($char_set_small_num,$loop);
}
echo "------------------------------------------------\n";
echo "CAP-Num : 20 - 30 Chars\n";
echo "------------------------------------------------\n";
for($loop = 20; $loop <= 30; ++$loop)
{
        echo "Length = ".$loop." : ";
        generate($char_set_cap_num,$loop);
}
echo "------------------------------------------------\n";
echo "CAP-Small : 20 - 30 Chars\n";
echo "------------------------------------------------\n";
for($loop = 20; $loop <= 30; ++$loop)
{
        echo "Length = ".$loop." : ";
        generate($char_set_small_cap,$loop);
}
echo "------------------------------------------------\n";
echo "CAP-Small-Num : 20 - 30 Chars\n";
echo "------------------------------------------------\n";
for($loop = 20; $loop <= 30; ++$loop)
{
        echo "Length = ".$loop." : ";
        generate($char_set_small_cap_num,$loop);
}
echo "------------------------------------------------\n";
echo "CAP-Small-Num-Symbols : 20 - 30 Chars\n";
echo "------------------------------------------------\n";
for($loop = 20; $loop <= 30; ++$loop)
{
        echo "Length = ".$loop." : ";
        generate($char_set_all,$loop);
}
?>
