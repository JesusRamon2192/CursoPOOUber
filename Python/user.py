from account import Account

class User(Account):
    typeUser = str
    
    def __init__(self, n, d, e, p, tU):
        super().__init__(n, d, e, p)
        self.typeUser = tU