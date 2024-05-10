@Entity
public class ContactMess{
    @Id 
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
    private String name;
    String email;
    String message;

    //constructprs 
    public ContactMess(){
        //default constructor
    }

    public ContactMess(String name,String email,String message){
        this.name = name;
        this.email =email;
        this.message =message;
    }
   
    //getters and setters
    public Long getId()
    {
        return id;
    }

    public void setId(Long id){
        this.id = id;
    }

    public String getName(){
        return name;

    }
    public void setName(String name){
        this.name = name;
    }
    public String getMessage(){
        return message;
    }

    public void setMessage(String message){
        this.message = message;
    }

    public String getEmail(){
        return email;
    }

    public void stEmail(String email){
        this.email = email;
    }
    
}