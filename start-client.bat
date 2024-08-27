@echo off

start npm run dev

timeout /t 5 > nul
start http://52.34.228.89:8000

pause
