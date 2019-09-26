import socket

def go (port):
    sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    sock.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)
    sock.bind(("47.96.18.108", port)) 
    sock.listen(0)
    request, addr = sock.accept()

    print(request,addr)