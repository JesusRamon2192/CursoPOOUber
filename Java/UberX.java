package Java;

public class UberX extends Car {
    String brand;
    String model;

    public UberX(String l, Account d, String b, String m){
        super(l, d);
        this.brand = b;
        this.model = m;
    }

    @Override
    void printDataCar() {
        // TODO Auto-generated method stub
        super.printDataCar();
        System.out.println("Modelo: " + model + " Brand: " + brand);
    }
}
