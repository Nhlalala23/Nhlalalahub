public class Car extends Vehicle{
    private int numDoors;

    public Car(String make, String model,int year , int numDoors)
    {
        super(make,modelyear);
        this.numDoors = numDoors;
    }

    //getter

    public int getNumDoors(){
        return numDoors;
    }

    public void setNumDoors(int numDoors){
        System.out.println("My car");
    }
}