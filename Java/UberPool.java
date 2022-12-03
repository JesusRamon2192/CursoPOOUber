package Java;

public class UberPool extends Car {
    String brand;
    String model;

    public UberPool(String l, Account d, String b, String m){
        super(l, d);
        this.brand = b;
        this.model = m;
    }
}
