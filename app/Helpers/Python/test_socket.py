import pymysql  #输入pip install pymysql安装该模块
import serial   #输入pip install serial安装该模块
import json
from urllib.request import Request, urlopen
import time
import threading
import socket

def  go(msg): 
    
    print(msg)
    
    #---------------------------------------#  
    # print('connect success!')
    
    # s=socket.socket(socket.AF_INET,socket.SOCK_STREAM)
    # s.connect(('47.96.18.108',12346))
    # bmsg=bytes(msg,"ascii")
    # s.send(bmsg)
    
    # print(s.recv(1024))

    # s.send(b'exit')



