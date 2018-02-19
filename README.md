
# Secure loginform


Настоящата форма за вход и регистрация е реализирана със следните проверки:

  - password_verify
  - password_hash за стойност е използван PASSWORD_DEFAULT
  - проверка за дължина на име, парола, e-mail
  - използва база данни
  - използван е последната версия на bootstrap4
 

# Какво няма!

  - Няма сесии
  - И понеже няма сесии няма и изход
  - Няма форма за забравена парола



### Resource
| PHP |  |
| ------ | ------ |
|password-hash | http://php.net/manual/en/function.password-hash.php |
|password-verify | http://php.net/manual/en/function.password-verify.php |
| Bootstrap 4 | https://v4-alpha.getbootstrap.com/ |


### Todos

 - Да се добавят сесии
 - Да се добави изход
 - Да се добави форма за забравена парола
 - Да се направят още няколко подобрения

License
----

MIT


**Free Software, Stoyan Miladinov!**

