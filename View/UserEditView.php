<html>


<h1>User Form</h1>
<form action="" method="post">
  <label for="name">Name</label>
  <input type="text" name="name" id="name" value="<?php echo $userData['name'] ?>">
  <label for="age">Age</label>
  <input type="text" name="age" id="age" value="<?php echo $userData['age'] ?>">
  <input type="submit" value="Save">
</form>

</html>