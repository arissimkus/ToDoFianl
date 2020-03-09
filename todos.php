<?php include('function.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>My ToDo</title>
  <link rel="stylesheet" type="text/css" href="styles/style.css" />
</head>

<body>
  <header>
    <div class="headCont media">
      <div class="social-cont">
        <a href="https://www.facebook.com"> <img class="socImg" src="/img/faceb.png" alt="Facebook"></a>
        <a href="https://www.instagram.com"> <img class="socImg" src="/img/insta.png" alt="Instagram"></a>
        <a href="https://www.pinterest.com"> <img class="socImg" src="/img/pint.png" alt="Instagram"></a>
        <a href="https://www.twitter.com"> <img class="socImg" src="/img/twit.png" alt="Instagram"></a>
      </div>
      <button class="btnLogout">LOGOUT</button>
    </div>
  </header>
  <div class="container media wrap">
    <?php $results = mysqli_query($mysqli, "SELECT * FROM tasks"); ?>
    <table>
      <thead>
        <tr>
          <th>Task ID</th>
          <th>Task</th>
          <th>Important</th>
          <th>Actions</th>
        </tr>
      </thead>
      <?php while ($row = mysqli_fetch_array($results)) {
        $rowid = $row['ID'] ?>
        <tr class="post-tr">
          <form method="POST" action="todos.php">
            <td class="idCell"><input class="idCell" type="text" name="rowid" value="<?php echo $row['ID']; ?>" readonly></input></td>
            <td><input class="taskCell" type="text" name="edTask" value="<?php echo $row['task']; ?>"></input></td>
            <td class="impCell"><input class="impCell" type="text" name="edImp" value="<?php echo $row['important']; ?>"></input></td>
            <td class="btn-td"><button class="btn-edit btn" name="saveNew">SAVE</button>
              <input type="hidden" name="rowid" value="<?php echo $rowid ?>" />
              <button class="btn-delete btn" type="submit" name="del" value="">DELETE</button>
            </td>
          </form>
        </tr>
      <?php } ?>
    </table>
    <div class="addTask">
      <span class="addTaskTop">ADD NEW TODO</span>
      <form method="POST" action="todos.php">
        <label for="task">Describe you task</label>
        <input class="taskCell" type="text" id="taskDesc" name="task" value="" /><br /><br />
        <label for="importance">Is it important? (YES/NO)</label>
        <input class="taskCell" type="text" id="importance" name="important" value="" /><br /><br />
        <button class="btnSub" type="submit" name="save">SUBMIT</button>
      </form>
    </div>
  </div>
  <footer class="media">
    (C)2020
  </footer>
</body>

</html>