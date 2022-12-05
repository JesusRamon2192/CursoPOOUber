from car import Car
from uberX import UberX
from account import Account

if __name__ == "__main__":
    print ("Hola mundo")
    car = Car("AMS123", Account("Andres Herrera", "ANDA876"))
    print(vars(car))
    print(vars(car.driver))
    
    car2 = UberX("JSD456", Account("Andrea Herrera", "JASH45"), "Chevrolet", "Spark")
    print(vars(car2))
    print(vars(car2.driver))