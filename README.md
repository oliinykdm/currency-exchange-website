# WMZOBMEN
Дамп БД - папка sql.
Propel (schema.xml) - tasks/obmennik/

# Оновлення даних для Propel
1. Змінюєш структуру БД в schema.xml.
2. Win+R - Cmd.
3. cd tasks/obmennik
5. ..\..\vendor\bin\propel model:build (для побудови класів)
6. ..\..\vendor\bin\propel sql:build (для побудови структури БД, .sql-файл).
7. Копіювати весь вміст tasks/obmennik/generated-classes/Model в папку фреймворка application/classes/Model (перед копіюванням краще очистити всю папку).
8. Profit.

# LESS -> File watchers PHPStorm
* File -> Settings -> Tools -> File Watchers. Додати новий, формат LESS. 
* Program: ШЛЯХ\npm\lessc.cmd
* Output paths to refresh: ..\css\$FileNameWithoutExtension$.css
