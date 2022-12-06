from payment import Payment

class cash(Payment):
    entry = int
    exchange = int
    
    def __init__(self, id, a, k, en, ex):
        super().__init__(id, a, k)
        self.entry = en
        self.exchange = ex