# restApiUsers
Простое Rest APi для работы с пользователями
Рабоатет в связке с базой данных
# Методы
## createUser.php - Создание пользователя
Возвращает json с логином и паролем созданного пользователя
### Атрибуты createUser
###### email - Почта пользователя
###### name - имя пользователя
###### secondName - фамилия пользователя
###### dateBirth - дата рождения пользователя
## getUser.php - Получение информации о пользователк
Возвращает json с логином, паролем, почтой, именем, фамилией, датой рождения и loginToken пользователя
### Атрибуты getUser
###### login - логин пользователя, который возвращается в результате роботы метода createUser.php
## updateUser.php - Обновление информации пользователя
Возвращает json с названием измененного поля и новым значением этого поля
Данный метод может выполняться тольео после авторизации пользователя методом authUser.php
### Атрибуты createUser
###### loginToken - токен, получаемый после каждой авторизации пользователя
###### changeField - наименование поля, которое нужно изменить(login, pass, name, secondName, email, dateBirth)
###### changeValue - значение, на которое нужно поменять
## authUser.php - Авторизует пользователя
Возвращает json с loginToken
### Атрибуты createUser
###### login - логин пользователя
###### pass - пароль пользователя
## deleteUser.php - Удаляет пользователя
Возвращает json со статусом выполнения(true или false)
### Атрибуты createUser
###### login - логин пользователя
