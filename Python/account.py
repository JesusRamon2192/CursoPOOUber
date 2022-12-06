class Account:
    id          = int
    name        = str
    document    = str
    email       = str
    password    = str
    
    def __init__(self, n, d, e, p):
        self.name = n
        self.document = d
        self.email = e
        self.password = p
        