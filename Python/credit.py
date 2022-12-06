from payment import Payment

class credit(Payment):
    number = str
    cvv = int
    date = str
    
    def __init__(self, id, a, k, n, c, d):
        super().__init__(id, a, k)
        self.number = n
        self.cvv = c 
        self.date = d