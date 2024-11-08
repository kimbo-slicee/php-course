<?php
/**---------------------------
 * --------PHP Data Type------
 * bool=>Boolean
 * int=>Integer
 * float=> Floating Point Number| double
 * String
 * getType()
 * -----------------------------------
 * */
$userName="user Name";
$userAge=17;
$userAmounts=-100;
$userSessionTime=10.03;
$userAdd="wide World";
$userSkills=["skillOne","SkillTwo","SkillTree"];
$userData=array("one","Two","Tree");
$userWife=null;
echo gettype($userName);
echo "<br>";
echo gettype($userAge);
echo "<br>";
echo gettype($userAmounts);
echo "<br>";
echo gettype($userSessionTime);
echo "<br>";
echo gettype($userSkills);
echo "<br>";
echo gettype($userWife);
echo "<br>";

