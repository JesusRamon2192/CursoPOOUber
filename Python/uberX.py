from car import Car

class UberX(Car):
    brand = str
    model = str
    
    def __init__(self, l, d, b, m):
        super(UberX, self).__init__(l, d)
        self.brand = b
        self.model = m