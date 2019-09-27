# import socket
def  go(): 
   
    try:
        s=socket.socket(socket.AF_INET,socket.SOCK_STREAM)
        s.connect(('172.16.85.52',11111))
        print('正在接收控制数据') 
        print(s.recv(1024))
    except:
        pass


 