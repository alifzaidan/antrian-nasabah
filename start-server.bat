@echo off

start npm run dev
start php artisan serve
start php artisan serve --host 52.34.228.89 --port 8000

timeout /t 5 > nul
start http://127.0.0.1:8000

pause
