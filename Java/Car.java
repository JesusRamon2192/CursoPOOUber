package Java;

public class Car {
    Integer id;
    String license;
    Account driver;
    private Integer passenger;
    
    public Car (String l, Account d){
        this.license = l;
        this.driver = d;
        
    }

    void printDataCar(){
        if(passenger != null){
            System.out.println("License: " + license + "Name Driver: " + driver.name + " Passengers: " + passenger);
        }
    }

    public Integer getPassenger(){
        return passenger;
    }

    public void setPassenger(Integer p){
        if(p == 4){
            this.passenger = p;
        } else {
            System.out.println("Necesitas asignar 4 pasajeros");
        }
    }
}
