package Java;

class main {
    public static void main(String[] args) {
       UberX uber = new UberX("AMQ123", new Account("Andres Herrera", "AND123"), "Chevrolet", "Spark");
       uber.setPassenger(4);
       uber.printDataCar();

       UberVan ubervantest = new UberVan("FGH123", new Account("Andrea Ferran", "JHS982"));
       ubervantest.setPassenger(6);
       ubervantest.printDataCar();
    }
}