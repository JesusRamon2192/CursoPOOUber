from account import Account

class Driver(Account):
    typeDriver = str
    
    def __init__(self, n, d, e, p, tD):
        super().__init__(n, d, e, p)
        self.typeDriver = tD