@echo off
setlocal enabledelayedexpansion

title TailwindCSS Starter
color 0C
cd /d "%~dp0"

echo =================================
echo Tailwind CSS Watch Starting
echo =================================
echo [FOLDER] %CD%
echo.

where node >nul 2>nul
if errorlevel 1 (
    echo [ERROR] Node.js was not found.
    pause
    goto :EOF
)

where npm >nul 2>nul
if errorlevel 1 (
    echo [ERROR] npm was not found.
    pause
    goto :EOF
)

echo [OK] Node.js and npm were found.
echo.

if not exist "package.json" (
    echo [INFO] package.json was not found, creating it...
    call npm init -y
    if errorlevel 1 (
        echo [ERROR] npm init -y failed.
        pause
        goto :EOF
    )
) else (
    echo [OK] package.json was found.
)

if not exist "node_modules" (
    echo [INFO] node_modules was not found, running npm install...
    call npm install
    if errorlevel 1 (
        echo [ERROR] npm install failed.
        pause
        goto :EOF
    )
) else (
    echo [OK] node_modules was found.
)

set NEED_TW_INSTALL=0

if not exist "node_modules\tailwindcss" set NEED_TW_INSTALL=1
if not exist "node_modules\@tailwindcss\cli" set NEED_TW_INSTALL=1

if "!NEED_TW_INSTALL!"=="1" (
    echo [INFO] Tailwind packages are missing, installing...
    call npm install -D tailwindcss @tailwindcss/cli
    if errorlevel 1 (
        echo [ERROR] Failed to install Tailwind packages.
        pause
        goto :EOF
    )
) else (
    echo [OK] Tailwind packages were found.
)

if not exist "assets" mkdir "assets"
if not exist "assets\css" mkdir "assets\css"

if not exist "assets\css\app.css" (
    echo [INFO] assets\css\app.css was not found, creating it...
    (
        echo @import "tailwindcss";
    ) > "assets\css\app.css"
) else (
    echo [OK] assets\css\app.css was found.
)

if not exist "assets\css\site.css" (
    echo [INFO] assets\css\site.css was not found, creating it...
    type nul > "assets\css\site.css"
) else (
    echo [OK] assets\css\site.css was found.
)

echo.
echo [INFO] Starting Tailwind watch...
echo [INFO] Input  : assets/css/app.css
echo [INFO] Output : assets/css/site.css
echo.

call npx @tailwindcss/cli -i "./assets/css/app.css" -o "./assets/css/site.css" --watch

echo.
echo [ERROR] Tailwind process stopped.
pause
