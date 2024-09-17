<form action="?update=<?php echo $id?>" method="post">
    <label>Firstname:</label>
    <input type="text" name="firstname" value="<?php echo $firstname?> ">
    <label>Lastname:</label>
    <input type="text" name="lastname" value="<?php echo $lastname?> ">
    <label>Email:</label>
    <input type="text" name="email" value="<?php echo $email?> ">
    <label>Address:</label>
    <input type="text" name="address" value="<?php echo $address?> ">

    <input type="submit" name="update" value="update">
</form>