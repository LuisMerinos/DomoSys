#!/usr/bin/python

import sys
import os

command = 'killall mplayer'
os.system(command)
print 'Number of arguments:', len(sys.argv), 'arguments.'
print 'Argument List:', str(sys.argv)
aleatorio = 'mplayer /home/pi/Music/'+str(sys.argv[2])+'.mp3'
os.system(aleatorio)

