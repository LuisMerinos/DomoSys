#!usr/bin/env/ python
#enciende.py
#importamos la libreria GPIO
import RPi.GPIO as GPIO 
#Definimos el modo BCM
GPIO.setwarnings (False) 
GPIO.setmode(GPIO.BCM) 
#Ahora definimos el pin GPIO 18 como salida
GPIO.setup(17, GPIO.OUT) 
#Y le damos un valor logico alto para encender el LED
GPIO.output(17, GPIO.LOW)
