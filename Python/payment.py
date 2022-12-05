class Payment:
    id = int
    amount = int
    kind = str
    
    def __init__(self, id, a, k):
        self.id = id
        self.amount = a
        self.kind = k