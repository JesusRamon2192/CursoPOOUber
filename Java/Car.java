package Java;

public class Car {
    Integer id;
    String license;
    Account driver;
    Integer passenger;
    
    public Car (String license2, Account driver2){
        this.license = license2;
        this.driver = driver2;
    }

    void printDataCar(){
        System.out.println("License: " + license + "Name Driver: " + driver.name );
    }
}
