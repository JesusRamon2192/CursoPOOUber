package Java;

import java.util.ArrayList;
import java.util.Map;

public class UberVan extends Car {
    Map<String, Map<String,Integer>> typeCarAccepted;
    ArrayList<String> seatsMaterial;

    public UberVan(String l, Account d, Map<String, Map<String,Integer>> tCA, ArrayList<String> sM){
        super(l, d);
        this.typeCarAccepted = tCA;
        this.seatsMaterial = sM;
    }
}
