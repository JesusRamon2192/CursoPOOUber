from account import Account

class Car:
    id = int
    license = str
    driver = Account("", "")
    passenger = str
    
    def __init__(self, l, d):
        self.license = l
        self.driver = d
    
    