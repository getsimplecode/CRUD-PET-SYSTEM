
<h1>U P D A T E</h1>
<form action="?update=<?php echo $id?>" method="post">
    <input type =   "text"      placeholder =   "Name"   name=  "petname"  value=   "<?php echo $petname    ?>  ">
    <input type =   "number"    placeholder =   "Age"    name=  "petage"   value=   "<?php echo $petage     ?>  ">
    <input type =   "text"      placeholder =   "email"  name=  "petemail" value=   "<?php echo $petemail   ?>  ">
    <button type="submit" name="update">Update</button>
</form>