@echo off
setlocal

:: Ruta de instalación
set "GIT_DIR=C:\Git"

:: URL del instalador compatible con Windows 7 de 32 bits
set "GIT_URL=https://github.com/git-for-windows/git/releases/download/v2.32.0.windows.1/Git-2.32.0-32-bit.exe"
set "GIT_EXE=%TEMP%\git_installer.exe"

echo Descargando Git para Windows 7 (32-bit)...
powershell -Command "Invoke-WebRequest -Uri '%GIT_URL%' -OutFile '%GIT_EXE%'"

echo Instalando Git en modo silencioso...
"%GIT_EXE%" /VERYSILENT /NORESTART /DIR="%GIT_DIR%"

echo Agregando Git al PATH...
setx PATH "%PATH%;%GIT_DIR%\bin;%GIT_DIR%\cmd"

echo Verificando instalación...
git --version

echo Instalación completada.
pause