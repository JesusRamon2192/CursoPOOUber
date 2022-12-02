class Account:
    id          = int
    name        = str
    document    = str
    email       = str
    password    = str
    
    def __init__(self, n, d):
        self.name = n
        self.document = d
        