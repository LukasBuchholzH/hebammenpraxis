mkdir deploy

set DEPLOY=TRUE
php\php.exe -c php\php.ini-development index.php > deploy\index.html
php\php.exe -c php\php.ini-development courses.php > deploy\courses.html
php\php.exe -c php\php.ini-development leistungen.php > deploy\leistungen.html

echo F | xcopy /Y impressum.html deploy\impressum.html
xcopy /Y /S css deploy\css\
xcopy /Y /S img deploy\img\
