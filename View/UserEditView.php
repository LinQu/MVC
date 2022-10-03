<html>


<h1>User Form</h1>
<form action="" method="post">
  <table>
    <tr>
      <td><label for="name">Name</label></td>
      <td>:</td>
      <td><input type="text" name="name" id="name" value="<?php echo $userData['name'] ?>"></td>
    </tr>
    <tr>
      <td><label for="age">Age</label></td>
      <td>:</td>
      <td><input type="text" name="age" id="age" value="<?php echo $userData['age'] ?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" value="Save"></td>
    </tr>
  </table>

</form>

</html>