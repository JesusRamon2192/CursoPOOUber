from car import Car

class UberPool(Car):
    typeCarAccepted = []
    seatsMaterial = []
    
    def __init__(self, l, d, tCA, sM):
        super().__init__(l, d)
        self.typeCarAccepted = tCA
        self.seatsMaterial = sM