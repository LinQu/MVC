<h1>User List</h1>
<a href="?controller=UserController/form">+ Add New</a>
<ol>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($userList as $id => $userData) : ?>
        <tr>
          <td><?php echo $userData['name'] ?></td>
          <td><?php echo $userData['age'] ?></td>
          <td>
            <a href="?controller=UserController/edit/<?php echo $id ?>"><button>Edit</button></a>
            <a href="?controller=UserController/delete/<?php echo $id ?>"><button>Delete</button></a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
  <!-- <li>
      <a href="?controller=UserController/edit/<?php echo $id ?>">
        <?php echo $userData['name'] . "," . $userData['age'] . "years old" ?>
      </a>
      <a href="?controller=UserController/delete/<?php echo $id ?>">
        <button>Delete</button>
      </a>
    </li> -->

</ol>