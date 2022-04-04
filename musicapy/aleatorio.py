#aleatorio
import os
import sys
import random
dato1 = os.getcwd()
command = 'killall omxplayer.bin'
os.system(command)

#ddato =os.listdir("/var/www/html/musica")
#n = random.randint(1,2 )
#s = str(n)

#aleatorio = 'sudo mplayer /var/www/html/musica/'+s+'.mp3'
aleatorio = 'omxplayer /var/www/html/musica/"`grep -si '+sys.argv[1]+' /var/www/html/musica/archivo.txt`"'

os.system(aleatorio)