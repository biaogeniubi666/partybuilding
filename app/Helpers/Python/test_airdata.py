# import socket
def  go(): 
   
    try:
        s=socket.socket(socket.AF_INET,socket.SOCK_STREAM)
        s.connect(('47.96.18.108',11111))
        print('正在接收控制数据') 
        print(s.recv(1024))
    except:
        pass


 