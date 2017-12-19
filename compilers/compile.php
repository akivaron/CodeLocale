<?php

$langID=$_POST["selectlanguage"];
if($langID=="null")
{
    echo '<script>alert("Please select a language!")</script>';
}
$code=$_POST['code'];
if($code=="")    
    {
   	 echo "The code area is empty";
    }
else
{
switch ($langID)
{
    case "c":
    {
   	 include("compilers/c.php");
   	 break;
    }

    case "cpp":
    {
   	 include("compilers/cpp.php");
   	 break;
    }

    case "java":
    {
   	 include("compilers/java.php");
   	 break;
	}

	case"python27":
	{
   	 include("compilers/python27.php");
   	 break;
	}

	case"python32":
	{
   	 include("compilers/python32.php");
   	 break;
	}
}
}
?>
