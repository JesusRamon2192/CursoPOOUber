package Java;

public class Car {
    Integer id;
    String license;
    Account driver;
    Integer passenger;
    
    public Car (String l, Account d){
        this.license = l;
        this.driver = d;
    }

    void printDataCar(){
        System.out.println("License: " + license + "Name Driver: " + driver.name );
    }
}
