<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Form</title>
  </head>
  <body>
    <?php  ?>
    ФОРМА ДЛЯ СОЗДАНИЯ ЗАПИСИ:
    <form action="create.php" method="post">
      <label>Фамилия</label>
      <input type="text" name="firstname" required />
      <br />
      <label>Имя</label>
      <input type="text" name="lastname" required />
      <br />
      <label>Код</label>
      <input type="id" name="id" required />
      <br />
      <input type="submit" value="Создать" />
    </form>
    ФОРМА ДЛЯ ЧТЕНИЯ ЗАПИСИ:
    <form action="read.php" method="get">
      <label>Код</label>
      <input type="id" name="id" required />
      <br />
      <input type="submit" value="Читать" />
    </form>

    ФОРМА ДЛЯ ОБНОВЛЕНИЯ ЗАПИСИ:
    <form action="update.php" method="post">
      <label>Код</label>
      <input type="id" name="id" required />
      <br />
      <label>Фамилия</label>
      <input type="text" name="firstname" />
      <br />
      <label>Имя</label>
      <input type="text" name="lastname" />
      <br />
      <input type="submit" value="Обновить" />
    </form>

    ФОРМА ДЛЯ УДАЛЕНИЯ ЗАПИСИ:
    <form action="delete.php" method="post">
      <label>ID User:</label>
      <input type="id" name="id" required />
      <br />
      <input type="submit" value="Удалить" />
    </form>
  </body>
</html>