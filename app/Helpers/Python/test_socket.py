import socket

def  go(msg): 
    print(msg)

    s=socket.socket(socket.AF_INET,socket.SOCK_STREAM)
    s.connect(('47.96.18.108',12346))
    s.send(b"control0001")
   # print(s.recv(1024))

    s.send(b'exit')
    
    print('12346 port connect finish!')



