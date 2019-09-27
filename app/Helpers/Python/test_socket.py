import json
from urllib.request import Request, urlopen
import time
import threading
import socket

def  go(msg): 
    
    print(msg)   
    try:
        s=socket.socket(socket.AF_INET,socket.SOCK_STREAM)
        s.connect(('47.96.18.108',12346))
        bmsg=bytes(msg,"ascii")
        s.send(bmsg)
        print('已发送控制指令') 

        print(s.recv(1024))
        s.send(b'exit')
    except:
        pass

    






