from car import Car

class UberPool(Car):
    brand = str
    model = str
    
    def __init__(self, l, d, b, m):
        super().__init__(l, d)
        self.brand = b
        self.model = m