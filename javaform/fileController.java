@RestController

public class fileController {
    @PostMapping("/submitForm")
    public String submitForm(@RequestBody FormData formData){
        System.out.println(formData.toString());
        return "Form Submitted";
    }

}
class FormData{
    private String name;
    private String email;
    private String message;

    //getter 

    public String getName()
    {
        return name;
    }

    public String getEmail(){
        return  email;
    }

    public String getMessage(){
        return message;
    }

    // setter
    public void setName(){
        this.name = name;
    }

    public void setEmail(){
        this.email = email;
    }

    public void setMessage(){
        this.message = message;
    }

    @Override

    public  String toString(){
        return "FormData {" +
        "name ='" + name + '\'' +
        ", email ='" + email + '\'' + 
        ", message ='" + message + '\''+
        '}';
    }
}
