import Java.myproject.JAVA.Car;

public class mainclass {
    public static void main(String[] args){
        Car myCar = new Car("Toyota"," Camry",2022,4 );
        System.out.println("Make: "+ myCar.getMake());
        System.out.println("Model: "+ myCar.getModel());
        System.out.println("Year: "+ myCar.getYear());
        System.out.println("Number of doors: "+ myCar.getNumDoors());
        myCar.drive();



    }

}
