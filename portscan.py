from optparse import OptionParser
from socket import *

def getip(host):
    try:
        ip=gethostbyname(host)
        return ip
    except:
        return None

def connect(host, port):
    try:
        s=socket(AF_INET, SOCK_STREAM) # TCP Socket
        s.connect((host, port))
        return s
    except:
        s.close()
        return None



def scan(host, port):
    sock=connect(host, port)
    setdefaulttimeout(5) # set default timeout to 5 sec
    if sock:
        print("[+] OPEN %s:%d"%(host, port))
        sock.close() # Done
    else:
        print("[!] CLOSED %s:%d"%(host, port))
       
       

if __name__=="__main__":
    parser=OptionParser()
    parser.add_option("-t", "--target", dest="host", type="string",
                      help="enter host name", metavar="exemple.com")
    parser.add_option("-p", "--port", dest="ports", type="string",
                      help="port you want to scan separated by comma", metavar="PORT")

    (options, args)=parser.parse_args()
   
    if options.host==None or options.ports==None:
        parser.print_help()
    else:
        host=options.host
        ports=(options.ports).split(",")
        try: 
            ports=list(filter(int, ports)) # Store ports into list
            ip=getip(host) # Domain name to IP
            if ip:
                print("[+] Running scan on %s"%host)
                print("[+] Target IP: %s"%ip)
                for port in ports:
                    scan(host, int(port))
            else:
                print("[!] Invalid host")
        except:
            print("[!] Invalid port list (e.g: -p 21,22,53,..)")
       
