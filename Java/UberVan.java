package Java;

import java.util.ArrayList;
import java.util.Map;

public class UberVan extends Car {
    Map<String, Map<String,Integer>> typeCarAccepted;
    ArrayList<String> seatsMaterial;

    public UberVan(String l, Account d){
        super(l, d);
    }

    @Override
    public void setPassenger(Integer p) {
        if(p == 6){
            this.passenger = p;
        } else {
            System.out.println("Necesitas asignar 6 pasajeros");
        }
    }
}
