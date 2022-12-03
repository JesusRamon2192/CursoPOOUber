package Java;

import java.util.ArrayList;
import java.util.Map;

public class UberBlack extends Car {
    Map<String, Map<String,Integer>> typeCarAccepted;
    ArrayList<String> seatsMaterial;

    public UberBlack(String l, Account d, Map<String, Map<String,Integer>> tCA, ArrayList<String> sM){
        super(l, d);
        this.typeCarAccepted = tCA;
        this.seatsMaterial = sM;
    }
}
