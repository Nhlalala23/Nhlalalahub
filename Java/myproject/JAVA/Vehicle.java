public class Vehicle{
    private String make;
    private String model;
    private int year;

    public Vehicle(String make, String model, int year)
    {
        this.make =make;
        this.mode = model;
        this.year = year;
    }

    //getter
    public String getMake(){
        return make;
    }

    public String getModel()
    {
        return model;
    }

    public int getYear(){
        return year;
    }

    public String setMake(){
        this.make = make;
    }
   

    public String setModel()
    {
        this.model = model;
    }

    public int setYear(){
        this.year = year;
    }

}