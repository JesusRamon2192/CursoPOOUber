package Java;

public class Car {
    private Integer id;
    private String license;
    private Account driver;
    protected Integer passenger;
    
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

    public Integer getId() {
        return id;
    }

    public String getLicense() {
        return license;
    }

    public Account getDriver() {
        return driver;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public void setLicense(String license) {
        this.license = license;
    }

    public void setDriver(Account driver) {
        this.driver = driver;
    }

    
}
