#!/bin/bash
set -e
 
# Lee la variable PHP_EXTENSIONS del environment, si existe
if [ -n "$PHP_EXTENSIONS" ]; then
  yum install -y $PHP_EXTENSIONS
fi
 
# Llama al assemble original de la imagen base S2I
if [ -f /usr/libexec/s2i/assemble ]; then
  exec /usr/libexec/s2i/assemble
elif [ -f /usr/local/bin/assemble ]; then
  exec /usr/local/bin/assemble
else
  echo "No se encontró el script assemble base."
  exit 1
fi
