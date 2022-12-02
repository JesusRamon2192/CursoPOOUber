from car import Car
from account import Account

if __name__ == "__main__":
    print ("Hola mundo")
    car = Car("AMS123", Account("Andres Herrera", "ANDA876"))
    print(vars(car))
    print(vars(car.driver))
    
    car2 = Car("JSD456", Account("Andrea Herrera", "JASH45"))
    print(vars(car2))
    print(vars(car2.driver))