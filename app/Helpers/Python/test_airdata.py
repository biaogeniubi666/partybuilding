import pymysql
import serial
import json
from urllib.request import Request, urlopen
import time
import threading
import socket
encoding = 'utf-8'
BUFSIZE = 1024

def go (port):
    class Listener(threading.Thread):
        def __init__(self, port):
            threading.Thread.__init__(self)
            self.port = port
            self.sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)    
            self.sock.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)
            self.sock.bind(("172.16.85.52", port))
            self.sock.listen(0)

        def run(self):
            print("listener started")
            while True:
                client, cltadd = self.sock.accept()
                print(cltadd)
                print("----------------------")
                print(client)
                print("----------------------")
                print("accept a connect")
    lst  = Listener(port)   # create a listen thread
    lst.start() # then start


    # port = port
    # class Listener(threading.Thread):
    #     def __init__(self, port):
    #         threading.Thread.__init__(self)
    #         self.port = port
    #         self.sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)    
    #         self.sock.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)
    #         self.sock.bind(("172.16.85.52", self.port))
    #         self.sock.listen(0)

    #     def run(self):
    #         print("listener started")
    #         while True:
    #             request,addr = self.sock.accept()
    #             print("accept a connect")    
    #             print(request,addr)  

    # lst  = Listener(port)   # create a listen thread
    # lst.start() # then start
 