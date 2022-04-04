#!usr/bin/env/ python
#enciende.py
#importamos la libreria GPIO
import sys
import RPi.GPIO as GPIO 
#Definimos el modo BCM 
import time

GPIO.setwarnings (False) 
GPIO.setmode(GPIO.BCM) 


gpus = sys.argv[1]

gpus2 = sys.argv[2]


#Ahora definimos el pin GPIO 18 como salida

#Y le damos un valor logico alto para encender el LED
 
GPIO.setup(int(gpus), GPIO.OUT) 

try:
     print(""+gpus ) 
    
     GPIO.output(int(gpus), int(gpus2))
                   
except KeyboardInterrupt: # If CTRL+C is pressed, exit cleanly:
   print("Keyboard interrupt")
except:
   print("some error") 
finally:
   print("clean up") 
   