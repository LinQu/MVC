<h1>User List</h1>
<a href="?controller=UserController/form">+ Add New</a>
<ol>
  <?php foreach ($userList as $id => $userData) : ?>
    <li>
      <a href="?controller=UserController/edit/<?php echo $id ?>">
        <?php echo $userData['name'] . "," . $userData['age'] . "years old" ?>
      </a>
      <a href="?controller=UserController/delete/<?php echo $id ?>">
        <button>Delete</button>
      </a>
    </li>
  <?php endforeach ?>
</ol>