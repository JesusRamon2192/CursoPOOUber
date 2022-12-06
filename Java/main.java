package Java;

class main {
    public static void main(String[] args) {
       UberX uber = new UberX("AMQ123", new Account("Andres Herrera", "AND123"), "Chevrolet", "Spark");
       //uber.passenger = 4;
       uber.setPassenger(4);
       uber.printDataCar();

       /* Car car2 = new Car("QWE567", new Account("Andrea Herrera", "AHS345"));
       car2.passenger = 3;
       car2.printDataCar(); */
    }
}