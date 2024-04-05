import java.awt.Font;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.SwingUtilities;

public class homePage extends JFrame implements ActionListener {
    //Declares GUI components as class varials

    private JLabel welcomeLabel;
    private JButton logiButton;
    private JButton signUpButton;

    public homePage(){
        setTitle("Home page");
        setSize(400,200);
        setDefaultCloseOperation(EXIT_ON_CLOSE);

        //creating componets
        welcomeLabel = new JLabel("Welcome to my Shop");
        welcomeLabel.setFont(new Font("Arial",Font.BOLD,20)); //SETING FONT AND SIZES 
        welcomeLabel.setHorizontalAlignment(JLabel.CENTER); // set alignment

        logiButton = new JButton("Login");
        logiButton.addActionListener(this); // add action listener

        signUpButton = new JButton("Sign up");
        signUpButton.addActionListener(this);

        
        // adding componets to the frame
        setLayout(new GridLayout()); // adding a layout for the frame
        add(welcomeLabel);
        add(logiButton);
        add(signUpButton);

        setVisible(true); //makin frame visible
        }

    
    @Override
    public void actionPerformed(ActionEvent e) {
        // ActionListener implementation
        if(e.getSource() == logiButton){
            JOptionPane.showMessageDialog(this, "Redirecting to login page...");

        }
        else if(e.getSource()==signUpButton) {
            JOptionPane.showMessageDialog(this,"Redirecting to sign up page....");

        }

    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(new Runnable(){
            public void run(){
                new homePage();
            }
        });
    }
}