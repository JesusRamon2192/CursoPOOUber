from payment import Payment

class PayPal(Payment):
    email = str
    
    def __init__(self, id, a, k, e):
        super().__init__(id, a, k)
        self.email = e