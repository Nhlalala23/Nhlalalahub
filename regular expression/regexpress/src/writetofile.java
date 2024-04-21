import java.io.BufferedWriter;
import java.io.FileWriter;
import java.io.IOException;



public class writetofile {
    public static void main(String[] args) {
        try(ButteredWriter writer = new BufferedWriter(new FileWriter("sample.java"))){
            writer.write("Hello Nhlalala Mthombeni");
            writer.newLine();
            writer.write("Just testing");
        }
        catch(IOException e){
            e.printStackTrace();
        }
    }
}
