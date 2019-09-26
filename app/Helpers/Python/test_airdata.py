import socket
import threading

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
                request,addr = self.sock.accept()
                print("accept a connect")    
                print(request,addr)  

    lst = Listener(port)
    lst.start();
