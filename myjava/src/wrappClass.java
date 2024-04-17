public class wrappClass {
    public static void main(String[] args) {
        Integer intObj = new Integer(100);
        Double doubleObj = new Double(200.5);
        Character charObj = new Character('A');
        Boolean boolObj = new Boolean(true);

        System.out.println("Integer Value : " + intObj);
        System.out.println("Double Value : " + doubleObj);
        System.out.println("Character Value : " + charObj);
        System.out.println("Boolean Value : " + boolObj);

        int intValue = intObj.intValue();
        double doubleValue = doubleObj.doubleValue();
        char charValue = charObj.charValue();
        boolean boolValue = boolObj.booleanValue();

        System.out.println("Converted Values: " + intValue + ", " + doubleValue + ", "+ boolValue);


    }
    
}
