#siguiente
import os
import sys

command = 'killall omxplayer.bin'
os.system(command)

siguiente ='sudo omxplayer /var/www/html/musica/"`awk "NR=='+sys.argv[1]+'" /var/www/html/musica/archivo.txt`"'

os.system(siguiente)
