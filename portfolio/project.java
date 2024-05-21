package portfolio;

@Entity
public class project {
    @Id 
    @GeneratedValue(strategy = GeneratedType.IDENTITY)
    private int id;
    private String name;
    private String message;
    private String email;

    //constructors
    public project(){
        //    default constructor
    }

    public project(int id,String name,String message,String email){
        this.id = id;
        this.name = name;
        this.message = message;
        this.email = email;
    }

    //getter
    public int getID()
    {   
        return id;
    }

    public int getName()
    {   
        return name;
    }

}
