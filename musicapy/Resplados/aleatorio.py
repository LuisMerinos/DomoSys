#aleatorio
import os
import random
dato1 = os.getcwd()
command = 'killall mplayer'
ddato =os.listdir("/var/www/html/musica")

os.system(command)
n = random.randint(1,2 )
s = str(n)

#aleatorio = 'sudo mplayer /var/www/html/musica/'+s+'.mp3'
aleatorio = 'omxplayer /var/www/html/musica/"`grep -si perdedor /var/www/html/musica/archivo.txt`"'

os.system(aleatorio)
